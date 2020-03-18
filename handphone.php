<?php
/**
 *
 */
class Handphone {
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

$xiaomi = new Handphone('China');
echo $xiaomi->merek('xiaomi');
echo "<br>";
echo $xiaomi->set();

?>