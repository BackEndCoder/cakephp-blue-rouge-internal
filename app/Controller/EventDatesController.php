<?php
App::uses('AppController', 'Controller');
/**
 * EventDates Controller
 *
 * @property EventDate $EventDate
 * @property PaginatorComponent $Paginator
 */
class EventDatesController extends AppController {

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
		$this->EventDate->recursive = 0;
		$this->set('eventDates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventDate->exists($id)) {
			throw new NotFoundException(__('Invalid event date'));
		}
		$options = array('conditions' => array('EventDate.' . $this->EventDate->primaryKey => $id));
		$this->set('eventDate', $this->EventDate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventDate->create();
			if ($this->EventDate->save($this->request->data)) {
				$this->Session->setFlash(__('The event date has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event date could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$events = $this->EventDate->Event->find('list');
		$customers = $this->EventDate->Customer->find('list');
		$this->set(compact('events', 'customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->EventDate->id = $id;
		if (!$this->EventDate->exists($id)) {
			throw new NotFoundException(__('Invalid event date'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventDate->save($this->request->data)) {
				$this->Session->setFlash(__('The event date has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event date could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('EventDate.' . $this->EventDate->primaryKey => $id));
			$this->request->data = $this->EventDate->find('first', $options);
		}
		$events = $this->EventDate->Event->find('list');
		$customers = $this->EventDate->Customer->find('list');
		$this->set(compact('events', 'customers'));
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
		$this->EventDate->id = $id;
		if (!$this->EventDate->exists()) {
			throw new NotFoundException(__('Invalid event date'));
		}
		if ($this->EventDate->delete()) {
			$this->Session->setFlash(__('Event date deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Event date was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
