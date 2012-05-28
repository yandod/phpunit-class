<?php
require_once  __DIR__ .  '/../lib/Tankiyo.php';

class TankiyoTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		$this->obj = new Tankiyo();
	}
	public function tearDown() {
		$this->obj = null;
	}
	
	public function testGetDates() {
		$ret = $this->obj->getDates();
	}
	public function testFormatDate() {
		$ret = $this->obj->format_date('2012-05-29');
	}

}