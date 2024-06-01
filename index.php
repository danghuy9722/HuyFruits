<?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "global.php";

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();  
    $dstop10 = loadall_sanpham_top10();  
    
    include "views/header.php";

    

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'gioithieu':
                    include "views/gioithieu.php";
                break;
            case 'tintuc':
                    include "views/tintuc.php";
                break;
            case 'blog':
                    include "views/blog.php";
                break;
                break;
            case 'lienhe':
                    include "views/lienhe.php";
                break;
            default:
                # code...
                break;
        }
    } else {
        include "views/home.php";
    }


    include "views/footer.php";
?>