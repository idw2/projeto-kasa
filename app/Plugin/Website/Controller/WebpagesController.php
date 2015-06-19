<?php

App::uses('AppController', 'Controller');

class WebpagesController extends WebsiteAppController {

    var $name = 'Webpages';
    var $uses = array('Banner', 'Property', 'Agent', 'Photo', 'Structure');
    var $helpers = array('Lib');
    public $components = array('Session', 'Paginator');

    public function index() {
        $this->set('banners', $this->Banner->find('all', array('conditions' => array('`Banner`.`status` = 1'),
                    'fields' => array('`Banner`.*, `Property`.*, `Detail`.*'),
                    'joins' => array(array(
                            'alias' => 'Detail',
                            'table' => 'details',
                            'type' => 'INNER',
                            'conditions' => array("Banner.propertie_id=Detail.propertie_id")
                        ), array(
                            'alias' => 'Property',
                            'table' => 'properties',
                            'type' => 'INNER',
                            'conditions' => array("Property.id=Detail.propertie_id")
                        ))
        )));




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

        $this->set('agents', $this->Agent->find('all', array('conditions' => array('`Agent`.`status` = 1'))));
    }

    public function details($url) {

        $property = $this->Property->find('first', array(
            'fields' => array('`Property`.*, `Detail`.*, `Agent`.*'),
            'conditions' => array("`Property`.`status` = 1 and `Property`.`url` = '{$url}' "),
            'joins' => array(array(
                    'alias' => 'Detail',
                    'table' => 'details',
                    'type' => 'INNER',
                    'conditions' => array("Property.id=Detail.propertie_id")
                ), array(
                    'alias' => 'Agent',
                    'table' => 'agents',
                    'type' => 'INNER',
                    'conditions' => array("Agent.id=Property.agent_id")
                )),
            'order' => array('Property.created DESC'),
            'limit' => 6
        ));

//                    debugger::dump(); die();


        $photos = $this->Photo->find('all', array(
            'conditions' => array("`Photo`.`propertie_id` = '{$property['Property']['id']}'"),
            'order' => array("(`Photo`.`position`+0) ASC")
        ));

        $this->set('property', $property);
        $this->set('photos', $photos);
    }

    public function agent_details($url) {

        $agent = $this->Agent->find('first', array('conditions' => array("`Agent`.`url` = '{$url}'")));
        $this->set('agent', $agent);
    }

    public function agents() {
        
    }

    public function listings() {
        
    }

    public function contact_us() {
        
    }
    
    function beforeFilter() {
        parent::beforeFilter();
        $this->set('structure', $this->Structure->find('first', array('conditions' => array('`Structure`.`status` = 1'))));
    }

}
