<nav class="navbar navbar-expand-lg navbar-light bg-light px-5 sticky-top py-2 bg-success">
    <img src="<?= ASSETS_URL ?>logo(2).png" alt="Logo2" class="mx-3" style="height: 40px;">
    <a class="navbar-brand fw-bold fs-4" href="#">StudyStack</a>

    <!-- Search form -->
    <form class="d-flex ms-auto me-3 gap-3 px-5" dir="rtl" role="search">
        <input class="form-control me-2 text-end" type="search" placeholder="ابحث هنا ..." aria-label="Search">
        <button class="btn btn-outline-primary px-3 text-center" type="submit">بــحــث</button>
    </form>

    <!-- User icon -->
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= ASSETS_URL ?>user-profile.png" alt="user" width="48" height="48" class="rounded-circle">
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">الملف الشخصي</a></li>
            <li><a class="dropdown-item" href="#">تسجيل الخروج</a></li>
        </ul>
    </div>
</nav>