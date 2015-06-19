<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Project $Project
 * @property Project $Project
 */
class User extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('userName_validate'),
                'message' => '* Nome informado é inválido!',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'notEmpty' => array(
                'rule' => array('isUnique', 'userEmail_validate'),
                'message' => '* E-mail informado já existe ou é inválido!',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'username' => array(
            'rule1' => array(
                'rule' => array('isUnique'),
                'message' => '* Username já está cadastrado!',
            //'last' => false
            ),
            'rule2' => array(
                'rule' => array('minLength', 6),
                'message' => '* Mínimo de 6 caracteres!'
            ),
            'rule3' => array(
                'rule' => array('maxLength', 16),
                'message' => '* Máximo de 16 caracteres!'
            ),
            'rule4' => array(
                'rule' => array('userUsername_validate'),
                'message' => '* Login deve possuir letras seguido de números, mínimo 6 e máximo 16 caracteres sem espaços!'
            )
        ),
//        'birth_dt' => array(
//            'rule' => array('notEmpty'),
////            'rule' => array('date', 'dmy'),
//            'message' => '* Data de nascimento inválida!'
//        ),
        'lembrete_pergunta' => array(
            'rule' => array('notEmpty'),
//            'rule' => array('date', 'dmy'),
            'message' => '* Selecione uma pergunta para recuperar sua senha!'
        ),
        'lembrete_resposta' => array(
            'rule' => array('notEmpty'),
//            'rule' => array('date', 'dmy'),
            'message' => '* Informe a resposta da pergunta!'
        ),
        'password' => array(
//            'rule1' => array(
//                'role' => array('notEmpty'),
//                'message' => '* Senha requerida!',
////                'last' => false
//            ),
//            'rule2' => array(
//                'rule' => array('userConfirm_password_validate'),
//                'message' => '* As senha digitadas são diferentes',
//            )
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => '* Senha requerida!',
//                'allowEmpty' => false,
//                'required' => false,
//                'last' => false, // Stop validation after this rule
//                'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'confirm_password' => array(
            'notEmpty' => array(
                'rule' => array('userConfirm_password_validate'),
                'message' => '* As senha digitadas são diferentes',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'cpf' => array(
            'notEmpty' => array(
                'rule' => array('isUnique'),
                'message' => 'Your custom message here - CPF',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    public function beforeSave($options = array()) {

        /* password hashing */
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}
