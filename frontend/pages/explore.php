<?php

require_once '../../config.php';
require_once '../components/book-cards.php';

// بيانات يدوية لكتابين
$books = [
    [
        'title'       => 'الكتاب الأول',
        'pdf_link'    => PDFS_URL . '1.pdf',
        'description' => 'وصف الكتاب الأول.',
    ],
    [
        'title'       => 'الكتاب الثاني',
        'pdf_link'    => PDFS_URL . '2.pdf',
        'description' => 'وصف الكتاب الثاني.',
    ],
    [
        'title'       => 'الكتاب الثالث',
        'pdf_link'    => PDFS_URL . '3.pdf',
        'description' => 'وصف الكتاب الثالث.',
    ],
    [
        'title'       => 'الكتاب الرابع',
        'pdf_link'    => PDFS_URL . '4.pdf',
        'description' => 'وصف الكتاب الرابع.',
    ],
    [
        'title'       => 'الكتاب الخامس',
        'pdf_link'    => PDFS_URL . '5.pdf',
        'description' => 'وصف الكتاب الخامس.',
    ],
    [
        'title'       => 'الكتاب السادس',
        'pdf_link'    => PDFS_URL . '6.pdf',
        'description' => 'وصف الكتاب السادس.',
    ],
    [
        'title'       => 'الكتاب السابع',
        'pdf_link'    => PDFS_URL . '6.pdf',
        'description' => 'وصف الكتاب السابع.',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include_once INC_DIR . 'head.php' ?>
    <title>Explore Page</title>
</head>
<body>
    <?php include_once COMPS_DIR . 'navbar.php';?>
    <div class="bg-cover bg-center min-vh-100 d-flex flex-column justify-content-center align-items-center p-5 "
        style="background-image: url('<?= ASSETS_URL ?>login-bg.png'); background-size: cover; background-position: center;">
        
        <div>
            <div class="container mx-auto" style="max-width: 880px;">
                <h1 class="fw-bold text-end mb-4">:ملخصات</h1>
                <?php renderBookGrid($books); ?>
            </div>
            <br><hr><br>
            <div class="container mx-auto" style="max-width: 880px;">
                <h1 class="fw-bold text-end mb-4">:مراجع</h1>
                <?php renderBookGrid($books); ?>
            </div>
        </div>

    </div>

    <?php include_once INC_DIR . 'foot.php' ?>
</body>

</html>

