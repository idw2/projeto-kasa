<div class="col-sm-12 col-lg-6">
    
<div class="panel panel-default">
 <div class="panel-heading"> <h3 class="panel-title"><?php echo __('Property'); ?> </h3> </div>
  <div class="panel-body">
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($property['Property']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo $this->Lib->date_format(h($property['Property']['created'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo $this->Lib->date_format(h($property['Property']['modified'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($property['Property']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo $property['Property']['description']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Photo File Name'); ?></dt>
        <dd>
            <?php echo h($property['Property']['photo_file_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($property['Property']['status']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
</div>
