<?php
require_once '../../config.php';
/**
 * Render a single book card.
 *
 * @param array $book Associative array with keys:
 *   - title        (string) عنوان الكتاب
 *   - pdf_link     (string) رابط ملف PDF
 *   - description  (string) وصف الكتاب
 *   - cover_image  (string) مسار صورة الغلاف (يمكن تركها افتراضية)
 */
function renderBookCard(array $book): void {
    // القيمة الافتراضية لغلاف الكتاب
    $defaultCover = ASSETS_URL . 'pdf-icon.png';

    // احصل على القيم مع fallback للقيمة الافتراضية
    $cover    = htmlspecialchars($book['cover_image'] ?? $defaultCover);
    $title    = htmlspecialchars($book['title']      ?? 'بدون عنوان');
    $link     = htmlspecialchars($book['pdf_link']   ?? '#');
    $desc     = htmlspecialchars($book['description'] ?? '');

    ?>
    <div class="col" dir="rtl">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <!-- Link stretched to entire card -->
            <a href="<?= $link ?>" target="_blank" class="stretched-link"></a>

            <!-- Cover Image -->
            <img
            src="<?= $cover ?>"
            class="card-img-top rounded-top-4"
            alt="<?= $title ?>"
            style="object-fit: cover; height: 240px;"
            >

            <!-- Card Body -->
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-semibold text-end fs-6 text-dark mb-2">
                    <?= $title ?>
                </h5>
                <p class="card-text text-muted text-end small flex-grow-1">
                    <?= $desc ?>
                </p>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Render a grid of book cards.
 *
 * @param array $books Array of associative arrays for each book.
 */
function renderBookGrid(array $books): void {
    if (empty($books)) {
        echo '<p class="text-center text-muted">لا توجد كتب للعرض.</p>';
        return;
    }

    // Bootstrap responsive grid: 1 col on xs, 2 on sm, 3 on md, 4 on lg+
    echo '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">';
    foreach ($books as $book) {
        renderBookCard($book);
    }
    echo '</div>';
}
