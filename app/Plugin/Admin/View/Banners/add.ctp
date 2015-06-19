<div class="col-sm-12 col-lg-6">
    <?php
    echo $this->Form->create('Banner', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    )));
    ?>
    <?php
    echo $this->Form->input('Banner.photo', array('type' => 'file'));
    echo $this->Form->input('status', array('type' => 'hidden', 'value' => 0));

    $options = array();
    foreach ($properties as $propertie) {
        $options[$propertie['Property']['id']] = $propertie['Property']['name'];
    }
    
    echo $this->Form->input('description', array('class' => 'ckeditor'));
    
    echo $this->Form->input('propertie_id', array('type' => 'select',
        'class' => 'form-control',
        'placeholder' => "Properties",
        'empty' => "(choose properties)",
        'options' => $options,
        'required'
    ));
    ?>
    <?php echo $this->element("Admin.btn_submit"); ?>
</div>