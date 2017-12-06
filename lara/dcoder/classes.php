<?php

class SosaExtraCheese{

	var $first_name;
	var $second_name;

	var $level;
	var $department;

	/*function nothing(){
		echo 'Everybody knows it\'s nothing founded by '. get_class($this). '<br /> <br />' ;
	}

	function greetings(){
		echo 'There\'s nothing hidden under the sun'. '<br /> <br />';
	}

	function hello(){
		$this->nothing();
	}
*/

	function full_name(){
		return $this->first_name. ' ' . $this->second_name;
	
	}

}

$sosaextracheese = new SosaExtraCheese();
//$sosaextracheese-> nothing();
//$sosaextracheese-> hello();
//$sosaextracheese-> greetings();

$sosaextracheese->first_name = 'Prince ';
$sosaextracheese->second_name = 'Efik';
$sosaextracheese->level = 400;
$sosaextracheese->department = 'computer science';


echo $sosaextracheese->first_name;
echo $sosaextracheese->second_name. '<br />';
echo $sosaextracheese->level. '<br />';
echo $sosaextracheese->department. '<br />';


$new_sosaextracheese = new SosaExtraCheese();
$sosaextracheese->first_name = 'Billy ';
$sosaextracheese->second_name = 'Efik';
$sosaextracheese->level = 100;
$sosaextracheese->department = 'Economics';


echo $sosaextracheese->first_name;
echo $sosaextracheese->second_name. '<br />';
echo $sosaextracheese->level. '<br />';
echo $sosaextracheese->department. '<br /> <br /> <br />';


echo $sosaextracheese->full_name();



?>