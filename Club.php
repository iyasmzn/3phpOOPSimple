<?php
/**
 *
 */
class Club {
	public $region, $clubName;

	function __construct($region) {
		return $this->region = $region;
	}
	public function set_club($name) {
		return $this->clubName = $name;
	}
	public function set() {
		return "$this->clubName, this club from $this->region.";
	}
}

$Barca = new Club('Spanyol');
echo $Barca->set_club('Barca');
echo "<br>";
echo $Barca->set();

echo "<br>";
echo "<br>";

$RMadrid = new Club('Spanyol');
echo $RMadrid->set_club('Real Madrid');
echo "<br>";
echo $RMadrid->set();

echo "<br>";
echo "<br>";

$EmYu = new Club('English');
echo $EmYu->set_club('Manchester United');
echo "<br>";
echo $EmYu->set();

?>