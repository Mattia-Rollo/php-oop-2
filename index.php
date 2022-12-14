<?php

// include __DIR__ . './Models/Product.php';
include __DIR__ . './Models/Food.php';
include __DIR__ . './Models/Toy.php';
include __DIR__ . './Models/AnimalHouse.php';
include __DIR__ . './db.php';
include __DIR__ . './Exception/Exception.php';


// session_start();
// session_destroy();

//esempio di triat 
echo "Primo Prodotto" . $item1->addWeight(12, "kg");
echo "Secondo Prodotto" . $item2->addWeight(50, "kg");
echo "Terzo Prodotto" . $item3->addWeight(20, "kg");

echo $item1->weight;

var_dump($item1);
var_dump($item2);
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
                        <span>
                            Categoria:
                            <?php echo get_class($product); ?>
                        </span>
                        <span>
                            <?php echo $product->getWeight(); ?>
                        </span>

                    </div>

                </div>
            </div>
        </div>

        <?php } ?>

        <div class="container">
            <div class="row py-3 align-items-center ">
                <div class="col">

                    <div class="card" style="w-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php try {
                                    echo multiplication(5);
                                } catch (Exception $e) {
                                    echo 'Eccezione:' . ' ' . $e->getMessage();
                                } ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">

                            </h6>
                            <p class="card-text">moltiplico per 5 con una function exception </p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem sed saepe dolor vero hic
                                ipsam aspernatur consectetur sint dolorem mollitia veniam earum architecto, corporis id
                                atque placeat ad obcaecati nam?</p>
                        </div>
                    </div>


                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php try {
                                    echo multiplication('ciao');
                                } catch (Exception $e) {
                                    echo '<div class="text-danger">Eccezione:' . ' ' . $e->getMessage() . "</div>";
                                } ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">moltiplico per "ciao" con multiplication("ciao")</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt fugiat reiciendis rerum
                                aperiam maxime iure, nesciunt accusamus asperiores numquam enim, beatae dicta animi
                                molestias non, accusantium eaque nulla architecto odio?</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . './partials/footer.php';
?>