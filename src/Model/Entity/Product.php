<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 */
class Product extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'order_id' => true,
		'title' => true,
		'description' => true,
		'order' => true,
	];

}
