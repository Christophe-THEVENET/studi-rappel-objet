<?php

require_once "vendor/autoload.php";

use App\IDisplayable;
use App\Security\User;
use App\Shop\AbstractProduct;
use App\Shop\ProductCirc;
use App\Shop\ProductRect;

$productRect = new ProductRect("Téléviseur", 400, 200, 80);

echo '<pre>';
print_r($productRect);
echo '</pre>';
echo '<br>';

$productCirc = new ProductCirc("Ballon", 25, "chance tired plus border individual carried foreign future careful managed arm know three disease missing basic led evidence science industry origin former car blanket", 40);
var_dump($productCirc);
echo '<br>';

var_dump($productCirc->getSurface());
echo '<br>';
var_dump($productRect->getSurface());
echo '<br>';


/**
 * Undocumented function
 *
 * @param AbstractProduct[] $products
 * @return void
 */
function listProducts(array $products)
{
  foreach ($products as $product) {
    $product->display();
  }
}

function displayProduct(AbstractProduct $product)
{
  echo $product->getName() . " - " . $product->getSurface() . "<br />";
}

listProducts([$productRect, $productCirc]);


function display(IDisplayable $item)
{
  $item->display();
}

display($productCirc);
display($productRect);
display(new User());
