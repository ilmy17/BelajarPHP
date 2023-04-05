<?php

error_reporting(0);

// memanggil dan memproses file bagian atas
include_once 'top.php';

// memanggil dan memproses file bagian menu
include_once 'menu.php';

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <!-- algoritma menangkap url agar masuk kedalam index -->
            <?php
            $url = $_GET['url'];
            if($url == ''){
                include_once 'dashboard.php';
            }
            else if (!empty($url)){
                include_once ''.$url.'.php';
            }
            else {'dashboard.php';}

            ?>
        </div>
    </main>

    <?php
    // memanggil dan memproses file bagian top
    include_once 'bottom.php';
    ?>
    
</div>