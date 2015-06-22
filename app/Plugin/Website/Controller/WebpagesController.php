<?php

App::uses('AppController', 'Controller');

class WebpagesController extends WebsiteAppController {

    var $name = 'Webpages';
    var $uses = array('Property', 'Banner', 'Agent', 'Photo', 'Structure', 'Location');
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
            'fields' => array('`Property`.*, `Detail`.*, `Agent`.*, `Location`.*'),
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
                ), array(
                    'alias' => 'Location',
                    'table' => 'locations',
                    'type' => 'INNER',
                    'conditions' => array("Property.id=Location.propertie_id")
                )),
            'order' => array('Property.created DESC')
        ));

//                    debugger::dump(); die();


        $photos = $this->Photo->find('all', array(
            'conditions' => array("`Photo`.`propertie_id` = '{$property['Property']['id']}'"),
            'order' => array("(`Photo`.`position`+0) ASC")
        ));

        $this->set('property', $property);
        $this->set('photos', $photos);
        
        
        $listings = $property = $this->Property->find('all', array(
            'fields' => array('`Property`.*, `Detail`.*, `Agent`.*, `Location`.*'),
            'conditions' => array("`Property`.`status` = 1"),
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
                ), array(
                    'alias' => 'Location',
                    'table' => 'locations',
                    'type' => 'INNER',
                    'conditions' => array("Property.id=Location.propertie_id")
                )),
            'limit' => 3,
            'order' => array('ROUND(Property.created)')
        ));
            
        $this->set('listings', $listings);    
    }

    public function agent_details($url) {

        $agent = $this->Agent->find('first', array('conditions' => array("`Agent`.`url` = '{$url}'")));
        $this->set('agent', $agent);
    }

    public function agents() {
        
    }

    public function listings() {

        $this->Property->recursive = 0;

        $conditions = array('`Property`.`status` = 1');

        $type = "";
        $city = "";
        $bathrooms = "";
        $bedrooms = "";
        $minprice = "";
        $maxprice = "";


        if ($this->request->is('post')) {

            $price = "";

            $type = $this->request->data['var_ptype'];

            if ($type != "") {
                $type = "and (`Property`.`type` = '{$type}' ";
            }

            $city = $this->request->data['var_location'];

            if ($city != "") {
                $city = "and `Location`.`city` = '{$city}' ";
            }

            $bathrooms = $this->request->data['bathrooms'];

            if ($bathrooms != "") {
                $bathrooms = "and `Detail`.`bathrooms` = '{$bathrooms}' ";
            }

            $bedrooms = $this->request->data['bedrooms'];

            if ($bedrooms != "") {
                $bedrooms = "and `Detail`.`bedrooms` = '{$bedrooms}' ";
            }

            $minprice = $this->request->data['minprice'];
            $maxprice = $this->request->data['maxprice'];

            if ($minprice != "" && $maxprice != "") {
                $price = "and `Detail`.`price` BETWEEN '{$minprice}' and '{$maxprice}' ";
            }

            $conditions = array("`Property`.`status` = 1 "
                . "{$type}"
                . "{$city}"
                . "{$bathrooms}"
                . "{$bedrooms}"
                . "{$price}"
                . ")");

            $type = $this->request->data['var_ptype'];
            $city = $this->request->data['var_location'];
            $bathrooms = $this->request->data['bathrooms'];
            $bedrooms = $this->request->data['bedrooms'];
            $minprice = $this->request->data['minprice'];
            $maxprice = $this->request->data['maxprice'];
        }

        $this->set('var_ptype', $type);
        $this->set('var_location', $city);
        $this->set('bathrooms', $bathrooms);
        $this->set('bedrooms', $bedrooms);
        $this->set('minprice', $minprice);
        $this->set('maxprice', $maxprice);

        $this->paginate = array(
            'fields' => array('`Property`.*, `Detail`.*'),
            'conditions' => $conditions,
            'joins' => array(
                array(
                    'alias' => 'Detail',
                    'table' => 'details',
                    'type' => 'INNER',
                    'conditions' => array("Property.id=Detail.propertie_id")
                ),
                array(
                    'alias' => 'Location',
                    'table' => 'locations',
                    'type' => 'INNER',
                    'conditions' => array("Property.id=Location.propertie_id")
                )
            ),
            'order' => array('Property.created DESC'),
            'limit' => 1
        );

        $this->set('recents', $this->Paginator->paginate());
    }

    public function contact_us() {
        
    }

    function beforeFilter() {
        parent::beforeFilter();
        $this->set('structure', $this->Structure->find('first', array('conditions' => array('`Structure`.`status` = 1'))));
        $this->set('locations', $this->Location->find("all", array(
                    'conditions' => array("`Location`.`city` != ''"),
                    'fields' => array('`Location`.`city`'),
                    'group' => array('`Location`.`city`')
                        )
        ));


        $type = "";
        $city = "";
        $bathrooms = "";
        $bedrooms = "";
        $minprice = "";
        $maxprice = "";

        $this->set('var_ptype', $type);
        $this->set('var_location', $city);
        $this->set('bathrooms', $bathrooms);
        $this->set('bedrooms', $bedrooms);
        $this->set('minprice', $minprice);
        $this->set('maxprice', $maxprice);
    }

}
