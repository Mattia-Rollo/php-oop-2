<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';

$itme1 = new Food("Natural Trainer Sensitive", 12.50, "pollo", 10, "15/10/2024", "https://m.media-amazon.com/images/I/415VAHIRWNL._SL500_.jpg", new Category("Cane"));

$itme2 = new Food("Ultima Cibo per Cani ", 12.50, "pollo", 10, "15/10/2024", "https://m.media-amazon.com/images/I/71VIjmlDrlL._AC_SY450_PIbundle-4,TopRight,0,0_SH20_.jpg", new Category("Cane"));

var_dump($itme1);
var_dump($itme2);
?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container">
    <div class="row">

    </div>
</div>

<?php
include __DIR__ . './partials/footer.php';
?>