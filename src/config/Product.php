<?php

namespace src\config;

abstract class Product
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected string $currencyType;
    protected float $price;
}

