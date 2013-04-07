<?php

function get_some_arr() {
	return array(1, 2, 3, 4, 5);
}

$magic = 'get_some_arr';

list( $a, $b, $c, $d, $e ) = $magic();

echo $d;


/*
$arr = array('Bira' => 2, 'Cigari' => 5, 'Mazeratti' => 350000);

foreach( $arr as $key => $value ) {
   echo "$key = EUR \${$value}asdasdszad <br />" ;
} */


/* 
$arr = array(1, 2, 3, 4, 5, 6, 7, 8);

foreach( $arr as $single) {
   echo $single . '<br />';
}
*/


/* 

$text = "Hello, my nickname is \"Garvana\" Pesho";

$mario = 'Mario';

$format = 'Hello, %1$s %1$s %1$s';
printf($format, $mario); 

// echo $text;
*/

/* 
$mario = 'Mario';
$pesho = 'Pesho';
$gencho = 'Gencho';

// $text = 'Hello, ' . $mario . ' and ' . $pesho . ' and ' . $gencho;
$text = "Hello, $mario and $pesho and $gencho and $mario and $mario ... and $mario!";



// echo $text;

$text2 = "Heeeeey, $mario, kak si?";

// echo $text2;
*/
?>
