<?php

App::uses('AppController', 'Controller');

class WebpagesController extends WebsiteAppController {

    var $name = 'Webpages';
    var $uses = array('Banner', 'Property');
    var $helpers = array();
    public $components = array('Session', 'Paginator');

    public function index() {
        $this->set('banners', $this->Banner->find('all', array('conditions' => array('`Banner`.`status` = 1'))));
        $this->set('recents', $this->Property->find('all', array(
                    'fields' => array('`Property`.*, `Detail`.*'),
                    'conditions' => array('`Property`.`status` = 1'),
                    'joins' => array(array(
                            'alias' => 'Detail',
                            'table' => 'details',
                            'type' => 'INNER',
                            'conditions' => array("Property.id=Detail.propertie_id")
                        )),
                    'order' => array('Property.created DESC'),
                    'limit' => 6
        )));
        $this->set('featureds', $this->Property->find('all', array(
                    'fields' => array('`Property`.*, `Detail`.*'),
                    'conditions' => array('`Property`.`status` = 1 and `Property`.`featured` = 1'),
                    'joins' => array(array(
                            'alias' => 'Detail',
                            'table' => 'details',
                            'type' => 'INNER',
                            'conditions' => array("Property.id=Detail.propertie_id")
                        )),
                    'order' => array('Property.created DESC'),
                    'limit' => 6
        )));
    }

    public function details() {
        
    }

    public function agent_details() {
        
    }

    public function agents() {
        
    }

    public function listings() {
        
    }

    public function contact_us() {
        
    }

}
