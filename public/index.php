<?php
declare(strict_types =1);
$root = dirname(__DIR__).DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app'.DIRECTORY_SEPARATOR);
define('FILE_PATH', $root . 'transactions_file'.DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views'.DIRECTORY_SEPARATOR);

require APP_PATH ."app.php";
require APP_PATH ."format.php";
$files = getTransactionFille(FILE_PATH);

$transactions = [];
foreach ($files as $file) {
    $transactions = array_merge($transactions,getTransactions($file,'exactTransactions'));
}
$totals = calculateTotal($transactions);

require VIEWS_PATH ."transactions.php";

// print_r($transactions);