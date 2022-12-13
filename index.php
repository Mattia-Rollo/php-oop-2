<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';
include __DIR__ . './Models/Toy.php';
include __DIR__ . './Models/AnimalHouse.php';
include __DIR__ . './db.php';

$item1 = new Food("Natural Trainer Sensitive", 12.50, "pollo", 10, "15/10/2024", "./images/prodotto-1.png", new Category("dog"));

$item2 = new Food("Ultima Cibo per Cani", 20.50, "pollo", 10, "15/10/2024", "./images/prodotto-2.jpg", new Category("cat"));

$item3 = new Toy("Palla retata Hol-ee Roller", 10.2, "./images/prodotto-3.jpg", new Category("dog"));
$item4 = new Toy("Liker 5 pallina per cani", 50.5, "./images/prodotto-4.jpg", new Category("dog"));
$item5 = new Toy("Gioco per Gatti con Topo", 50.5, "./images/prodotto-1-gatto.jpg", new Category("cat"));

$item6 = new AnimalHouse("Cuccia Gatto Morbida ", 5.5, "./images/cuccia-gatto-1.jpg", new Category("cat"));
$item7 = new AnimalHouse("Cuccia gatti non lo so", 85.5, "./images/gatto-cuccia-2.jpg", new Category("cat"));

array_push($product_db, $item1, $item2, $item3, $item4, $item5, $item6, $item7);

var_dump($item1);
var_dump($item2);
?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container">
    <div class="row gy-3">
        <?php foreach ($product_db as $product) { ?>


        <div class="col-3">
            <div class="card">
                <img src="<?php echo $product->imgPath ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product->name ?>
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <div class="fw-bold fs-3 pb-3">
                        <?php echo "Prezzo: $product->price €" ?>
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping pe-2"></i>Aggiungi</a>
                    </div>
                    <div class="py-3">
                        Category:
                        <?php echo "<i class='fa-solid fa-" . $product->category->name . "'></i>" ?>
                    </div>
                    <div class="py-3">
                        Tipo:
                        <?php echo get_class($product) ?>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

<?php
include __DIR__ . './partials/footer.php';
?>