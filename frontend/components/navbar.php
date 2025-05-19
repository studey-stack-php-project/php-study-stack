<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Dashboard</a>
                    <a class="nav-link"  href="templates/pages/create.php">Create</a>
            </div>

            <div class="navbar-nav ms-auto">
                <a class="btn btn-outline-light" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
    <a class="navbar-brand" href="#">
        <!-- أيقونة المستخدم -->
        <i class="bi bi-person-circle fs-3"></i>
    </a>

    <!-- زر القائمة المنسدلة على الشاشات الصغيرة -->
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNavbar"
        aria-controls="mainNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- المحتوى القابل للطي -->
    <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- أمثلة على روابط إن احتجت -->
        <li class="nav-item">
            <a class="nav-link active" href="#">الرئيسية</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">حول</a>
        </li>
        </ul>

        <!-- زر البحث -->
        <div class="d-flex align-items-center">
        <button
            id="searchToggle"
            class="btn btn-outline-secondary me-2"
            type="button"
            aria-label="Toggle search"
        >
            <i class="bi bi-search"></i>
        </button>

        <!-- نموذج البحث مخفي افتراضيًا -->
        <form id="navbarSearch" class="d-none d-flex" role="search">
            <input
            class="form-control me-2"
            type="search"
            placeholder="ابحث..."
            aria-label="Search"
            />
            <button class="btn btn-primary" type="submit">بحث</button>
        </form>
        </div>
    </div>
</nav>
