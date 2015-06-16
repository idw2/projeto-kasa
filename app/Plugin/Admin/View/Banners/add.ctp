<div class="col-sm-12 col-lg-6">
    <?php
    echo $this->Form->create('Banner', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    )));
    ?>
    <?php
    echo $this->Form->input('Banner.photo', array('type' => 'file'));
    echo $this->Form->input('status', array('type' => 'hidden', 'value' => 0));
    ?>
    <?php echo $this->element("Admin.btn_submit"); ?>
</div>