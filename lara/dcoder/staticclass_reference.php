<?php

	class A {

		static $a = 1;

		static function modified_a(){
			return self::$a + 10;
		}

		public function hello(){
			echo "Hello <br>";
		}
	}

	class B extends A{
		static function attr_test(){
			echo self::$a;
		}

		static function method_test(){
			echo self::modified_a();
		}

		public function instance_test(){
			echo self::hello();
		}
	}

	echo B::$a. '<br />';
	echo B::modified_a(). '<br />';

	echo B::attr_test() . "<br />";
	echo B::method_test(). "<br />";

	$parent = new B();
	$parent->hello();


?>