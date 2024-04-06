<?php

/*----------  Override variables  ----------*/
// $firstName = 'Gio';

// $firstName = 'Joe';

// echo $firstName; # prints: Joe

/*----------  define()  ----------*/
// define('STATUS_PAID', 'paid');

// define('STATUS_PAID', 1); # PHP Warning

// echo STATUS_PAID; # prints: paid
// echo defined('STATUS_PAID'); # prints: 1

/*----------  const  ----------*/
// const STATUS_PAID = 'paid';

// echo STATUS_PAID; # prints: paid

/*----------  Differences  ----------*/
// if (true) {
//   // const FOO = 'bar'; # Parse error
//   define('STATUS_PAID', 9); # works
// }

/*----------  Dynamic constants  ----------*/
// $paid = 'PAID';
// define("STATUS_$paid", $paid);

// echo STATUS_PAID; # prints: PAID

/*----------  Builtin constants  ----------*/
// echo PHP_VERSION; # prints for example: 8.2.17
// echo __LINE__; # prints: 37
// echo __LINE__; # prints: 38
// echo __FILE__; # prints for example: C:\www\index.php

/*----------  Variables variables  ----------*/
$foo = 'bar';
$$foo = 'baz';

// echo $foo, ' ', $$foo; # prints: bar baz
// echo "$foo $$foo"; # prints: bar $bar
echo "$foo {$$foo}"; # prints: bar baz
// echo "$foo ${$foo}"; # prints: bar baz
