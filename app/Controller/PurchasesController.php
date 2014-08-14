<?php
App::uses('AppController', 'Controller');
/**
 * Purchases Controller
 *
 * @property Purchase $Purchase
 * @property PaginatorComponent $Paginator
 */
class PurchasesController extends AppController {

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
		$this->Purchase->recursive = 0;
		$this->set('purchases', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
		$this->set('purchase', $this->Purchase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Purchase->create();
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$eventDates = $this->Purchase->EventDate->find('list');
		$customers = $this->Purchase->Customer->find('list');
		$this->set(compact('eventDates', 'customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Purchase->id = $id;
		if (!$this->Purchase->exists($id)) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Purchase->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Purchase.' . $this->Purchase->primaryKey => $id));
			$this->request->data = $this->Purchase->find('first', $options);
		}
		$eventDates = $this->Purchase->EventDate->find('list');
		$customers = $this->Purchase->Customer->find('list');
		$this->set(compact('eventDates', 'customers'));
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
		$this->Purchase->id = $id;
		if (!$this->Purchase->exists()) {
			throw new NotFoundException(__('Invalid purchase'));
		}
		if ($this->Purchase->delete()) {
			$this->Session->setFlash(__('Purchase deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Purchase was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
