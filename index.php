<?php

/*----------  Booleans  ----------*/
$isCompleted = false;
// $isCompleted = TRUE;
// $isCompleted = tRuE;

var_dump($isCompleted);   # print: bool(false)
var_dump((string) false); # print: string(0) ""
var_dump((string) true);  # print: string(1) "1"

var_dump(is_bool((string) $isCompleted)); # print: bool(false)

/*----------  Conditionals  ----------*/
if ($isCompleted) {
  // do something
  // echo 'success';
} else {
  // do something else
  // echo 'fail'; # print: fail
}

/*----------  Equivalents  ----------*/
// integers 0 -0   = false
// floats 0.0 -0.0 = false
// strings '' '0'  = false
// arrays []       = false
// null            = false

/*----------  String casting  ----------*/
echo true;  # print: 1
echo false; # print:
