<?php


function exceptValue($a, $b):int{
    if($b <= 0){
        throw new Exception("number cannot be less than zero");
    }
    $result = $a/ $b;
    return $result; ;
}


try{
$result= exceptValue(1,0);
}catch(Exception $e){

    echo 'catch error: ' . $e->getMessage() .PHP_EOL;
}
