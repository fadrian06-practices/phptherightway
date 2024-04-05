<?php

/*----------  ECHO  ----------*/
// echo 'Hello World';         # prints: Hello World
// echo('Hello World');        # prints: Hello World
// echo 'Hello', ' ', 'World'; # prints: Hello World

/*----------  PRINT  ----------*/
// print('Hello World');        # prints: Hello World
// print 'Hello', ' ', 'World'; # Parse error

/*----------  COMBINATIONS  ----------*/
// echo print 'Hello World'; # prints: Hello World1
// print echo 'Hello World'; # Parse error

/*----------  ESCAPING CHARACTERS  ----------*/
// echo 'Joe's Invoice';  # Parse error
// echo 'Joe\'s Invoice'; # prints: Joe's Invoice
// echo "Joe's Invoice";  # prints: Joe's Invoice

/*----------  VARIABLES  ----------*/
// $name = 'Gio';

// echo $name; # prints: Gio

/*----------  VARIABLES NAMING  ----------*/
// $1name = 'Gio';       # Parse error
// $_123@#%name = 'Gio'; # Parse error
// $this = 'Hello';      # PHP Fatal error
// $_123name = 'Gio';    # works

/*----------  ASSIGNATION BY VALUE  ----------*/
// $x = 1;
// $y = $x;

// $x = 3;

// echo $y; # prints: 1

/*----------  ASSIGNATION BY REFERENCE  ----------*/
// $x = 1;
// $y = &$x;

// $x = 3;

// echo $y; # prints: 3

/*----------  INTERPOLATION  ----------*/
// $firstName = 'Gio';

// echo 'Hello $firstName';    # prints: Hello $firstName
// echo "Hello $firstName";    # prints: Hello Gio
// echo "Hello {$firstName}";  # prints: Hello Gio

/*----------  CONCATENATION  ----------*/
// $firstName = 'Gio';

// echo 'Hello ' . $firstName; # prints: Hello Gio
