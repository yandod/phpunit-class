<?php
require_once  __DIR__ .  '/../lib/Kid.php';

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-05-28 at 09:16:55.
 */
class KidTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Kid
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Kid('������',10);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kid::getLabel
     * @todo   Implement testGetLabel().
     */
    public function testGetLabel()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Kid::getYoungLabel
     * @todo   Implement testGetYoungLabel().
     */
    public function testGetYoungLabel()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}