<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\ProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsTable Test Case
 */
class ProductsTableTest extends TestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Products') ? [] : ['className' => 'App\Model\Table\ProductsTable'];
		$this->Products = TableRegistry::get('Products', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Products);

		parent::tearDown();
	}

/**
 * Test initial setup
 *
 * @return void
 */
	public function testInitialization() {
		$this->markTestIncomplete('Not implemented yet.');
	}

}
