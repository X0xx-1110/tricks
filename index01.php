<?php
error_reporting(0);

class data
{
	private string $_information;
	public function simplePrototype(string $text) : void
	{
		$this -> _information = $text;
	} 
}

class testing
{
	private array $_history2;
	private array $_history3;
	private array $_history4;
	private array $_history5;
	private array $_history6;
	private array $_history7;

	private function historyOfPrototype(data $obj, int $status) : void
	{
		$this -> ${"_history".$status}[] = $obj;
	}

	public function setOfPrototype(data $obj, int $status) : void
	{
		$this -> historyOfPrototype($obj, $status);
	}
}

$OOO = new testing();
$var1 = "";

for($i=1;$i<1000;$i++) {
	$dataOfObject = new data();
	if($i % 7 == 0) {
		$dataOfObject -> simplePrototype(sha1($i));
		$OOO -> setOfPrototype($dataOfObject, 7);
	}
	elseif($i % 6 == 0) {
		$dataOfObject -> simplePrototype(sha1($i));
		$OOO -> setOfPrototype($dataOfObject, 6);
	}
	elseif($i % 5 == 0) {
		$dataOfObject -> simplePrototype(sha1($i));
		$OOO -> setOfPrototype($dataOfObject, 5);
	}
	elseif($i % 4 == 0) {
		$dataOfObject -> simplePrototype(sha1($i));
		$OOO -> setOfPrototype($dataOfObject, 4);
	}
	elseif($i % 3 == 0) {
		$dataOfObject -> simplePrototype(sha1($i));
		$OOO -> setOfPrototype($dataOfObject, 3);
	}
	elseif($i % 2 == 0) {
		$dataOfObject -> simplePrototype(sha1($i));
		$OOO -> setOfPrototype($dataOfObject, 2);
	}
}



echo "<pre>";
var_dump( $OOO );























?>