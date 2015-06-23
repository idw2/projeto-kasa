<?php

App::uses('AppController', 'Controller');

class WebsiteAppController extends AppController {

    public function beforeFilter() {
        $this->layout = "Website.website";

        if ($this->Session->check('Config.language')) {
            Configure::write('Config.language', $this->Session->read('Config.language'));
        } else {
            Configure::write('Config.language', "por");
            $this->Session->write('Config.language', "por");
        }

//        debugger::dump($this->Session->read('Config.language'));
//        debugger::dump(Configure::read('Config.language'));
    
    }

}
