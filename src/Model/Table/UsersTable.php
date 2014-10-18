<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('users');
		$this->displayField('username');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');

		$this->hasMany('Orders', [
			'foreignKey' => 'user_id',
		]);
		$this->belongsToMany('Customers', [
			'foreignKey' => 'user_id',
			'targetForeignKey' => 'customer_id',
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
			->validatePresence('username', 'create')
			->notEmpty('username')
			->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
			->validatePresence('password', 'create')
			->notEmpty('password')
			->validatePresence('first_name', 'create')
			->notEmpty('first_name')
			->validatePresence('last_name', 'create')
			->notEmpty('last_name')
			->add('email', 'valid', ['rule' => 'email'])
			->allowEmpty('email')
			->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
			->allowEmpty('phone')
			->allowEmpty('mobile')
			->add('fm_ref', 'valid', ['rule' => 'numeric'])
			->allowEmpty('fm_ref');

		return $validator;
	}

}
