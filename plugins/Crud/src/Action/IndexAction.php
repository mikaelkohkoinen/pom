<?php
namespace Crud\Action;

use Crud\Traits\SerializeTrait;
use Crud\Traits\ViewTrait;
use Crud\Traits\ViewVarTrait;

/**
 * Handles 'Index' Crud actions
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 */
class IndexAction extends BaseAction {

	use SerializeTrait;
	use ViewTrait;
	use ViewVarTrait;

/**
 * Default settings for 'index' actions
 *
 * @var array
 */
	protected $_defaultConfig = [
		'enabled' => true,
		'scope' => 'table',
		'view' => null,
		'viewVar' => null,
		'serialize' => [],
		'api' => [
			'success' => [
				'code' => 200
			],
			'error' => [
				'code' => 400
			]
		]
	];

/**
 * Generic handler for all HTTP verbs
 *
 * @return void
 */
	protected function _handle() {
		$subject = $this->_subject(['success' => true, 'object' => null]);

		$this->_trigger('beforePaginate', $subject);
		$items = $this->_controller()->paginate($subject->object);
		$subject->set(['entities' => $items]);

		$this->_trigger('afterPaginate', $subject);
		$this->_trigger('beforeRender', $subject);
	}

}
