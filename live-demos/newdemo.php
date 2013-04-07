<?php

class Dog {
	private $name;
	private $breed;

	public function __construct( $name = 'Lassie', $breed = 'Colie' ) {
		$this->name = $name;
		$this->breed = $breed;	
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getBreed() {
		return $this->breed;
	}
}

/*
if(...) {

}

if(...):

endif;

while(...) {}   
while(...):

endwhile;
*/

$default = new Dog( 'Sharo' );

echo $default->getName();
echo $default->getBreed();

/** 
$string = "Pesho";

$is_int = is_int( $string );

echo $is_int;
*/

