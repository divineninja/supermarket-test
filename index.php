<?php
require_once('Supermarket/Supermarket.php');

$collection = new ProductCollections;
// add nornal products
$collection->addItem(['code' => 'A','amount' => 1.25, 'count' => 3, 'code_id' => 'E']);
$collection->addItem(['code' => 'B', 'amount' => 4.25, 'count' => 0, 'code_id' => null]);
$collection->addItem(['code' => 'C', 'amount' => 1.00, 'count' => 6, 'code_id' => 'F']);
$collection->addItem(['code' => 'D', 'amount' => 0.75, 'count' => 0, 'code_id' => null]);
// bulk package
$collection->addItem(['code' => 'E', 'amount' => 3.00, 'count' => 0, 'code_id' => null]);
$collection->addItem(['code' => 'F', 'amount' => 5.00, 'count' => 0, 'code_id' => null]);

$pos = new PointOfSale($collection);


$pos->scanProduct('A');
$pos->scanProduct('B');
$pos->scanProduct('C');
$pos->scanProduct('D');


echo $pos->getTotal().PHP_EOL;

