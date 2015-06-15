<?php
App::uses('AppModel', 'Model');
/**
 * Agent Model
 *
 */
class Agent extends AppModel {

    var $name = 'Agent';
   
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
                    'big' => '370x351',
                    'small' => '278x263',
                    'thumb' => '124x96'
                ),
                'path' => ':webroot/files/:model/:id/:basename_:style.:extension',
                'alpha' => true,
                'quality' => 95,
                'default_url' => '/img/photo_default.png'
            )
        )
    );
    
}
