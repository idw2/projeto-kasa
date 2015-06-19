<div class="col-sm-12 col-lg-6">
    <?php
    echo $this->Form->create('Agent', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    )));

    echo $this->Form->input('Agent.photo', array('type' => 'file'));
    echo $this->Form->input('name', array('class' => 'form-control'));
    echo $this->Form->input('email', array('class' => 'form-control'));
    echo $this->Form->input('phone', array('class' => 'form-control'));
    echo $this->Form->input('cell_phone', array('class' => 'form-control'));
    echo $this->Form->input('fax', array('class' => 'form-control'));
    echo $this->Form->input('description', array('class' => 'ckeditor', array('class' => 'form-control', 'label' => 'Description')));
    echo $this->Form->input('google_plus', array('class' => 'form-control'));
    echo $this->Form->input('facebook', array('class' => 'form-control'));
    echo $this->Form->input('twitter', array('class' => 'form-control'));
    echo $this->Form->input('instagram', array('class' => 'form-control'));
    echo $this->Form->input('status', array('type' => 'hidden', 'value' => 1));
    echo $this->Form->input('url', array('type' => 'hidden'));
    ?>
    <?php echo $this->element("Admin.btn_submit"); ?>
</div>
