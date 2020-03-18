<?php
/**
 *
 */
class Laptop {
	public $region, $merek;

	function __construct($region) {
		return $this->region = $region;
	}
	public function merek($name) {
		return $this->merek = $name;
	}
	public function set() {
		return "This is $this->merek, from $this->region";
	}
}

$Asus = new Laptop('China');
echo $Asus->merek('Asus');
echo "<br>";
echo $Asus->set();

?>