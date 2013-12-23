<?php
App::uses('AppController', 'Controller');
/**
 * MenuItems Controller
 *
 * @property MenuItem $MenuItem
 * @property PaginatorComponent $Paginator
 */
class MenuItemsController extends AppController {

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
		$this->MenuItem->recursive = 0;
		$this->set('menuItems', $this->Paginator->paginate());
	}

	public function m_index() {
		$this->MenuItem->recursive = 0;
		$menuitems = $this->MenuItem->find('all');
                echo json_encode($menuitems);
                exit;
	}
	
	public function m_salads(){
            $this->MenuItem->recursive = 0;
            $menuitems = $this->MenuItem->find('all', array(
            'conditions' => array('MenuCategory.title' => 'Salads')));
            echo json_encode($menuitems);
                exit;
        }
        
        public function m_calzones(){
            $this->MenuItem->recursive = 0;
            $menuitems = $this->MenuItem->find('all', array(
            'conditions' => array('MenuCategory.title' => 'Calzones')));
            echo json_encode($menuitems);
                exit;
        }
       
        
        public function m_desserts(){
            $this->MenuItem->recursive = 0;
            $menuitems = $this->MenuItem->find('all', array(
    'conditions' => array('MenuCategory.title' => 'Desserts')));
            echo json_encode($menuitems);
                exit;
        }
		
		public function m_subs(){
            $this->MenuItem->recursive = 0;
            $menuitems = $this->MenuItem->find('all', array(
    'conditions' => array('MenuCategory.title' => 'Subs')));
            echo json_encode($menuitems);
                exit;
        }
		public function m_appetizers(){
            $this->MenuItem->recursive = 0;
            $menuitems = $this->MenuItem->find('all', array(
    'conditions' => array('MenuCategory.title' => 'Appetizers')));
            echo json_encode($menuitems);
                exit;
        }
		public function m_kidsmenu(){
            $this->MenuItem->recursive = 0;
			$menu = "Children's Menu";
            $menuitems = $this->MenuItem->find('all', array(
			'conditions' => array('MenuCategory.title' => $menu )));
            echo json_encode($menuitems);
                exit;
        }
        
          public function m_chickenentrees(){
            $this->MenuItem->recursive = 0;
                    
            $menuitems = $this->MenuItem->find('all', array(
                        'conditions' => array('MenuCategory.title' => 'Chicken Entrees' )));
            echo json_encode($menuitems);
                exit;
          }
          
          public function m_vegetarianentrees(){
            $this->MenuItem->recursive = 0;
                    
            $menuitems = $this->MenuItem->find('all', array(
                        'conditions' => array('MenuCategory.title' => 'Vegetarian Entrees' )));
            echo json_encode($menuitems);
                exit;
          }
          
           public function m_seafoodentrees(){
            $this->MenuItem->recursive = 0;
                  
            $menuitems = $this->MenuItem->find('all', array(
                        'conditions' => array('MenuCategory.title' => 'Seafood Entrees' )));
            echo json_encode($menuitems);
                exit;
          }
          
           public function m_beeforporkentrees(){
            $this->MenuItem->recursive = 0;
                  
            $menuitems = $this->MenuItem->find('all', array(
                        'conditions' => array('MenuCategory.title' => 'Beef or Pork Entrees' )));
            echo json_encode($menuitems);
                exit;
          }
        
        

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MenuItem->exists($id)) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
		$this->set('menuItem', $this->MenuItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MenuItem->create();
			if ($this->MenuItem->save($this->request->data)) {
				$this->Session->setFlash(__('The menu item has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu item could not be saved. Please, try again.'));
			}
		}
		$menuCategories = $this->MenuItem->MenuCategory->find('list');
		$this->set(compact('menuCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MenuItem->exists($id)) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MenuItem->save($this->request->data)) {
				$this->Session->setFlash(__('The menu item has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
			$this->request->data = $this->MenuItem->find('first', $options);
		}
		$menuCategories = $this->MenuItem->MenuCategory->find('list');
		$this->set(compact('menuCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MenuItem->id = $id;
		if (!$this->MenuItem->exists()) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MenuItem->delete()) {
			$this->Session->setFlash(__('Menu item deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Menu item was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
