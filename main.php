<?php

use App\Harvest;

include __DIR__ . "/vendor/autoload.php";

$garden=Harvest::FruitHarvest();

foreach ($garden as $item) {
   echo "Тип:$item[type] Количество:$item[count]шт Вес:$item[weight]г \n";
}
