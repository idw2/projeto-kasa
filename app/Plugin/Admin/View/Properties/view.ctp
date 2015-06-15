<div class="properties view">
    <h2><?php echo __('Property'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($property['Property']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($property['Property']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($property['Property']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($property['Property']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($property['Property']['description']); ?>
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
