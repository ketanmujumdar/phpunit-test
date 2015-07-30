<?php

include_once "demo.php";

class demoTest extends PHPUnit_Framework_TestCase {

	public function testExecuteFunction() {
		$demo = new demo();

		$actual = $demo->executeFunction(20);
		$expected = 40;
		$this->assertEquals($expected, $actual);
	}

}