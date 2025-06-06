document.getElementById("loginForm").addEventListener("submit", function(e){
    e.preventDefault();

    const user_name = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    const errorMess = document.getElementById("errorMsg");
    console.log(user_name + password);
    errorMess.classList.add("d-none");
    errorMess.textContent = "";

    if(!user_name || !password){
        errorMess.classList.remove("d-none");
        errorMess.textContent = "جميع الحقول مطلوبه";
        return;
    }

    const formData = {
        user_name,
        password
    }

    fetch("/study stack/backend/login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },

       body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data =>{
        if(data.status === "success"){
            window.location.href = "/study stack/frontend/pages/explore.php";
        }else{
            errorMess.classList.remove("d-none");
            errorMess.textContent = "فشل التسجيل: " + (data.message || "حدث خطأ غير معروف");
        }
    })
    .catch(err =>{
        errorMess.classList.remove("d-none");
        errorMess.textContent ="فشل الاتصال بالسيرفر";
    })
})
