<?php
App::uses('EventDate', 'Model');

/**
 * EventDate Test Case
 *
 */
class EventDateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event_date',
		'app.event',
		'app.purchase'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventDate = ClassRegistry::init('EventDate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventDate);

		parent::tearDown();
	}

}
