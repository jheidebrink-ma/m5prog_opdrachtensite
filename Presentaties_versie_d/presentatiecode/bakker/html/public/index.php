<?php
include_once "../source/ProductsContext.php";

$products = GetProducts();
?><?php include_once "../views/header.php"?>
    <main>
        <h2>Home</h2><p>Welcome to our cozy bakery where every treat is made with love!</p>
        <section>
            <h4>Best sellers</h4>
<figure class="productImage" style="background-image:url(<?=$products["Cookies"][0]["image"]?>)"></figure>
<figure class="productImage" style="background-image:url(<?=$products["Pastries"][2]["image"]?>)"></figure>
<figure class="productImage" style="background-image:url(<?=$products["Breads"][2]["image"]?>)"></figure>
<figure class="productImage" style="background-image:url(<?=$products["Cakes"][2]["image"]?>)"></figure>

        </section>
    </main>
  
    
    <?php include_once "../views/footer.php"?>