<?php
App::uses('CustomersEventDate', 'Model');

/**
 * CustomersEventDate Test Case
 *
 */
class CustomersEventDateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customers_event_date',
		'app.customer',
		'app.purchase',
		'app.event_date',
		'app.event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomersEventDate = ClassRegistry::init('CustomersEventDate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomersEventDate);

		parent::tearDown();
	}

}
