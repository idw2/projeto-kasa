<?php

App::uses('AppModel', 'Model');

/**
 * Property Model
 *
 */
class Property extends AppModel {

    var $name = 'Property';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'description' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'photo' => array(
            'maxSize' => array(
                'rule' => array('attachmentMaxSize', 1048576),
                'message' => 'Imagem não pode ser maior do que 1MB'
            ),
            'minSize' => array(
                'rule' => array('attachmentMinSize', 1024),
                'message' => 'Imagem não pode ser menor do que 1KB'
            )
        )
    );
    
    var $actsAs = array(
        'UploadPack.Upload' => array(
            'photo' => array(
                'styles' => array(
                    'big' => '770x481',
                    'small' => '370x270',
                    'thumb' => '124x76'
                ),
                'path' => ':webroot/files/:model/:id/:basename_:style.:extension',
                'alpha' => true,
                'quality' => 95,
                'default_url' => '/img/photo_default.png'
            )
        )
    );
    
//    public $hasOne = array(
//        'Detail' => array(
//            'className' => 'Detail',
//            'foreignKey' => 'propertie_id',
//            'conditions' => '',
//            'fields' => '',
//            'order' => ''
//        )
//    );

}
