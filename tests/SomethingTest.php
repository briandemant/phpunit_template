<?php


class SomethingTest extends PHPUnit_Framework_TestCase {


	public static function setUpClass() {
	}

	public function setUp() {

	}

	public function tearDown() {

	}

	/** @test */
	public function thatZeroIsFalse() {
		$this->assertTrue(0 == false);
	}
 

	/** @test */
	public function loadingOfClassWorks() {
		$something = new Something();
		$this->assertInstanceOf("Something", $something);
	}
	/** @test */
	public function testTested() {
		$something = new Something();
		$something->tested();
	}
	
	
		/** @test */
	public function pendingTest() { 
		// Stop here and mark this test as incomplete.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/** @test */
	public function skippedTest() { 
		// Stop here and mark this test as incomplete.
		$this->markTestSkipped(
			'The MySQLi extension is not available.'
		);
	}
}
