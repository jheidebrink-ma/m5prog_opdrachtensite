<?php


    $products = [
    "Cookies" => [
        [
            "name" => "Chocolate Chip Cookies",
            "Description" => "10 pieces",
            "price" => 3.99,
            "image" => "https://images.pexels.com/photos/230325/pexels-photo-230325.jpeg"
        ],
        [
            "name" => "Oatmeal Raisin Cookies",
            "Description" => "8 pieces",
            "price" => 3.49,
            "image" => "https://images.pexels.com/photos/4110004/pexels-photo-4110004.jpeg"
        ],
        [
            "name" => "Peanut Butter Cookies",
            "Description" => "12 pieces",
            "price" => 4.25,
            "image" => "https://images.pexels.com/photos/4110003/pexels-photo-4110003.jpeg"
        ]
    ],
    "Cakes" => [
        [
            "name" => "Vanilla Sponge Cake",
            "Description" => "1 whole cake",
            "price" => 15.99,
            "image" => "https://cdn.pixabay.com/photo/2016/02/29/00/19/cake-1227842_640.jpg"
        ],
        [
            "name" => "Chocolate Fudge Cake",
            "Description" => "1 whole cake",
            "price" => 18.50,
            "image" => "https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_1280.jpg"
        ],
        [
            "name" => "Red Velvet Cake",
            "Description" => "1 whole cake",
            "price" => 17.75,
            "image" => "https://cdn.pixabay.com/photo/2020/03/10/03/49/red-velvet-cake-4917734_640.jpg"
        ]
    ],
    "Breads" => [
        [
            "name" => "Sourdough Bread",
            "Description" => "1 loaf",
            "price" => 4.99,
            "image" => "https://images.pexels.com/photos/2434/bread-food-healthy-breakfast.jpg"
        ],
        [
            "name" => "Whole Wheat Bread",
            "Description" => "1 loaf",
            "price" => 3.99,
            "image" => "https://images.pexels.com/photos/461431/pexels-photo-461431.jpeg"
        ],
        [
            "name" => "Baguette",
            "Description" => "1 piece",
            "price" => 2.50,
            "image" => "https://images.pexels.com/photos/4109998/pexels-photo-4109998.jpeg"
        ]
    ],
    "Pastries" => [
        [
            "name" => "Croissant",
            "Description" => "1 piece",
            "price" => 2.25,
            "image" => "https://images.pexels.com/photos/4110002/pexels-photo-4110002.jpeg"
        ],
        [
            "name" => "Apple Turnover",
            "Description" => "1 piece",
            "price" => 2.75,
            "image" => "https://images.pexels.com/photos/4110001/pexels-photo-4110001.jpeg"
        ],
        [
            "name" => "Danish Pastry",
            "Description" => "1 piece",
            "price" => 2.95,
            "image" => "https://cdn.pixabay.com/photo/2010/12/10/08/croissant-1128_640.jpg"
        ]
    ]
];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <header>
        <img src="logo.png"/>
        <h1>Welcome to Sweet Treats Bakery</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="about.php">About</a>
    </nav>
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
    <footer>
        <p>&copy; 2024 Sweet Treats Bakery</p>
    </footer>
</body>
</html>
