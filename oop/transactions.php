<?php
// declare(strict_types=1);

class Transaction{
    public ?Customer $customer = null;
    public function __construct(
        private float $amount,
        private string $description
    ){}
   
};
