<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 */
class OrdersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('orders');
		$this->displayField('id');
		$this->primaryKey('id');

		$this->hasMany('Products', [
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
			->add('fm_ref', 'valid', ['rule' => 'numeric'])
			->allowEmpty('fm_ref');

		return $validator;
	}

}
