<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class WebpagesController extends WebsiteAppController {

    var $name = 'Webpages';
    var $uses = array('Property', 'Banner', 'Agent', 'Photo', 'Structure', 'Location');
    var $helpers = array('Lib');
    public $components = array('Session', 'Paginator');

    public function index() {
        $this->set('banners', $this->Banner->find('all', array('conditions' => array("`Banner`.`status` = 1 and `Banner`.`language` = '{$this->Session->read('Config.language')}'"),
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
                    'conditions' => array("`Property`.`status` = 1 and `Property`.`language` = '{$this->Session->read('Config.language')}'"),
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
                    'conditions' => array("`Property`.`status` = 1 and `Property`.`featured` = 1 and `Property`.`language` = '{$this->Session->read('Config.language')}'"),
                    'joins' => array(array(
                            'alias' => 'Detail',
                            'table' => 'details',
                            'type' => 'INNER',
                            'conditions' => array("Property.id=Detail.propertie_id")
                        )),
                    'order' => array('Property.created DESC'),
                    'limit' => 6
        )));

        $this->set('agents', $this->Agent->find('all', array('conditions' => array("`Agent`.`status` = 1 and `Agent`.`language` = '{$this->Session->read('Config.language')}'"))));
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

        $conditions = array("`Property`.`status` = 1 and `Property`.`language` = '{$this->Session->read('Config.language')}'");

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
                $type = "and `Property`.`type` = '{$type}' ";
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
                . "");

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
            'limit' => 21
        );

        $this->set('recents', $this->Paginator->paginate());
    }

    public function contact_us() {

        if ($this->request->is('post')) {

            $name = $this->request->data['Email']['name'];
            $email = $this->request->data['Email']['email'];
            $website = $this->request->data['Email']['website'];
            $description = $this->request->data['Email']['description'];

            if ($name != "" && $email != "" && $description != "") {

                $vars = array('name' => $name, 'email' => $email, 'website' => $website, 'description' => $description);

                $Email = new CakeEmail('smtp');
                $Email->viewVars($vars);
                $Email->template('Website.contact_us')
                        ->emailFormat('html')
                        ->to('gus@designlab.com.br')
                        ->subject('Contact us')
                        ->send();

                $this->Session->setFlash(__('* Sua mensagem foi enviada com sucesso!'));
                $this->redirect(array('action' => 'contact_us'));
            } else {
                $this->Session->setFlash(__('* Name, e-mail and description required!'));
            }
        }
    }

    public function newsletter() {

        if ($this->request->is('post')) {

            $email = $this->request->data['email'];

            if ($email == "") {
                $this->Session->setFlash(__('* E-mail required!'));
                $this->Session->write('erro_newsletter', true);
                $this->redirect($this->referer());
            } else {

                $vars = array('email' => $email);

                $Email = new CakeEmail('smtp');
                $Email->viewVars($vars);
                $Email->template('Website.newsletter')
                        ->emailFormat('html')
                        ->to('gus@designlab.com.br')
                        ->subject('Newsletter')
                        ->send();

                $this->Session->setFlash(__('* Newsletter cadastrada com sucesso!'));
                $this->redirect($this->referer());
            }
        } else {
            $this->redirect($this->referer());
        }
    }

    public function comments() {

        if ($this->request->is('post')) {

//            debugger::dump($this->request->data);
//            die();

            $author = $this->request->data['author'];
            $email = $this->request->data['email'];
            $property_name = $this->request->data['property_name'];
            $comment = $this->request->data['comment'];

            if ($author == "" || $email == "" || $property_name == "" || $comment == "") {
                $this->Session->setFlash(__('* all fields required!'));
                $this->Session->write('erro_comments', true);
                $this->redirect($this->referer());
            } else {

                $vars = array('author' => $author, 'email' => $email, 'property_name' => $property_name, 'comment' => $comment);

                $Email = new CakeEmail('smtp');
                $Email->viewVars($vars);
                $Email->template('Website.comments')
                        ->emailFormat('html')
                        ->to('gus@designlab.com.br')
                        ->subject('Comments')
                        ->send();

                $this->Session->setFlash(__('* Comments send success!'));
                $this->redirect($this->referer());
            }
        } else {
            $this->redirect($this->referer());
        }
    }

    function beforeFilter() {
        parent::beforeFilter();
        $this->set('structure', $this->Structure->find('first', array('conditions' => array("`Structure`.`status` = 1 and `Structure`.`language` = '{$this->Session->read('Config.language')}'"))));
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

    function updateLanguage($language) {
        $this->layout = "ajax";
        $this->autoRender = FALSE;
        Configure::write('Config.language', $language);
        $this->Session->write('Config.language', $language);
        return false;
    }

}
