<?php
// $name = 'janet';
// $x = 2;
// $y = &$x;
// $x = 3;
// const STATUS_PAID = 'PAID';


// echo PHP_VERSION;
// INTEGERS
// $x = 2;
// echo gettype($x);
// var_dump($x);

// STRINGS
// $firstName = 'Adeniyi';
// $lastName =  'janet';
// $fullName = $firstName . ' ' . $lastName;
// echo $fullName[11];

/* BOOLEANS */
// $isComplete = 'janet';

// if ($isComplete) {
//     echo  'success';
// } else {
//     echo 'failure';
// }

/* ARRAY */
// $programme = ['php', 'java', 'react'];
// $programme[]= 'node';

// apply key to array
// $programmeLanguage =[
//     'php' => 8.00,
//     'java' => 5.5,
//     'react' =>6.4,
//     'node' =>7.6
// ];
// var_dump($programmeLanguage['php']);

// OPERATORS
// $x = -3;
// $y = 5;
// $reslut = $x / $y;
//  var_dump($reslut);

// COMPARISON
// $x = '3';
// $y = 3;

// if ($x === $y) {
//     echo 'success';
// } else {
//     echo 'the number are not equal';
// };

// LOOP

// $x = 0;
// while($x <= 15){
//     $x++;
//     if($x % 2 == 0){
//         // $x++;
//         echo 'Even  number' .$x ."\n";
//         // continue;

//     }else{
//         echo 'old number'.$x . "\n";

//     }
// }
// for ($i=0; $i <=10 ; $i++) { 

//     if($i % 2 == 0){
//         // $x++;
//         echo 'Even  number' .$i ."\n";
//         // continue;

//     }else{
//         echo 'old number'.$i . "\n";

//     }
// }
/* mutiplication table  */

// for ($i=2; $i <=3 ; $i++) { 
//     for($j=1; $j<=12; $j++) {
//         $result = $i * $j;
//         echo $i .'X'. $j. '=' . $result ."\n";
//     }
//     // echo '\n';
// }

// $programme = ['php', 'java', 'react'];
// foreach ($programme as $key=> $value){
//     echo $key.':'. $value."\n";
// }
$user = [
    'name' => 'janet',
    'email' => 'janet@gmail.com',
    'skills'=>['php', 'java', 'react'],
];
// foreach($user as $key=> $value){
//     echo $key.':'. json_encode($value)."\n";
// }
 foreach($user as $key=> $value){
    echo $key.':';
    if(is_array($value)){
        foreach($value as $skil){
            echo $skil.',';
        }

    }else{
        echo $value;
    }
    echo "\n";
}

// function myName(){
//     $firstName = 'adeniyi';
//     $lastName ='janet';
//     $me = developer();
//     echo  'My Name'.' '. $firstName . ' ' . $lastName.' ' . $me;
// }
// myName();
// function developer(){
//     return 'I am a developer'.' ';
// }


$currentTime = time();
echo $currentTime ."\n";
echo $currentTime + 5 *24*60*60 ."\n"; 
echo date('m/d/y g:ia')."\n";

// mkdir('foo'); create folder
// rmdir('foo'); remove folder 
// mkdir('food');

$read = fopen('food/food.txt', 'r');
while(($line = fgets($read))!==false){
    echo $line;
}
// echo $read;