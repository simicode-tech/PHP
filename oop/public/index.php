<?php

require_once "../transactions.php";
require_once "../Customer.php";
require_once "../PaymentProfile.php";

$transaction = new Transaction(15,'Transaction');
// $transaction->amount = 10;
echo $transaction->customer->paymentProfile->id;