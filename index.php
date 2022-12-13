<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';

$itme1 = new Food("biscotti", 12.50, "pollo", 10, "15/10/2024", "https://m.media-amazon.com/images/I/415VAHIRWNL._SL500_.jpg", new Category("Cane"));

var_dump($itme1);
?>