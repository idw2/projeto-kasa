<div class="col-sm-12 col-lg-6">
    <?php echo $this->Form->create('Structure', array('inputDefaults' => array(
            'div' => array('class' => 'form-group')
    ))); ?>
    <?php
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('facebook', array('placeholder' => 'Facebook', 'class' => 'form-control'));
    echo $this->Form->input('google_plus', array('placeholder' => 'Google Plus', 'class' => 'form-control'));
    echo $this->Form->input('twitter', array('placeholder' => 'Twitter', 'class' => 'form-control'));
    echo $this->Form->input('pinterest', array('placeholder' => 'Pinterest', 'class' => 'form-control'));
    echo $this->Form->input('dribbble', array('placeholder' => 'Dribbble', 'class' => 'form-control'));
    echo $this->Form->input('linkedin', array('placeholder' => 'Linkedin', 'class' => 'form-control'));
    echo $this->Form->input('email', array('label' => 'E-mail', 'placeholder' => 'E-mail', 'class' => 'form-control'));
    echo $this->Form->input('phone', array('placeholder' => 'Phone', 'class' => 'form-control'));
    echo $this->Form->input('fax', array('placeholder' => 'Fax', 'class' => 'form-control'));
    ?>
    <br>
    <?php echo $this->element("Admin.btn_submit"); ?>
</div>
