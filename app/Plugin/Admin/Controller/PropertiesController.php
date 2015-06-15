<?php

App::uses('AppController', 'Controller');

/**
 * Properties Controller
 *
 * @property Property $Property
 * @property PaginatorComponent $Paginator
 */
class PropertiesController extends AdminAppController {

    var $name = 'Properties';
    var $uses = array('Property', 'Detail', 'Location', 'Photo');

    /**
     * Components
     *
     * @var array
     */
    var $helpers = array('Form', 'UploadPack.Upload');
    public $components = array('Session', 'Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Property->recursive = 0;
        $this->set('properties', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Property->exists($id)) {
            throw new NotFoundException(__('Invalid property'));
        }
        $options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
        $this->set('property', $this->Property->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Property->create();
            if ($this->Property->save($this->request->data)) {

                $property = $this->Property->find('first');

                $details['Detail']['propertie_id'] = $property['Property']['id'];
                $locations['Location']['propertie_id'] = $property['Property']['id'];

                if ($this->Detail->save($details)) {
                    if ($this->Location->save($locations)) {
                        $this->Session->setFlash(__('The property has been saved.'));
                        return $this->redirect(array('action' => 'index'));
                    }
                }
            } else {
                $this->Session->setFlash(__('The property could not be saved. Please, try again.'));
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
        if (!$this->Property->exists($id)) {
            throw new NotFoundException(__('Invalid property'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('The property has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The property could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
            $this->request->data = $this->Property->find('first', $options);
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
        $this->Property->id = $id;
        if (!$this->Property->exists()) {
            throw new NotFoundException(__('Invalid property'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Property->delete()) {
            $this->Session->setFlash(__('The property has been deleted.'));
        } else {
            $this->Session->setFlash(__('The property could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function status($id, $status) {
        $this->Property->id = $id;
        $this->Property->saveField('status', $status);
        $this->Session->setFlash(__('* Status atualizado com sucesso!'));
        $this->redirect(array('action' => 'index'));
    }

    function details($id) {

        $detail_id = $this->Detail->find('first', array('conditions' => array("`Detail`.`propertie_id` = '{$id}' ")));

        if (!$this->Detail->exists($detail_id['Detail']['id'])) {
            $this->redirect(array('action' => 'details_add', $id));
            return false;
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Detail->save($this->request->data)) {
                $this->Session->setFlash(__('The detail has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The detail could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Detail.' . $this->Detail->primaryKey => $detail_id['Detail']['id']));
            $this->request->data = $this->Detail->find('first', $options);
        }

        $this->set('propertie_id', $id);
        $this->set('id', $detail_id['Detail']['id']);
    }

    public function locations($id) {

        $locations_id = $this->Location->find('first', array('conditions' => array("`Location`.`propertie_id` = '{$id}' ")));

        if (!$this->Location->exists($locations_id['Location']['id'])) {
            throw new NotFoundException(__('Invalid location'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Location->save($this->request->data)) {
                $this->Session->setFlash(__('The location has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The location could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Location.' . $this->Location->primaryKey => $locations_id['Location']['id']));
            $this->request->data = $this->Location->find('first', $options);
        }

        $this->set('propertie_id', $id);
        $this->set('id', $locations_id['Location']['id']);
    }

    public function photos($id) {


        if (!$this->Property->exists($id)) {
            throw new NotFoundException(__('Invalid property'));
        }
        $options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
        $this->set('property', $this->Property->find('first', $options));

//        $this->Paginator->settings = array('Photo' => array('limit' => 20, 'maxLimit' => 100));
//
//        $this->Photo->recursive = 0;
//        $this->Photo->paginate = array(
//            'conditions' => array("`Photo`.`propertie_id` = '{$id}'"),
//            'order' => array("(`Photo`.`position`+0) ASC")
//        );
        
        $photos = $this->Photo->find('all', array(
            'conditions' => array("`Photo`.`propertie_id` = '{$id}'"),
            'order' => array("(`Photo`.`position`+0) ASC")
        ));



//        $this->set('photos', $this->Paginator->paginate());
        $this->set('photos', $photos);
        $this->set('propertie_id', $id);
    }
    

}