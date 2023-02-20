<?php

namespace src\entities;

require_once '../config/Product.php';
require_once '../config/Database.php';

use src\config\Product;
use src\config\Database;

$database = new Database();

class ChangeProduct extends Product
{
    public function __construct(int $id, string $name, string $description, string $currencyType, float $price)
    {
        $this->id = filter_var(trim($id), FILTER_VALIDATE_INT);
        $this->name = filter_var(trim($name), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->description = filter_var(trim($description), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->currencyType = filter_var(trim($currencyType), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->price = filter_var(trim($price), FILTER_VALIDATE_FLOAT);
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function getCurrencyType()
    {
        return $this->currencyType;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
}

$product = new ChangeProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['currencyType'], $_POST['price']);
$database->update($product->getId(), $product->getName(), $product->getDescription(), $product->getCurrencyType(), $product->getPrice());