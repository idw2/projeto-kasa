<div class="details col-sm-12 col-lg-6">
    <?php echo $this->Form->create('Detail', array('inputDefaults' => array(
            'div' => array('class' => 'form-group')
    ))); ?>
    <fieldset>
        <legend><?php echo __('Edit Detail'); ?></legend>
        <?php
        echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));
        echo $this->Form->input('propertie_id', array('type' => 'hidden', 'value' => $propertie_id));
        echo $this->Form->input('price', array('class' => 'form-control'));
        echo $this->Form->input('area', array('class' => 'form-control'));
        echo $this->Form->input('bedrooms', array('class' => 'form-control'));
        echo $this->Form->input('bathrooms', array('class' => 'form-control'));
        echo $this->Form->input('garages', array('class' => 'form-control'));
        ?>
    </fieldset>
       <?php echo $this->element("Admin.btn_submit"); ?>
</div>
