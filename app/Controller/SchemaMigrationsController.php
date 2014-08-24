<?php
App::uses('AppController', 'Controller');
/**
 * SchemaMigrations Controller
 *
 * @property SchemaMigration $SchemaMigration
 * @property PaginatorComponent $Paginator
 */
class SchemaMigrationsController extends AppController {

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
		$this->SchemaMigration->recursive = 0;
		$this->set('schemaMigrations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SchemaMigration->exists($id)) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		$options = array('conditions' => array('SchemaMigration.' . $this->SchemaMigration->primaryKey => $id));
		$this->set('schemaMigration', $this->SchemaMigration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SchemaMigration->create();
			if ($this->SchemaMigration->save($this->request->data)) {
				$this->Session->setFlash(__('The schema migration has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schema migration could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->SchemaMigration->id = $id;
		if (!$this->SchemaMigration->exists($id)) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SchemaMigration->save($this->request->data)) {
				$this->Session->setFlash(__('The schema migration has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schema migration could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('SchemaMigration.' . $this->SchemaMigration->primaryKey => $id));
			$this->request->data = $this->SchemaMigration->find('first', $options);
		}
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
		$this->SchemaMigration->id = $id;
		if (!$this->SchemaMigration->exists()) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		if ($this->SchemaMigration->delete()) {
			$this->Session->setFlash(__('Schema migration deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Schema migration was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
