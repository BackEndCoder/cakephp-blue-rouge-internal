<?php
App::uses('Purchase', 'Model');

/**
 * Purchase Test Case
 *
 */
class PurchaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchase',
		'app.event_date',
		'app.event',
		'app.customer',
		'app.customers_event_date'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Purchase = ClassRegistry::init('Purchase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Purchase);

		parent::tearDown();
	}

}
