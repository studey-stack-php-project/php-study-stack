<?php
require_once '../../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once INC_DIR . 'head.php' ?>
    <title>SignUp Page</title>
</head>
<body>
    <div class="bg-cover bg-center min-vh-100 d-flex justify-content-center align-items-center"
    style="background-image: url('<?= ASSETS_URL ?>login-bg.png'); background-size: cover; background-position: center;">
        <div
        class="mx-auto d-flex flex-column justify-content-center align-items-center text-end bg-white rounded-4 shadow p-3 p-sm-4"
        style="max-width: 420px; width:80%; gap: 0rem; border: 1px solid rgba(255,255,255,0.2); box-sizing: border-box;"
        dir="rtl">

            <div class="w-100 mb-2">
                <div class="text-center py-0">
                    <img src="<?= ASSETS_URL ?>logo.png" alt="Logo" class="mx-auto" style="height: 80px;">
                </div>

                <div class="text-center">
                    <h1 class="fw-semibold fs-4 fs-sm-5">
                        إنشاء حساب جديد
                    </h1>

                </div>
            </div>

            <div class="w-100">
                <form id="signupForm">
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

                    <!-- القسم -->
                    <div class="mb-2">
                        <label for="department" class="p-1">القسم</label>
                        <input class="form-control" list="departmentOptions" id="department" placeholder="اختر القسم ...">
                        <datalist id="departmentOptions">
                            <!-- أقسام كلية الهندسة -->
                            <option value="هندسة مدنية">
                            <option value="هندسة معمارية">
                            <option value="هندسة كهربائية">
                            <option value="هندسة ميكانيكية">
                            <option value="هندسة كمبيوتر">
                        </datalist>
                    </div>

                    <!-- كلمة المرور -->
                    <div class="mb-2">
                        <label for="password" class="p-1">كلمة المرور</label>
                        <input type="password" class="form-control" id="password" placeholder="********">
                    </div>
            
                    <!-- زر الإنشاء -->
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-primary">إنشاء حساب</button>
                    </div>
                </form>
                <div class="text-center pt-2">
                    <span>لدي حساب بالفعل، </span>
                    <a href="frontend/pages/login.php">تسجيل الدخول</a>
                </div>
                <div id="errorMsg" class="alert alert-danger d-none" role="alert"></div>
            </div>
        </div>
    </div>
    <?php include_once INC_DIR . 'foot.php' ?>
    <script src="frontend/js/siginup.js"></script>
</body>
</html>