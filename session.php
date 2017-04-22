	<?php
$file = "1.ini";
echo "<pre>";
define('a', 'oooooooooo ali reza moosa vandnejade asle bafghi oooooooooo');
$test1 = "   w";

function line() {
	echo "</br>";
	echo "\n";
	echo "--------******-------";
	echo "\n";
	echo "</br>";
}

$arrayFriends = array(
	'fname' => 'ali',
	'lname' => 'moosavi',
	'phone' => array('mobile' => '09192001158',
		'home' => '021554688',
	),
	'favourite' => array('music' => 'roc',
		'teacher' => array('lesson' => 'social',
		),
	),

	'body' => array('foot' => array('size' => '20',
	),
	),

);

echo $arrayFriends['favourite']['teacher']['lesson'];

for ($i = 0; $i < 10; $i++) {

	line();
	echo $i;
	if ($i % 2 == 0) {
		echo " is a odd number";
	}

}

function checkAlphabet() {
	foreach (range('A', 'Z') as $char) {
		switch ($char) {
		case 'O':
			line();
			echo $char . "  =  " . "OK";
			break;
		case 'N':
			line();
			echo $char . "  =   " . "NO";
			break;

		default:
			break;
		}
	}

}

echo checkAlphabet();

line();

function changeUpDown($test) {
	for ($i = 0; $i < strlen($test); $i++) {
		if ($i % 2 == 0) {
			echo strtoupper($test[$i]);
		} else {
			echo strtolower($test[$i]);
		}
	}
}

echo changeUpDown(a);
line();

class ClassTest {

	public function testEcho($value = '') {
		$user = getenv("HTTP‬‬_‫‪USER‬‬‫_‬‪AGEENT‬‬");
		echo $user;

	}
}

$r = new ClassTest;

echo $r->testEcho();
line();
echo trim($test1);
line();

$date = new datetime();
var_dump($date);
line();

echo $date->gettimestamp();
line();

var_dump(explode("/", "/asd/asd/as/da/sd/asd"));

// echo $_SERVER['HTTP_CLIENT_IP'];

// echo $_SERVER['REMOTE_ADDR'];
line();

$content = file_get_contents($file);
echo $content;
$content .= "salam \n";
file_put_contents($file, $content);

line();

$data = parse_ini_file($file, true);
echo $data["database"]["ip"];
line();
echo "</pre>";
?>