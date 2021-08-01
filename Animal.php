<?php
class Animal{
	public $cry = "bowbow!";
	function bow(){
		echo $this -> cry  .PHP_EOL;
	}
}
	class Dog extends Animal{
		public $cry = "わんわん";
	}	
	class Cat extends Animal{
		public $cry = "にゃー";
	}

	$ani_1 = new Dog;
	$ani_2 = new Cat;
	$ani_1 -> bow();
	$ani_2 -> bow();

?>
