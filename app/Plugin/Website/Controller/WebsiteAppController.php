<?php

App::uses('AppController', 'Controller');

class WebsiteAppController extends AppController {

    public function beforeFilter() {
        $this->layout = "Website.website";
    }
}
