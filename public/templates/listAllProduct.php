<?php

require "../../src/config/Database.php";
use src\config\Database;

$database = new Database();
$database->listAllProduct();

?>