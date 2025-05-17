document.getElementById("signupForm").addEventListener("submit", function(e){
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const user_name = document.getElementById("username").value.trim();
    const university = document.getElementById("university").value.trim();
    const department = document.getElementById("department").value.trim();
    const password = document.getElementById("password").value.trim();
    const errorMess = document.getElementById("errorMsg");

    errorMess.classList.add("d-none");
    errorMess.textContent = "";

    if(!name || !user_name || !university || !department || !password){
        errorMess.classList.remove("d-none");
        errorMess.textContent = "جميع الحقول مطلوبه";
        return;
    }

    const validateResult = validatePassword(password);
    if(validateResult){
        errorMess.classList.remove("d-none");
        errorMess.textContent = validateResult;
        return;
    }

    const formData = {
        name,
        user_name,
        university,
        department,
        password
    }



    fetch("/study stack/backend/signup.php", {
        method: "POST",
        headers:{
            "Content-Type": "application/json"
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data =>{
        if(data.status === "success"){
            alert("تم التسجيل بنجاح");
        }else{
            alert("فشل التسجيل: " + (data.message || "حدث خطأ غير معروف"));
        }
    })
    .catch(err => {
        console.error("Fetch error:", err);
        alert("فشل الاتصال بالسيرفر");
    });
    

})

function validatePassword(password) {
    if (password.length < 8) {
        return "كلمة المرور يجب أن تكون 8 أحرف على الأقل";
    }

    if (!/[A-Z]/.test(password)) {
        return "يجب أن تحتوي كلمة المرور على حرف كبير واحد على الأقل";
    }

    if (!/[a-z]/.test(password)) {
        return "يجب أن تحتوي كلمة المرور على حرف صغير واحد على الأقل";
    }

    if (!/[0-9]/.test(password)) {
        return "يجب أن تحتوي كلمة المرور على رقم واحد على الأقل";
    }

    if (!/[!@#$%^&*]/.test(password)) {
        return "يجب أن تحتوي كلمة المرور على رمز خاص واحد على الأقل مثل !@#$%^&*";
    }

    return "";
}
