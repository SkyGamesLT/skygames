<?php
class MenusController extends AppController {

	var $name = 'Menus';
	var $helpers = array('Html', 'Form', 'Cache');

	var $cacheAction = array(
	 'index/' => '+1 day',
	);

	function index() {
		$result = $this->paginate();
		if(isset($this->params['requested'])) {
			return $result;
		}
		$this->Adminmenu->recursive = 0;
		$this->set('menus', $result);
	}


	function admin_index() {
		$this->Menu->recursive = 0;
		$this->set('menus', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Menu.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('menu', $this->Menu->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Menu->create();
			if ($this->Menu->save($this->data)) {
				$this->Session->setFlash(__('The Menu has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Menu could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Menu', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Menu->save($this->data)) {
				$this->Session->setFlash(__('The Menu has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Menu could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Menu->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Menu', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Menu->del($id)) {
			$this->Session->setFlash(__('Menu deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>