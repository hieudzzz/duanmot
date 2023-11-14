<?php
$i = 0;
foreach ($spnew as $sp) {
    extract($sp);
    $hinh = $img_path . $img;
    $linksp = "index.php?act=sanphamct&idsp=" . $id;
    if ($i == 2 || $i == 5) {
        $mr = "";
    } else {
        $mr = "mr";
    }
    echo '<div class="box_items ' . $mr . '">
                <div class="box_items_img">
                <a href="' . $linksp . '"> <img src="' . $hinh . '" > </a>
                </div>
                <a class="item_name" href="">' . $name . '</a>
                <p class="price">' . $price . '</p>      
                <a href="' . $linksp . '">ADD TO CART</a>                             
         </div>';
    $i += 1;
    if ($i >= 8) {
        break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
    }
}
?>
