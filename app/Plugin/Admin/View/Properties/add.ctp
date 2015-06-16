<div class="col-sm-12 col-lg-6">
    <?php echo $this->Form->create('Property', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    ))); ?>
    <fieldset>
        <legend><?php echo __('Add Property'); ?></legend>
        <?php
        echo $this->Form->input('Property.photo', array('type' => 'file'));
        echo $this->Form->input('name', array('class' => 'form-control'));
        echo $this->Form->input('description', array('class' => 'ckeditor'));
        ?>
    </fieldset>
   <?php echo $this->element("Admin.btn_submit"); ?>
</div>
