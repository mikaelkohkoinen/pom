<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'username' => true,
		'password' => true,
		'first_name' => true,
		'last_name' => true,
		'email' => true,
		'phone' => true,
		'mobile' => true,
		'fm_ref' => true,
		'customers' => true,
	];
	
	protected $_hidden = ['password'];
	
	protected function _getFullName() {
		return $this->_properties['first_name'] . '  ' . $this->_properties['last_name'];
	    }

}
