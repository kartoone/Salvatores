<?php
App::uses('AppController', 'Controller');
/**
 * Blocks Controller
 *
 * @property Block $Block
 * @property PaginatorComponent $Paginator
 */
class BlocksController extends AppController {

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
		$this->Block->recursive = 0;
		$this->set('blocks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid block'));
		}
		$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
		$this->set('block', $this->Block->find('first', $options));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function aboutUs($id = null) {
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid block'));
		}
		$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
		$this->set('block', $this->Block->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Block->create();
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('The block has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The block could not be saved. Please, try again.'));
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
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid block'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('The block has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The block could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
			$this->request->data = $this->Block->find('first', $options);
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
		$this->Block->id = $id;
		if (!$this->Block->exists()) {
			throw new NotFoundException(__('Invalid block'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Block->delete()) {
			$this->Session->setFlash(__('Block deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Block was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
