<?php

App::uses('AppModel', 'Model');

class Photo extends AppModel {
    
    var $name = 'Photo';
   
    public $validate = array(
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

}
