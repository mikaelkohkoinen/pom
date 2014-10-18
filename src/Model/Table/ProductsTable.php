<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 */
class ProductsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('products');
		$this->displayField('title');
		$this->primaryKey('id');

		$this->belongsTo('Orders', [
			'foreignKey' => 'order_id',
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->add('order_id', 'valid', ['rule' => 'numeric'])
			->validatePresence('order_id', 'create')
			->notEmpty('order_id')
			->validatePresence('title', 'create')
			->notEmpty('title')
			->allowEmpty('description');

		return $validator;
	}

}
