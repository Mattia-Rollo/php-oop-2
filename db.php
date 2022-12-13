<?php

$product_db = [];

$item1 = new Food("Natural Trainer Sensitive", 12.50, "pollo", 10, "15/10/2024", "./images/prodotto-1.png", new Category("dog"));
$item2 = new Food("Ultima Cibo per Cani", 20.50, "pollo", 10, "15/10/2024", "./images/prodotto-2.jpg", new Category("cat"));
$item3 = new Toy("Palla retata Hol-ee Roller", 10.2, "./images/prodotto-3.jpg", new Category("dog"));
$item4 = new Toy("Liker 5 pallina per cani", 50.5, "./images/prodotto-4.jpg", new Category("dog"));
$item5 = new Toy("Gioco per Gatti con Topo", 50.5, "./images/prodotto-1-gatto.jpg", new Category("cat"));
$item6 = new AnimalHouse("Cuccia Gatto Morbida ", 5.5, "./images/cuccia-gatto-1.jpg", new Category("cat"));
$item7 = new AnimalHouse("Cuccia gatti Favolosa", 85.5, "./images/gatto-cuccia-2.jpg", new Category("cat"));
$item8 = new AnimalHouse("Cuccia Cani Bella", 85.5, "./images/cuccia-cani-1.jpg", new Category("dog"));

array_push($product_db, $item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8);