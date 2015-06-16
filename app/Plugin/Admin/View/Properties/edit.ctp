<div class="col-sm-12 col-lg-6">
    <?php echo $this->Form->create('Property', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    )));
    ?>
   
    <fieldset>
        <legend><?php echo __('Edit Property'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Upload->uploadImage($this->request->data['Property'], 'Property.photo', array('style' => 'small'));
        echo $this->Form->input('Property.photo', array('type' => 'file'));
        echo $this->Form->input('name', array('class' => 'form-control'));
        echo $this->Form->input('description', array('class' => 'ckeditor'));
        echo $this->Form->input('status', array('type' => 'hidden'));
        ?>
    </fieldset>
      <?php echo $this->element("Admin.btn_submit"); ?>
</div>
