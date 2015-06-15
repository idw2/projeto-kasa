<div class="agents view">
    <h2><?php echo __('Agent'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Photo File Name'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['photo_file_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Phone'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['phone']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cell Phone'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['cell_phone']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Fax'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['fax']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo $agent['Agent']['description']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Google Plus'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['google_plus']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Facebook'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['facebook']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Twitter'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['twitter']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Instagram'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['instagram']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($agent['Agent']['status']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
