<?php

require_once 'autoloader.php';

$currency1 = new \Hillel\Homework4\Currency('USD');
$currency2 = new \Hillel\Homework4\Currency('UAH');
$money1 = new \Hillel\Homework4\Money(60, $currency1);
$money2 = new \Hillel\Homework4\Money(40, $currency1);


echo 'Currency 1: ' . $currency1->getCode() . '<br><br>';
echo 'Currency 2: ' . $currency2->getCode() . '<br><br>';

echo 'Are they equal? ';
if ($currency1->equals($currency2) == true) {
    echo '- Yes, they are.' . '<br>'. '_____' . '<br><br>';
} else echo '- No, they are not' . '<br>'. '_____' . '<br><br>';



echo 'Money 1: ' . $money1->getAmount() . $money1->getCurrency()->getCode(). '<br><br>';
echo 'Money 2: ' . $money2->getAmount() . $money2->getCurrency()->getCode(). '<br><br>';

echo 'Are they equal? ';
if ($money1->equals($money2) == true) {
    echo '- Yes, they are.' . '<br><br>';
} else echo '- No, they are not' . '<br><br>';

echo 'Money 1 + Money 2 = ' . $money1->add($money2) . $money1->getCurrency()->getCode();
