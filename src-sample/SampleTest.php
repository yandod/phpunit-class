<?php
// src/SampleTest.php
require_once 'plain-sample4-func.php';

class SampleTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
		$this->assertEquals('つとむくん', getLabel('つとむ', 'male'));
		$this->assertEquals('やよいちゃん', getLabel('やよい', 'female'));
    }
    
    public function testIregular()
    {
		$this->assertEquals('くん', getLabel('', 'male'));
		$this->assertEquals('みんドリちゃん', getLabel('みんドリ', 'bird'));
    }
}