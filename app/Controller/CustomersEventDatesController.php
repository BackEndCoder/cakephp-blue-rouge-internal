<?php
App::uses('AppController', 'Controller');
/**
 * CustomersEventDates Controller
 *
 * @property CustomersEventDate $CustomersEventDate
 * @property PaginatorComponent $Paginator
 */
class CustomersEventDatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomersEventDate->recursive = 0;
		$this->set('customersEventDates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomersEventDate->exists($id)) {
			throw new NotFoundException(__('Invalid customers event date'));
		}
		$options = array('conditions' => array('CustomersEventDate.' . $this->CustomersEventDate->primaryKey => $id));
		$this->set('customersEventDate', $this->CustomersEventDate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomersEventDate->create();
			if ($this->CustomersEventDate->save($this->request->data)) {
				$this->Session->setFlash(__('The customers event date has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers event date could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$customers = $this->CustomersEventDate->Customer->find('list');
		$eventDates = $this->CustomersEventDate->EventDate->find('list');
		$this->set(compact('customers', 'eventDates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->CustomersEventDate->id = $id;
		if (!$this->CustomersEventDate->exists($id)) {
			throw new NotFoundException(__('Invalid customers event date'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomersEventDate->save($this->request->data)) {
				$this->Session->setFlash(__('The customers event date has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customers event date could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('CustomersEventDate.' . $this->CustomersEventDate->primaryKey => $id));
			$this->request->data = $this->CustomersEventDate->find('first', $options);
		}
		$customers = $this->CustomersEventDate->Customer->find('list');
		$eventDates = $this->CustomersEventDate->EventDate->find('list');
		$this->set(compact('customers', 'eventDates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CustomersEventDate->id = $id;
		if (!$this->CustomersEventDate->exists()) {
			throw new NotFoundException(__('Invalid customers event date'));
		}
		if ($this->CustomersEventDate->delete()) {
			$this->Session->setFlash(__('Customers event date deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customers event date was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
