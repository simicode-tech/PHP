<?php


function custom_exception_handler($exception){
    echo 'Custom exception handler'.$exception->getMessage().PHP_EOL;
}

function exceptValue($a, $b):int{
    if($b <= 0){
        throw new Exception("number cannot be less than zero");
    }
    $result = $a/ $b;
    return $result; ;
}

set_exception_handler('custom_exception_handler');
$result = exceptValue(1,0);
// throw new Exception('')