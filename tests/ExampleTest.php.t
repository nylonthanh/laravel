<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
        {
$this->markTestSkipped('????');

		$response = $this->call('GET', '/');
		$this->assertEquals(200, $response->getStatusCode());
	}

}
