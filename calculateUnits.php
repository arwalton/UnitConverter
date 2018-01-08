<!--
method = "get">

fromUnit
toUnit

-->

<?php
	$amount = htmlspecialchars($_GET['amount']);
	$fromUnit = htmlspecialchars($_GET['fromUnit']);
	$toUnit = htmlspecialchars($_GET['toUnit']);
	$conversionArray = array(
	"Attometer" => 0.000000000000000001,
	"Barleycorn" => 0.008467,
	"Centimeter" => .01,
	"Cubit" => .4572,
	"Decameter" => 10,
	"Decimeter" => .1,
	"Exameter" => 1000000000000000000,
	"Femtometer" => .000000000000001,
	"Foot" => .3048,
	"Furlong" => 201.168,
	"Gigameter" => 1000000000,
	"Hand" => .1016,
	"Hectometer" => 100,
	"Horse Length" => 2.4,
	"Inch" => .0254,
	"Kilometer" => 1000,
	"League" => 5556,
	"Light-nanosecond" => .299792458,
	"Light-year" => 9460528400000000,
	"Lunar Distance" => 384400000,
	"Megameter" => 1000000,
	"Meter" => 1,
	"Metric Foot" => .3,
	"Micrometer" => .000001,
	"Mile" => 1609.34,
	"Millimeter" => .001,
	"Nanometer" => .000000001,
	"Nautical Mile" => 1852,
	"Parsec" => 30860000000000000,
	"Peninkulma" => 10688,
	"Petameter" => 1000000000000000,
	"Picometer" => .000000000001,
	"Poronkusema" => 7500,
	"Rack Unit" => .0445,
	"Siriometer" => 149600000000000000,
	"Smoot" => 1.7018,
	"Terameter" => 1000000000000,
	"Verst" => 1066.8,
	"Yard" => .9144,
	"Yoctometer" => .000000000000000000000001,
	"Yottameter" => 1000000000000000000000000,
	"Zeptometer" => .000000000000000000001,
	"Zettameter" => 1000000000000000000000,
);	
	$firstCalc = ($amount * $conversionArray[$fromUnit]);
	$answer = ((float)$firstCalc / (float)$conversionArray[$toUnit]);
	
	echo "The answer is " . $answer . "<br>";
	
?>

