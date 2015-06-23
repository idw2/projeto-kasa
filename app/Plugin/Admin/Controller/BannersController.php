<?php

App::uses('AppController', 'Controller');

/**
 * Banners Controller
 *
 * @property Banner $Banner
 * @property PaginatorComponent $Paginator
 */
class BannersController extends AdminAppController {

    /**
     * Components
     *
     * @var array
     */
    var $name = 'Banners';
    var $uses = array('Banner', 'Property');
    var $helpers = array('Form', 'UploadPack.Upload', 'Lib');
    public $components = array('Session', 'Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Banner->recursive = 0;
        
        $this->paginate = array(
            'fields' => array('`Banner`.*'),
            'conditions' => array("`Banner`.`language` = '{$this->Session->read('Config.language')}'"),
            'order' => array('Banner.created DESC'),
            'limit' => 26
        );
        
        $this->set('banners', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Banner->exists($id)) {
            throw new NotFoundException(__('Invalid banner'));
        }
        $options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
        $this->set('banner', $this->Banner->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Banner->create();
            if ($this->Banner->save($this->request->data)) {
                $this->Session->setFlash(__('The banner has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The banner could not be saved. Please, try again.'));
            }
        }
        
        $property = $this->Property->find('all', array('conditions' => array('`Property`.`status` = 1')));
        $this->set('properties', $property);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Banner->exists($id)) {
            throw new NotFoundException(__('Invalid banner'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Banner->save($this->request->data)) {
                $this->Session->setFlash(__('The banner has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The banner could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Banner.' . $this->Banner->primaryKey => $id));
            $this->request->data = $this->Banner->find('first', $options);
        }
        
        $property = $this->Property->find('all', array('conditions' => array('`Property`.`status` = 1')));
        $this->set('properties', $property);
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Banner->id = $id;
        if (!$this->Banner->exists()) {
            throw new NotFoundException(__('Invalid banner'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Banner->delete()) {
            $this->Session->setFlash(__('The banner has been deleted.'));
        } else {
            $this->Session->setFlash(__('The banner could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function status($id, $status) {        
        $this->Banner->id = $id;
        $this->Banner->saveField('status', $status);
        $this->Session->setFlash(__('* Status atualizado com sucesso!'));
        $this->redirect(array('action' => 'index'));
    }

    function positions() {

        $this->autoRender = false;

        for ($index = 0; $index < count($this->data['Banner']['id']); $index++) {
            $this->Banner->id = $this->data['Banner']['id'][$index];
            $this->Banner->saveField('position', $this->data['Banner']['position'][$index]);
        }
        $this->Session->setFlash(__('* Ordem das imagens alterada com sucesso!'));
        $this->redirect(array('action' => 'index'));
    }

}
