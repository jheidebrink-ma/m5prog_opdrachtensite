<?php
include_once "../source/ProductsContext.php";
$products = GetProducts();

foreach ($products as $categoryName => $category) {
?>
    <h4><?=$categoryName?></h4>
    <section>
            <?php
            foreach ($category as $i => $product) {
                include "../views/productsview.php";
            }
            ?>
    </section>
<?php
}