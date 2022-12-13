<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';
include __DIR__ . './db.php';

$item1 = new Food("Natural Trainer Sensitive", 12.50, "pollo", 10, "15/10/2024", "./images/prodotto-1.png", new Category("dog"));

$item2 = new Food("Ultima Cibo per Cani", 20.50, "pollo", 10, "15/10/2024", "./images/prodotto-2.jpg", new Category("cat"));

array_push($product_db, $item1, $item2);

var_dump($item1);
var_dump($item2);
?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container">
    <div class="row">
        <?php foreach ($product_db as $product) { ?>


        <div class="col-3">
            <div class="card" style="w-100">
                <img src="<?php echo $product->imgPath ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product->name ?>
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <div class="pb-3">
                        <?php echo "Prezzo: $product->price €" ?>
                    </div>
                    <a href="#" class="btn btn-primary">Aggiungi</a>
                    <div class="pb-3">
                        <?php echo "<i class='fa-solid fa-" . $product->category->name . "'></i>" ?>
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