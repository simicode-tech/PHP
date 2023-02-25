<?php


// function addNumber($value1, $value2): int{
//     $total = $value1 + $value2;
//     return $total;

// }
// echo 'result'.' : '. addNumber(2,4);

// function arrNumber($limit): array{
//     $arrayValue= [];
//     for($index=0; $index<=$limit; $index++){
//         if($index%2==0){
//             $arrayValue[]=$index;
//         }
//     }
//     return $arrayValue;
// }


// $evenNumber =  arrNumber(10);
// print_r($evenNumber);
/**Dynamic function calling */

// function add($a, $b): int{
//     return $a + $b;
// }

// $dynamicNumber = "add";

// echo  $dynamicNumber(1,2);
/**Anonymous function or closures */

$anonymousFuc = function($a,$b):int{
    return $a + $b;
};

echo $anonymousFuc(3,4)."\n";

$janet = "my name is janet";

$closureFunc= function()use($janet){
    echo $janet;
};
$closureFunc();