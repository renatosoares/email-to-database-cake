<?php
App::uses('AppController', 'Controller');
/**
 * Testmails Controller
 *
 * @property Testmail $Testmail
 * @property PaginatorComponent $Paginator
 */
class TestmailsController extends AppController {

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
		$this->Testmail->recursive = 0;
		$this->set('testmails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Testmail->exists($id)) {
			throw new NotFoundException(__('Invalid testmail'));
		}
		$options = array('conditions' => array('Testmail.' . $this->Testmail->primaryKey => $id));
		$this->set('testmail', $this->Testmail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Testmail->create();
			if ($this->Testmail->save($this->request->data)) {
				$this->Flash->success(__('The testmail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The testmail could not be saved. Please, try again.'));
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
		if (!$this->Testmail->exists($id)) {
			throw new NotFoundException(__('Invalid testmail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Testmail->save($this->request->data)) {
				$this->Flash->success(__('The testmail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The testmail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Testmail.' . $this->Testmail->primaryKey => $id));
			$this->request->data = $this->Testmail->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Testmail->id = $id;
		if (!$this->Testmail->exists()) {
			throw new NotFoundException(__('Invalid testmail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Testmail->delete()) {
			$this->Flash->success(__('The testmail has been deleted.'));
		} else {
			$this->Flash->error(__('The testmail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
