<?php
require_once __DIR__ .'/../lib/Recent.php';

class RecentTest extends PHPUnit_Framework_TestCase {
	public function testGetInfoCount() {
		$obj = new Recent();
		$this->assertCount(35,$obj->getList());
	}
}
