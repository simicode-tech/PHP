<?php
declare(strict_types = 1);

function getTransactionFille(string $dirPath): array
{
    $files = [];
    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[] =$dirPath. $file;
    }
    return $files;
}

function getTransactions(string $fileName,?callable $transactionHandler= null):array 
{
     if(! file_exists($fileName)){
        trigger_error('FILE "'.$fileName.'" does not exist.',E_USER_ERROR);
     }
     $file = fopen($fileName, 'r');
     fgetcsv($file);
     $transactions = [];
     while(($transaction = fgetcsv($file)) !== false) {
        if($transactionHandler !== null){
            $transaction = $transactionHandler($transaction);
        }
        $transactions [] =$transaction;
     }
     return $transactions;
}
function exactTransactions(array $transactionRow):array 
{
    [$date,$checkNumber,$description,$amount] = $transactionRow;
    $amount = (float )str_replace(['$', ','], '', $amount);
    return[
        'date'=> $date,
        'checkNumber'=>$checkNumber,
        'description'=>$description,
        'amount'=>$amount,
    ];
}

function calculateTotal( array $transactions) :array
 {
    $totals = ['nexTotal'=>0,'totalIncome'=>0,'totalExpense'=>0];
    foreach($transactions as $transaction) {
        $totals['nexTotal'] +=  $transaction['amount'];
        if($transaction['amount'] >= 0) {
            $totals['totalIncome'] +=  $transaction['amount'];
        }else {
            $totals['totalExpense'] +=  $transaction['amount'];
        }
    }
    return $totals;
}