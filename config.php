<?php
    session_start();

    $dsn = "mysql:host=localhost;dbname=study_stack_db";
    $user = "root";
    $password = "";

    try{
        $conn = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
        echo "filed connection". $e->getMessage();
    }

    // Define directory constants
    define('BASE_URL', 'http://localhost/php/php-study-stack/');
    define('ASSETS_URL', BASE_URL . 'frontend/assets/');
    define('PDFS_URL', ASSETS_URL . 'pdfs/');

    define('HOME_DIR', str_replace('\\', '/', __DIR__) . '/');
    define('FE_DIR', HOME_DIR . 'frontend/');
    define('INC_DIR', FE_DIR . 'include/');
    define('PAGES_DIR', FE_DIR . 'pages/');
    define('COMPS_DIR', FE_DIR . 'components/');
    define('ASSETS_DIR', FE_DIR . 'assets/');
    define('PDFS_DIR', ASSETS_DIR . 'pdfs/');
?>