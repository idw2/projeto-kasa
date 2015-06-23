<div class="col-sm-12 col-lg-6">
    <?php
    echo $this->Form->create('Property', array('type' => 'file', 'inputDefaults' => array(
            'div' => array('class' => 'form-group')
    )));
    ?>
    <fieldset>
        <legend><?php echo __('Add Property'); ?></legend>
        <?php
        echo $this->Form->input('Property.photo', array('type' => 'file'));
        echo $this->Form->input('name', array('class' => 'form-control'));

        echo $this->Form->input('type', array('type' => 'select',
            'class' => 'form-control',
            'placeholder' => "Type",
            'empty' => "(choose type properties)",
            'options' => array(
                'Apartment' => 'Apartment',
                'House' => 'House'
            ),
            'required'
        ));

        $options = array();
        foreach ($agents as $agent) {
            $options[$agent['Agent']['id']] = $agent['Agent']['name'];
        }

        echo $this->Form->input('agent_id', array('type' => 'select',
            'class' => 'form-control',
            'placeholder' => "Agents",
            'empty' => "(choose agents)",
            'options' => $options,
            'required'
        ));

        echo $this->Form->input('description', array('class' => 'ckeditor'));
        echo $this->Form->input('status', array('type' => 'hidden', 'value' => 1));
        echo $this->Form->input('language', array('type' => 'hidden', 'value' => $this->Session->read('Config.language')));
        echo $this->Form->input('url', array('type' => 'hidden'));
        ?>
    </fieldset>
    <?php echo $this->element("Admin.btn_submit"); ?>
</div>
