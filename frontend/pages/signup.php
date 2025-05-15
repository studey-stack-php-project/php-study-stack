<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>SignUp Page</title>
</head>
<body>
    <div class="bg-cover bg-center min-vh-100 d-flex justify-content-center align-items-center"
    style="background-image: url('frontend/assets/login-bg.png'); background-size: cover; background-position: center;">
        <div
        class="mx-auto d-flex flex-column justify-content-center align-items-center text-end bg-white rounded-4 shadow p-3 p-sm-4"
        style="max-width: 420px; width:80%; gap: 0rem; border: 1px solid rgba(255,255,255,0.2); box-sizing: border-box;"
        dir="rtl">

            <div class="w-100 mb-2">
                <div class="text-center py-0">
                    <img src="frontend/assets/logo.png" alt="Logo" class="mx-auto" style="height: 80px;">
                </div>

                <div class="text-center">
                    <h1 class="fw-semibold fs-4 fs-sm-5">
                        إنشاء حساب جديد
                    </h1>

                </div>
            </div>

            <div class="w-100">
                <form>
                    <!-- الاسم -->
                    <div class="mb-2">
                        <label for="email" class="p-1">الاسم</label>
                        <input type="text" class="form-control" id="name" placeholder="الاسم"/>
                    </div>
                    
                    <!-- اسم المستخدم -->
                    <div class="mb-2">
                        <label for="username" class="">اسم المستخدم</label>
                        <input type="text" class="form-control" id="username" placeholder="اسم المستخدم">
                    </div>

                    <!-- الجامعة -->
                    <div class="mb-2">
                        <label for="university" class="p-1">الجامعة</label>
                        <input class="form-control" list="universityOptions" id="university" placeholder="اختر الجامعة ...">
                        <datalist id="universityOptions">
                            <option value="جامعة تعز">
                            <option value="الجامعة الوطنية">
                            <option value="جامعة السعيد">
                            <option value="جامعة الجند">
                            <option value="جامعة العطاء">
                            <option value="جامعة الرواد">
                            <option value="جامعة الحكمة">
                        </datalist>
                    </div>

                    <!-- الكلية -->
                    <div class="mb-2">
                        <label for="collage" class="p-1">الكلية</label>
                        <input class="form-control" list="collageOptions" id="collage" placeholder="اختر الكلية ...">
                        <datalist id="collageOptions">
                            <option value="الطب">
                            <option value="الهندسة">
                            <option value="العلوم التطبيقية">
                            <option value="الآداب">
                            <option value="التربية">
                            <option value="العلوم الإدارية">
                            <option value="الشريعة أو القانون">
                            <option value="الحاسوب وتكنولوجيا المعلومات">
                            <option value="الصيدلة">
                            <option value="التمريض">
                            <option value="الزراعة">
                            <option value="الإعلام">
                            <option value="الفنون الجميلة">
                        </datalist>
                    </div>

                    <!-- القسم -->
                    <div class="mb-2">
                        <label for="department" class="p-1">القسم</label>
                        <input class="form-control" list="departmentOptions" id="department" placeholder="اختر القسم ...">
                        <datalist id="departmentOptions">
                            <!-- أقسام كلية الطب -->
                            <option value="طب بشري">
                            <option value="جراحة">
                            <option value="مختبرات">
                            <option value="أشعة">
                            <option value="طب أسنان">
                            <!-- أقسام كلية الهندسة -->
                            <option value="هندسة مدنية">
                            <option value="هندسة معمارية">
                            <option value="هندسة كهربائية">
                            <option value="هندسة ميكانيكية">
                            <option value="هندسة كمبيوتر">
                            <!-- أقسام كلية العلوم -->
                            <option value="فيزياء">
                            <option value="كيمياء">
                            <option value="أحياء">
                            <option value="رياضيات">
                            <!-- أقسام كلية الآداب -->
                            <option value="اللغة العربية">
                            <option value="اللغة الإنجليزية">
                            <option value="التاريخ">
                            <option value="الجغرافيا">
                            <option value="علم الاجتماع">
                            <!-- أقسام كلية التربية -->
                            <option value="معلم صف">
                            <option value="تربية إسلامية">
                            <option value="علوم">
                            <option value="رياضيات - تربية">
                            <option value="لغة إنجليزية - تربية">
                            <!-- أقسام كلية الحاسوب وتكنولوجيا المعلومات -->
                            <option value="علوم الحاسوب">
                            <option value="نظم معلومات">
                            <option value="تقنية معلومات">
                            <option value="هندسة برمجيات">
                            <!-- أقسام كلية التجارة (إدارة أعمال) -->
                            <option value="إدارة أعمال">
                            <option value="محاسبة">
                            <option value="تسويق">
                            <option value="تمويل">
                            <!-- أقسام كلية الإعلام -->
                            <option value="صحافة">
                            <option value="إذاعة وتلفزيون">
                            <option value="علاقات عامة">
                        </datalist>
                    </div>

                    <!-- كلمة المرور -->
                    <div class="mb-2">
                        <label for="password" class="p-1">كلمة المرور</label>
                        <input type="password" class="form-control" id="password" placeholder="********">
                    </div>
            
                    <!-- البروفايل -->
                    <div class="mb-2">
                        <label for="profile" class="p-1">الصورة الشخصية</label>
                        <input class="form-control" type="file" id="profile">
                    </div>

                    <!-- زر الإنشاء -->
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-primary">إنشاء حساب</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>