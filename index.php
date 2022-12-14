<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';
include __DIR__ . './Models/Toy.php';
include __DIR__ . './Models/AnimalHouse.php';
include __DIR__ . './db.php';


// session_start();
// session_destroy();

//esempio di triat 
echo "Primo Prodotto" . $item1->addWeight(12, "kg");
echo "Secondo Prodotto" . $item2->addWeight(50, "kg");


// var_dump($item1);
// var_dump($item2);
if (isset($_SESSION['cartList'])) {
    var_dump($_SESSION['cartList']);
}
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
                    </div class="text-center">

                    <form action="cart.php" method="POST">

                        <button type="submit" name="<?php echo $product->id; ?>" value="<?php echo $product->id; ?>"
                            href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i>
                            Aggiungi</button>
                        <button type="submit" href="#" class="btn btn-success"><i
                                class="fa-solid fa-cart-shopping pe-2"></i>Compra Ora</button>

                    </form>

                    <div class="py-3">
                        Animale:
                        <?php echo "<i class='fa-solid fa-" . $product->category->name . " fa-xl'></i>" ?>
                    </div>
                    <div class="py-3">
                        Categoria:
                        <?php echo get_class($product); ?>
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