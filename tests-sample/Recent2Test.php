<?php
require_once __DIR__ .'/../lib/Recent2.php';

class Recent2Test extends PHPUnit_Framework_TestCase {
	public function testGetInfoCount() {
		$stub = $this->getMock('Getter2');
		$stub->expects($this->any())
			->method('get')
			->will($this->returnValue(
			array(
				'aaaaa',
				'bbbbb',
				'cccccc'
			)
		));
		$obj = new Recent2($stub);
		$this->assertCount(35,$obj->getList());
	}
}
