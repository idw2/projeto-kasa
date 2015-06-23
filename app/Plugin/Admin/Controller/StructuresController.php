<?php

App::uses('AppController', 'Controller');

/**
 * Structures Controller
 *
 * @property Structure $Structure
 * @property PaginatorComponent $Paginator
 */
class StructuresController extends AdminAppController {

    /**
     * Components
     *
     * @var array
     */
    var $name = 'Structures';
    var $uses = array('Structure');

    /**
     * Components
     *
     * @var array
     */
    var $helpers = array('Form', 'UploadPack.Upload', 'Lib', 'Html');
    public $components = array('Session', 'Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Structure->recursive = 0;
        
        $this->paginate = array(
            'fields' => array('`Structure`.*'),
            'conditions' => array("`Structure`.`language` = '{$this->Session->read('Config.language')}'"),
            'order' => array('Structure.created DESC'),
            'limit' => 26
        );
        
        $this->set('structures', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Structure->exists($id)) {
            throw new NotFoundException(__('Invalid structure'));
        }
        $options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
        $this->set('structure', $this->Structure->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Structure->create();
            if ($this->Structure->save($this->request->data)) {
                $this->Session->setFlash(__('The structure has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The structure could not be saved. Please, try again.'));
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
        if (!$this->Structure->exists($id)) {
            throw new NotFoundException(__('Invalid structure'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Structure->save($this->request->data)) {
                $this->Session->setFlash(__('The structure has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The structure could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Structure.' . $this->Structure->primaryKey => $id));
            $this->request->data = $this->Structure->find('first', $options);
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
        $this->Structure->id = $id;
        if (!$this->Structure->exists()) {
            throw new NotFoundException(__('Invalid structure'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Structure->delete()) {
            $this->Session->setFlash(__('The structure has been deleted.'));
        } else {
            $this->Session->setFlash(__('The structure could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function status($id, $status) {

        $this->Structure->updateAll(
                array('`Structure`.`status`' => 0), array("`Structure`.`id` != '' and `Structure`.`language` = '{$this->Session->read('Config.language')}'")
        );
        if ($status == 1) {
            $this->Structure->id = $id;
            $this->Structure->saveField('status', $status);
            $this->Session->setFlash(__('* Status atualizado com sucesso!'));
        }
        $this->redirect(array('action' => 'index'));
    }

}
