<?php

App::uses('AppController', 'Controller');

class PhotosController extends AdminAppController {

    var $name = 'Photos';
    var $uses = array('Photo');
    var $helpers = array('Form', 'UploadPack.Upload');
    public $components = array('Session', 'Paginator');

    function upload($propertie_id) {

        $this->layout = "ajax";

        $this->request->data['Photo']['propertie_id'] = $propertie_id;
        $this->request->data['Photo']['status'] = 1;

        if ($this->request->is('post')) {
            $this->Photo->create();
            if ($this->Photo->save($this->request->data)) {
                $photo = $this->Photo->find('first', array('conditions' => array("`Photo`.`propertie_id` = '{$propertie_id}'"), 'order' => array('`Photo`.`created` DESC')));
                $this->set('photo', $photo);
            }
        }
    }

    function status($id, $status) {
        $this->Photo->id = $id;
        $this->Photo->saveField('status', $status);
        $this->Session->setFlash(__('* Status atualizado com sucesso!'));

        $photo = $this->Photo->find('first', array('conditions' => array("`Photo`.`id` = '{$id}'")));

        $this->redirect(array('controller' => 'properties', 'action' => 'photos', $photo['Photo']['propertie_id']));
    }

    public function delete($id = null) {

        $photo = $this->Photo->find('first', array('conditions' => array("`Photo`.`id` = '{$id}'")));

        $this->Photo->id = $id;
        if (!$this->Photo->exists()) {
            throw new NotFoundException(__('Invalid photo'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Photo->delete()) {
            $this->Session->setFlash(__('The photo has been deleted.'));
        } else {
            $this->Session->setFlash(__('The photo could not be deleted. Please, try again.'));
        }
        $this->redirect(array('controller' => 'properties', 'action' => 'photos', $photo['Photo']['propertie_id']));
    }

    function positions() {

        $this->autoRender = false;

//        debugger::dump($this->data);

        $propertie_id = $this->data['Photo']['propertie_id'];

        for ($index = 0; $index < count($this->data['Photo']['id']); $index++) {
            $this->Photo->id = $this->data['Photo']['id'][$index];
            $this->Photo->saveField('position', $this->data['Photo']['position'][$index]);
        }
        
        $this->Session->setFlash(__('* Ordem das imagens alterada com sucesso!'));
//        $this->redirect(array('controller' => 'properties', 'action' => 'photos', $propertie_id));
        $this->redirect(array('controller' => 'properties', 'action' => 'index'));
    }

}
