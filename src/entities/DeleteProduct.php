<?php

namespace src\entities;

require_once '../config/Product.php';
require_once '../config/Database.php';

use src\config\Product;
use src\config\Database;

$database = new Database();

class DeleteProduct extends Product
{
    public function __construct(int $id)
    {
        $this->id = filter_var(trim($_POST['id']), FILTER_VALIDATE_INT);
    }
    
    public function getId()
    {
        return $this->id;
    }
}

$product = new DeleteProduct($_POST['id']);
$database->delete($product->getId());