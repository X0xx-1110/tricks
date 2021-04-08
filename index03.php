<?php
error_reporting(0);
/**
 * index02.php
 *
 * tricks
 *
 * @category   Web
 * @package    Between 2
 * @author     Kaloyan Hristov
 * @copyright  2021 Kaloyan Hristov
 * @license    https://github.com/X0xx-1110/tricks/blob/main/LICENSE  AGPL License
 * @version    [1.1.1]
 * @link       https://github.com/X0xx-1110/tricks
 * @see        https://github.com/X0xx-1110
 * @since      File available since Release 1.1.1
 * @deprecated N/A
 */

/*
*	Some kind of prototype,  but there we could imagine and more.
* 	Much more.
*/
class data
{
	private string $_information;
	public function simplePrototype(string $text) : void
	{
		$this -> _information = $text;
	} 
}
class testingSecondBefore
{
	private array $_history;
	private int $_endSatus = 100;

	private function historyOfPrototype(testing $obj, int $stat) : void
	{
		if($this -> $_endSatus > $stat) {
			$Ooo = new testingBefore;
			$Ooo -> setOfPrototype($obj, ++$stat);
		} else {
			$this -> _history[] = $obj;
		}
	}

	public function setOfPrototype(testing $obj, int $stat) : void
	{
		$this -> historyOfPrototype($obj, $stat);
	}
}
class testingBefore
{
	private array $_history;

	private function historyOfPrototype(testing $obj, int $stat) : void
	{
		$Ooo = new testingSecondBefore;
		$Ooo -> setOfPrototype( $obj, $stat);
	}

	public function setOfPrototype(testing $obj, int $stat) : void
	{
		$this -> historyOfPrototype($obj, $stat);
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
		$this -> moveBetween( $this );
	}
	private function moveBetween(testing $between){
		$Ooo = new testingBefore;
		$Ooo -> setOfPrototype( $between, 1 );
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