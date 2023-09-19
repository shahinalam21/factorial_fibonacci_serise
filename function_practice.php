<?php
// Create a PHP script using a loop to print all even numbers between 1 and 10.
for($i = 1; $i<=10;$i++){
    if($i%2== 0){
        echo $i ."\n";
    }
}   

// Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

function greet($name){
    echo "My name is {$name}";
}
greet("Md Shahin alam");

// Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example usage
$number = 5;
$result = factorial($number);
echo "The factorial of $number is $result.";


// Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.
function fibonacci($n) {
    $first = 0;
    $second = 1;

    echo "Fibonacci Series up to $n numbers: ";

    if ($n >= 1) {
        echo $first;
    }

    for ($i = 2; $i <= $n; $i++) {
        echo ", $second";
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
fibonacci(10);