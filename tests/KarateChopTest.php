<?php

require_once dirname(__FILE__) . '/../KarateChop.php';

/**
 * Test class for KarateChop.
 * Generated by PHPUnit on 2011-12-16 at 16:11:01.
 */
class KarateChopTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var KarateChop
	 */
	protected $obj;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->obj = new KarateChop;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {
		
	}

	public function testChop() {
		$this->assertEquals(-1, KarateChop::chop(3, array()));
		$this->assertEquals(-1, KarateChop::chop(3, array(1)));
		$this->assertEquals(0,  KarateChop::chop(1, array(1)));
		$this->assertEquals(0,  KarateChop::chop(1, array(1, 3, 5)));
		$this->assertEquals(1,  KarateChop::chop(3, array(1, 3, 5)));
		$this->assertEquals(2,  KarateChop::chop(5, array(1, 3, 5)));
		$this->assertEquals(-1, KarateChop::chop(0, array(1, 3, 5)));
		$this->assertEquals(-1, KarateChop::chop(2, array(1, 3, 5)));
		$this->assertEquals(-1, KarateChop::chop(4, array(1, 3, 5)));
		$this->assertEquals(-1, KarateChop::chop(6, array(1, 3, 5)));
		$this->assertEquals(0,  KarateChop::chop(1, array(1, 3, 5, 7)));
		$this->assertEquals(1,  KarateChop::chop(3, array(1, 3, 5, 7)));
		$this->assertEquals(2,  KarateChop::chop(5, array(1, 3, 5, 7)));
		$this->assertEquals(3,  KarateChop::chop(7, array(1, 3, 5, 7)));
		$this->assertEquals(-1, KarateChop::chop(0, array(1, 3, 5, 7)));
		$this->assertEquals(-1, KarateChop::chop(2, array(1, 3, 5, 7)));
		$this->assertEquals(-1, KarateChop::chop(4, array(1, 3, 5, 7)));
		$this->assertEquals(-1, KarateChop::chop(6, array(1, 3, 5, 7)));
		$this->assertEquals(-1, KarateChop::chop(8, array(1, 3, 5, 7)));
		
	}
	
}

?>
