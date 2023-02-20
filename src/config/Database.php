<?php

namespace src\config;

class Database
{
    private string $hostname = "localhost";
    private string $username = "machinisphp";
    private string $password = "php4noobs8";
    private string $database = "crud";
    private static object $instance;
    
    public function __construct()
    {
        self::$instance = new \mysqli($this->hostname, $this->username, $this->password, $this->database);
        if (self::$instance->connect_errno)
        {
            die("Error to connect database! ".mysqli_connect_error());
        }
    }
    
    private static function getInstance()
    {
        return self::$instance = new Database();
    }
    
    public function insert(string $name, string $description, string $currencyType, float $price)
    {
        $query = "INSERT INTO product(name, description, currencyType, price)
        VALUES('{$name}', '{$description}', '{$currencyType}', {$price})";
        
        $sendQuery = self::$instance->query($query);
        $result = ($sendQuery) ? die("Product added successfully!") : die("Unable to added this product!");
        
        self::$instance->close();
        return $result;
    }
    
    public function listAllProduct()
    {
        $query = "SELECT * FROM product";
        $sendQuery = self::$instance->query($query);
        
        $result = $sendQuery->fetch_all();
        $count = 0;
        $index = 0;
        
        
        while($count < count($result)) {
            echo "
                <tr>
                    <td class='border border-slate-300 bg-slate-50 text-slate-900'>{$result[$index][0]}</td>
                    <td class='border border-slate-300 bg-slate-50 text-slate-900'>{$result[$index][1]}</td>
                    <td class='border border-slate-300 bg-slate-50 text-slate-900'>{$result[$index][2]}</td>
                    <td class='border border-slate-300 bg-slate-50 text-slate-900'>{$result[$index][3]}</td>
                    <td class='border border-slate-300 bg-slate-50 text-slate-900'>{$result[$index][4]}</td>
                </tr>
            ";
            $count++;
            $index++;
        }
    }
    
    public function update(int $id, string $name, string $description, string $currencyType, float $price)
    {
        $query = "UPDATE product SET name = '{$name}',
        description = '{$description}', currencyType = '{$currencyType}', price = '{$price}' WHERE id = {$id}";
        
        $sendQuery = self::$instance->query($query);
        $result = ($sendQuery) ? die("Product changed successfully!") : die("Unable to change this product!");
        
        self::$instance->close();
        return $result;
    }
    
    public function delete(int $id)
    {
        $query = "DELETE FROM product WHERE id = {$id}";
        $sendQuery = self::$instance->query($query);
        
        $result = ($sendQuery) ? die("Product deleted successfully!") : die("Unable to deleted this product!");
        self::$instance->close();
        
        return $result;
    }
}