<?php

App::uses('AppModel', 'Model');

/**
 * Banner Model
 *
 * @property Propertie $Propertie
 */
class Banner extends AppModel {

    var $name = 'Banner';
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
                    'big' => '1920x638',
                    'medium' => '960x319',
                    'small' => '1920x240',
                    'thumb' => '192x63'
                ),
                'path' => ':webroot/files/:model/:id/:basename_:style.:extension',
                'alpha' => true,
                'quality' => 95,
                'default_url' => '/img/photo_default.png'
            )
        )
    );

}
