<?php

function GetProducts()
{
    
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
            "image" => "https://images.pexels.com/photos/302680/pexels-photo-302680.jpeg"
        ],
        [
            "name" => "Chocolate Fudge Cake",
            "Description" => "1 whole cake",
            "price" => 18.50,
            "image" => "https://images.pexels.com/photos/4109999/pexels-photo-4109999.jpeg"
        ],
        [
            "name" => "Red Velvet Cake",
            "Description" => "1 whole cake",
            "price" => 17.75,
            "image" => "https://images.pexels.com/photos/4110010/pexels-photo-4110010.jpeg"
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
            "image" => "https://images.pexels.com/photos/4110000/pexels-photo-4110000.jpeg"
        ]
    ]
];


    return $products;
}