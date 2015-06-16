<div class="col-sm-12 col-lg-6">
    <?php
    echo $this->Form->create('Banner', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group'),
            'label' => false
    )));
    ?>
    <?php
    echo $this->Form->input('id');
    echo $this->Upload->uploadImage($this->request->data['Banner'], 'Banner.photo', array('style' => 'medium'), array('class' => 'img-thumbnail'));
    ?>
    <br/>
    <br/>
    <?php
    echo $this->Form->input('Banner.photo', array('type' => 'file'));
    echo $this->Form->input('status', array('type' => 'hidden'));
    ?>
    <?php echo $this->element("Admin.btn_submit"); ?>
</div>
