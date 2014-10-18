<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customers Controller
 *
 * @property App\Model\Table\CustomersTable $Customers
 */
class CustomersController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('customers', $this->paginate($this->Customers));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$customer = $this->Customers->get($id, [
			'contain' => ['Users', 'Orders']
		]);
		$this->set('customer', $customer);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$customer = $this->Customers->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Customers->save($customer)) {
				$this->Flash->success('The customer has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The customer could not be saved. Please, try again.');
			}
		}
		$users = $this->Customers->Users->find('list');
		$this->set(compact('customer', 'users'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$customer = $this->Customers->get($id, [
			'contain' => ['Users']
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$customer = $this->Customers->patchEntity($customer, $this->request->data);
			if ($this->Customers->save($customer)) {
				$this->Flash->success('The customer has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The customer could not be saved. Please, try again.');
			}
		}
		$users = $this->Customers->Users->find('list');
		$this->set(compact('customer', 'users'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$customer = $this->Customers->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Customers->delete($customer)) {
			$this->Flash->success('The customer has been deleted.');
		} else {
			$this->Flash->error('The customer could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
