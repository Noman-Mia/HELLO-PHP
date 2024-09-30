MODULE-4 (START PHP)

SETTING
https://windows.php.net/download

https://visualstudio.microsoft.com/downloads/#microsoft-visual-c-redistributable-for-visual-studio-2022

https://www.php.net/manual/en/install.windows.php

https://help.learnosity.com/hc/en-us/articles/360000757757-Environment-Setup-Guide-PHP

INTRO PHP 
<?php 
$numberOne = 10;
$numberTwo = 20;
$name = "John Doe";

const PI = 3.14;
const PI = 3.142; // This will throw an error

define("PI", 3.14);
define("PI", 3.142); // This will not throw an error

echo PI;

$numberOne= 30;


echo $numberOne;
echo "\n";
echo $numberTwo;
echo "\n";
echo $numberOne + $numberTwo;
echo "\n";
echo $numberTwo - $numberOne;
echo "\n";  
echo $numberOne * $numberTwo;
echo "\n";
echo $numberTwo / $numberOne;


echo $name;


PRICE.PHP
<?php 
$item = "Notebook";
$price = 100;
$quantity = 5;
$totalPrice = $price * $quantity;

echo "The price of a $item is $price";
echo "\n";
echo "The total price of $quantity {$item}s is $totalPrice";


MODULUS
<?php 
//modulus 
//remainder of a division

$number = 19;
$divisor = 4;

$remainder = $number % $divisor;
// echo $remainder;

echo "The remainder of $number divided by $divisor is $remainder";


PRICE
<?php 
$item = "Notebook";
$price = 100;
$quantity = 5;
$totalPrice = $price * $quantity;

// echo "The price of a $item is $price";
// print("The price of a $item is $price");
// printf("The price of a %s is %d", $item, $price);
printf("The price of a %s is %.2f", $item, $price);


CONCAT
<?php 
$firstName = "John";
$lastName = "Doe";

// echo $firstName ." ". $lastName; //concat
echo "$firstName $lastName";

