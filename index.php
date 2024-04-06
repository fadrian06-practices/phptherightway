<?php

/*----------  Data types & Type casting  ----------*/

# 4 scalar types
# bool - true / false
// $completed = true;

# int - 1, 2, 3, 0, -5 (no decimal)
// $score = 75;

# float - 1.5, 0.1, 0.005, -15.8
// $price = 0.99;

# string - 'Gio', "Hello World"
// $greeting = 'Hello Gio';

// echo $completed, '<br />'; # print: 1
// echo false, '<br />';      # print:
// echo $score, '<br />';     # print: 75
// echo $price, '<br />';     # print: 0.99
// echo $greeting, '<br />';  # print: Hello Gio

// echo gettype($completed), '<br />'; # print: boolean
// echo gettype($score), '<br />';     # print: integer
// echo gettype($price), '<br />';     # print: double
// echo gettype($greeting), '<br />';  # print: string

// var_dump($completed); # print: bool(true)
// echo '<br />';
// var_dump($score); # print: int(75)
// echo '<br />';
// var_dump($price); # print: float(0.99)
// echo '<br />';
// var_dump($greeting); # print: string(9) "Hello Gio"
// echo '<br />';

# 4 compound types
# array
// $companies = [1, 2, 3, 0.5, -9.2, 'A', "b", true];

// echo $companies; # prints: PHP Warning ... Array
// print_r($companies); # prints: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 0.5 [4] => -9.2 [5] => A [6] => b [7] => 1 )
// echo '<br />';

# object
# callable
# iterable

# 2 special types
# resource
# null
// $name = null;

// var_dump($name); # prints: NULL
// echo '<br />';

/*----------  Type casting  ----------*/
// function sum(int $x, int $y) {
//   $x = 5.5;

//   var_dump($x, $y); # prints: float(5.5) int(3)
//   echo '<br />';

//   return $x + $y;
// }

// $sum = sum(2.5, '3'); # prints: Deprecated
// echo $sum, '<br />'; # prints: 8.5
// var_dump($sum); # prints: int(8.5)

/*----------  Strict types  ----------*/

// declare(strict_types=1);

// function sum(float $x, float $y) {
//   return $x + $y;
// }

// // $sum = sum('2', 3); # Fatal error
// $sum = sum(3, 2);      # works
// echo $sum, '<br />';   # print: 5
// var_dump($sum);        # print: float(5)

/*----------  Type casting  ----------*/
$x = (int) '5';

var_dump($x); # print: int(5)
