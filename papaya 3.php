<?php

$product = array("banana", "cocktail");
array_unshift($product, "fish", "lemon" );
print_r($product);

function validateString($product)
{
        if (is_string($product)) {
            return "Product name is ok";
        }
        return "Product name is not ok";
}

//business logic
$product = array("banana", "cocktail");
$values = readline("Input product= ");
array_unshift($product, $values );
print_r($product);



$validate_string=validateString($values);
echo $validate_string;
