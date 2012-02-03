<?php


class SlowTest extends PHPUnit_Framework_TestCase {


	/** @test */
	public function slowTest() {
		sleep(1);
		$this->assertTrue(0 == false);
	}

	/** @test */
	public function slowFailingTest() {
		sleep(1);
		$this->assertTrue(1 == false);
	}

	/** @test */
	public function slowPendingTest() {
		sleep(1);
		// Stop here and mark this test as incomplete.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/** @test */
	public function slowSkippedTest() {
		sleep(1);
		// Stop here and mark this test as incomplete.
		$this->markTestSkipped(
			'The MySQLi extension is not available.'
		);
	}

}
