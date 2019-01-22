<?php
//PHP language construct and function names are not case-sensitive, but variable and
//constant names are.

ECHO 'Hello World'; //works
$variable = 'Hello World';
echo $Variable; //won't work
?>

<?=$variable //The echo statement is the last statement before a closing tag and so it does not
//need a semicolon to terminate it. ?>


<?php
//COMMENTS

#Perl style comments
// C style comments
/*
   Multiline comment
*/

/**
 * API documentation has two asterisks, this is not a PHP
 * syntax distinction, but is just a convention.
 */

?>

<?php
//Types aliases
$a = (boolean) true;
$b = (bool) true;
var_dump($a === $b); //bool(true)

//Cast Variables
$a = '123';     //string
$a = (int) $a;  //integar
$a = (bool) $a; //boolen

$a = "Hello World";
$a = (unset)$a; // Deprecated in PHP 7.2
var_dump($a);   // NULL

$a = 1234.56;
echo (int)$a;    // 1234 (not 1235)
$a = -1234.56;
echo (int)$a;    // -1234

$examples = [
    "12 o clock",
    "Half past 12",
    "12.30",
    "7.2e2 minutes after midnight"
];
foreach ($examples as $example) {
    $result = 0 + $example;
    var_dump($result);
}

//Never cast an unknown fraction to integer, as this can sometimes lead to unexpected results.
echo (int) ( (0.1+0.7) * 10 ); // echoes 7!


//It is quite common in PHP programs to omit the closing tag in a file. This is
//acceptable to the parser and is a useful way to prevent problems with newline characters
//appearing after the closing tag.
