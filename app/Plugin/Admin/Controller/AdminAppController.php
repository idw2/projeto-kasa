<?php

App::uses('AppController', 'Controller');

class AdminAppController extends AppController {

    function beforeFilter() {
        $this->layout = "admin";

        $this->set('page', 'List Properties');
        $this->set('desc', 'apenas teste');

        if ($this->request->params['controller'] == "properties") {
            switch ($this->action) {
                case "index":
                    $this->set('page', 'Properties');
                    $this->set('desc', 'List');
                    $this->set('fortawesome', 'fa fa-university');
                    break;
                case "add":
                    $this->set('page', 'Properties');
                    $this->set('desc', 'Add');
                    $this->set('fortawesome', 'fa fa-university');
                    break;
                case "view":
                    $this->set('page', 'Properties');
                    $this->set('desc', 'View');
                    $this->set('fortawesome', 'fa fa-university');
                    break;
                case "details":
                    $this->set('page', 'Properties');
                    $this->set('desc', 'Details');
                    $this->set('fortawesome', 'fa fa-university');
                    break;
                case "locations":
                    $this->set('page', 'Properties');
                    $this->set('desc', 'Locations');
                    $this->set('fortawesome', 'fa fa-university');
                    break;
                case "photos":
                    $this->set('page', 'Properties');
                    $this->set('desc', 'Photos');
                    $this->set('fortawesome', 'fa fa-university');
                    break;
                default:
                    break;
            }
        } else if ($this->request->params['controller'] == "banners") {
            switch ($this->action) {
                case "index":
                    $this->set('page', 'Banners');
                    $this->set('desc', 'List');
                    $this->set('fortawesome', 'fa fa-th-large');
                    break;
                case "add":
                    $this->set('page', 'Banners');
                    $this->set('desc', 'Add');
                    $this->set('fortawesome', 'fa fa-th-large');
                    break;
                case "edit":
                    $this->set('page', 'Banners');
                    $this->set('desc', 'Edit');
                    $this->set('fortawesome', 'fa fa-th-large');
                    break;
                case "view":
                    $this->set('page', 'Banners');
                    $this->set('desc', 'View');
                    $this->set('fortawesome', 'fa fa-th-large');
                    break;
                default:
                    break;
            }
        } else if ($this->request->params['controller'] == "agents") {
            switch ($this->action) {
                case "index":
                    $this->set('page', 'Agents');
                    $this->set('desc', 'List');
                    $this->set('fortawesome', 'fa fa-user');
                    break;
                case "add":
                    $this->set('page', 'Agents');
                    $this->set('desc', 'Add');
                    $this->set('fortawesome', 'fa fa-user');
                    break;
                case "edit":
                    $this->set('page', 'Agents');
                    $this->set('desc', 'Edit');
                    $this->set('fortawesome', 'fa fa-user');
                    break;
                case "view":
                    $this->set('page', 'Agents');
                    $this->set('desc', 'View');
                    $this->set('fortawesome', 'fa fa-user');
                    break;
                default:
                    break;
            }
        }
    }

}
