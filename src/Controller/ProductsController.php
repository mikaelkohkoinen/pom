<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Orders']
		];
		$this->set('products', $this->paginate($this->Products));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$product = $this->Products->get($id, [
			'contain' => ['Orders']
		]);
		$this->set('product', $product);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$product = $this->Products->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Products->save($product)) {
				$this->Flash->success('The product has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The product could not be saved. Please, try again.');
			}
		}
		$orders = $this->Products->Orders->find('list');
		$this->set(compact('product', 'orders'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$product = $this->Products->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$product = $this->Products->patchEntity($product, $this->request->data);
			if ($this->Products->save($product)) {
				$this->Flash->success('The product has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The product could not be saved. Please, try again.');
			}
		}
		$orders = $this->Products->Orders->find('list');
		$this->set(compact('product', 'orders'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$product = $this->Products->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Products->delete($product)) {
			$this->Flash->success('The product has been deleted.');
		} else {
			$this->Flash->error('The product could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
