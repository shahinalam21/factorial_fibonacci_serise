<?php

// // factorial
// function Factorial($n){
//     if($n ===0 || $n === 1){
//         return 1;
//     }else{
//         return $n * Factorial($n-1);
//     }
// }

// $number = 5;
// $result = Factorial($number);
// echo $result;

// fibonacci

// function fibonacci($n){
//     $first = 0;
//     $second = 1;

//     if($n >= 1){
//         echo $first;
//     }
//     for($i = 2; $i <= $n; $i++){
//         echo ", $second";
//         $next = $first + $second;
//         $first = $second;
//         $second = $next;
//     }
// }
// fibonacci(10);

// function fibonacci($n){
//     $first = 0;
//     $second = 1;

//     if($n >= 1){
//         echo $first;
//     }
//     for($i = 2; $i <= $n; $i++){
//         echo ", $second";
//         $next = $first+$second;
//         $first = $second;
//         $second = $next;
//     }
// }
// fibonacci(10);

// function fibonacci($n){
//     $first = 0;
//     $second = 1;

//     if($n >= 1){
//         echo "$first";
//     }
//     for($i = 2; $i <=$n; $i++){
//         echo ",$second";
//         $next = $first + $second;
//         $first = $second;
//         $second = $next;
//     }
// }
// fibonacci(10);

// function fibo($n){
//     $first = 0;
//     $second = 1;

//     if($n >=1){
//         echo $first;
//     }
//     for($i = 2; $i<= $n; $i++){
//         echo ", $second";
//         $next = $first+$second;
//         $first = $second;
//         $second = $next;
//     }
// }
// fibo(10);

function fibo($n){
    $first = 0;
    $second = 1;

    if($n >= 1){
        echo $first;
    }
    for($i = 1; $i<=$n; $i++){
        echo ", $second";
        $next =$first + $second;
        $first =$second;
        $second = $next;
    }
}
fibo(20);