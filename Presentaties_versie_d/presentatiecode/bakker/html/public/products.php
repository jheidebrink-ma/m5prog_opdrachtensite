<?php
$products = [
    "Cookies" => [
        ["name" => "Chocolate Chip Cookies", "Description" => "10 pieces", "price" => 3.99],
        ["name" => "Oatmeal Raisin Cookies", "Description" => "8 pieces", "price" => 3.49],
        ["name" => "Peanut Butter Cookies", "Description" => "12 pieces", "price" => 4.25]
    ],
    "Cakes" => [
        ["name" => "Vanilla Sponge Cake", "Description" => "1 whole cake", "price" => 15.99],
        ["name" => "Chocolate Fudge Cake", "Description" => "1 whole cake", "price" => 18.50],
        ["name" => "Red Velvet Cake", "Description" => "1 whole cake", "price" => 17.75]
    ],
    "Breads" => [
        ["name" => "Sourdough Bread", "Description" => "1 loaf", "price" => 4.99],
        ["name" => "Whole Wheat Bread", "Description" => "1 loaf", "price" => 3.99],
        ["name" => "Baguette", "Description" => "1 piece", "price" => 2.50]
    ],
    "Pastries" => [
        ["name" => "Croissant", "Description" => "1 piece", "price" => 2.25],
        ["name" => "Apple Turnover", "Description" => "1 piece", "price" => 2.75],
        ["name" => "Danish Pastry", "Description" => "1 piece", "price" => 2.95]
    ]
];

?><?php include_once "../views/header.php"?>
    <main>
        <h2>Our Products</h2>
        <section>
        
        <?php
            include "../views/catagoryview.php";
        ?>
    </main>
    
    <?php include_once "../views/footer.php"?>
