<?php
$data = [];
$price=[
    'bayi'=>[
        'price'=>19900,
        'discount'=>14900,
        
    ],
    'pelajar'=>[
        'price'=>46900,
        'discount'=>23450,
       
    ],
    'personal'=>[
        'price'=>58900,
        'discount'=>38900,
      
    ],
    'bisnis'=>[
        'price'=>109900,
        'discount'=>65900,
       
    ],
];
$data = $price;

echo json_encode($data);
?>