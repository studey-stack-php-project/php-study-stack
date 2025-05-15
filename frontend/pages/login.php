<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="bg-cover bg-center min-vh-100 d-flex justify-content-center align-items-center"
    style="background-image: url('../assets/login-bg.png'); background-size: cover; background-position: center;">
        <div
        class="mx-auto d-flex flex-column justify-content-center align-items-center text-end bg-white rounded-4 shadow p-3 p-sm-4"
        style="max-width: 420px; width:80%; gap: 0rem; border: 1px solid rgba(255,255,255,0.2); box-sizing: border-box;"
        dir="rtl">

            <div class="w-100 mb-2">
                <div class="text-center py-0">
                    <img src="../assets/logo.png" alt="Logo" class="mx-auto" style="height: 80px;">
                </div>

                <div class="text-center">
                    <h1 class="fw-semibold fs-4 fs-sm-5">
                        تسجيل الدخول إلى الحساب
                    </h1>

                </div>
            </div>

            <div class="w-100">
                <form>

                    <!-- اسم المستخدم -->
                    <div class="mb-2">
                        <label for="username" class="">اسم المستخدم</label>
                        <input type="text" class="form-control" id="username" placeholder="اسم المستخدم">
                    </div>

                    <!-- كلمة المرور -->
                    <div class="mb-2">
                        <label for="password" class="p-1">كلمة المرور</label>
                        <input type="password" class="form-control" id="password" placeholder="********">
                    </div>

                    <!-- زر الدخول -->
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>