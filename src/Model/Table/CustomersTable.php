<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 */
class CustomersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('customers');
		$this->displayField('name');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');

		$this->hasMany('Orders', [
			'foreignKey' => 'customer_id',
		]);
		$this->belongsToMany('Users', [
			'foreignKey' => 'customer_id',
			'targetForeignKey' => 'user_id',
			'joinTable' => 'customers_users',
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
			->allowEmpty('name');

		return $validator;
	}

}
