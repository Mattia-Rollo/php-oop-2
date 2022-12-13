<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';
include __DIR__ . './Models/Toy.php';
include __DIR__ . './Models/AnimalHouse.php';
include __DIR__ . './db.php';



// var_dump($item1);
// var_dump($item2);
?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container py-4">
    <div class="row gy-3">
        <?php foreach ($product_db as $product) { ?>


        <div class="col-xl-3 col-md-4 col-6">
            <div class="card shadow-lg">
                <img src="<?php echo $product->imgPath ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product->name ?>
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <div class="fw-bold fs-5 pb-3">
                        <span class="me-3">
                            <?php echo "Prezzo: $product->price €" ?>
                        </span>
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping pe-2"></i>Aggiungi</a>
                    </div>
                    <div class="py-3">
                        Category:
                        <?php echo "<i class='fa-solid fa-" . $product->category->name . " fa-xl'></i>" ?>
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