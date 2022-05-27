<?php

require 'Product.php';
require 'Cart.php';

$prod1 = new Product('prod1', 2200);
$prod2 = new Product('prod2', 100);
$prod3 = new Product('prod3', 1300);

$com1 = new Product('c1', null, [$prod2,$prod3]);

$cart = new Cart();
$cart ->addProduct($prod1);
$cart ->addProduct($com1);


print_r($cart->getPrice());