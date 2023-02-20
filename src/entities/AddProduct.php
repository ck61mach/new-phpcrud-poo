<?php

namespace src\entities;

require_once '../config/Product.php';
require_once '../config/Database.php';

use src\config\Product;
use src\config\Database;


$database = new Database();

class AddProduct extends Product
{
    public function __construct(string $name,string $description, string $currencyType, float $price)
    {
        $this->name = filter_var(trim($name), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->description = filter_var(trim($description), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->currencyType = filter_var(trim($currencyType), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->price = filter_var(trim($price), FILTER_VALIDATE_FLOAT);
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function getCurrencyType(): string
    {
        return $this->currencyType;
    }
    
    public function getPrice(): float
    {
        return $this->price;
    }
}

$product = new AddProduct($_POST['name'], $_POST['description'], $_POST['currencyType'], $_POST['price']);
$database->insert($product->getName(), $product->getDescription(), $product->getCurrencyType(), $product->getPrice());