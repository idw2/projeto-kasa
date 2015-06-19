<?php

/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    public function userName_validate() {
        if (!preg_match("/^([\'\\áÁ\\àÀ\\ãÃ\\âÂ\\éÉ\\èÈ\\êÊ\\íÍ\\ìÌ\\óÓ\\òÒ\\õÕ\\ôÔ\\úÚ\\ùÙ\\çÇaA-zZ]+)+((\s[\'\\áÁ\\àÀ\\ãÃ\\âÂ\\éÉ\\èÈ\\êÊ\\íÍ\\ìÌ\\óÓ\\òÒ\\õÕ\\ôÔ\\úÚ\\ùÙ\\çÇaA-zZ]+)+)?$/", $this->data['User']['name'])) {
            return false;
        } else {
            return true;
        }
    }

    public function userUsername_validate() {

        #debugger::dump(preg_match("/([a-z_]+[0-9])\w+/", $this->data['User']['username']));
        //if (!preg_match("/^[a-z0-9_-]{3,15}$/", $this->data['User']['username'])) {
        if (preg_match("/([a-z_]+[0-9])\w+/", $this->data['User']['username'])) {


            if (substr_count($this->data['User']['username'], ' ')) {
                return false;
            } else {
                if (is_numeric($this->data['User']['username'])) {
                    return false;
                } else {
                    return true;
                }
            }
        } else {

            #debugger::dump('teste');
//            return false;
            if (is_numeric($this->data['User']['username'])) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function userEmail_validate() {
        if (!preg_match("/^([\'\.\^\~\´\`\\áÁ\\àÀ\\ãÃ\\âÂ\\éÉ\\èÈ\\êÊ\\íÍ\\ìÌ\\óÓ\\òÒ\\õÕ\\ôÔ\\úÚ\\ùÙ\\çÇaA-zZ]+)+((\s[\'\.\^\~\´\`\\áÁ\\àÀ\\ãÃ\\âÂ\\éÉ\\èÈ\\êÊ\\íÍ\\ìÌ\\óÓ\\òÒ\\õÕ\\ôÔ\\úÚ\\ùÙ\\çÇaA-zZ]+)+)?$/", $this->data['User']['name'])) {
            return false;
        } else {
            return true;
        }
    }

    public function userConfirm_password_validate() {
//        debugger::dump($this->data['User']['password']);
//        debugger::dump($this->data['User']['confirm_password']);
//        die();
        if ($this->data['User']['password'] != $this->data['User']['confirm_password']) {
            return false;
        } else {
            return true;
        }
    }

}
