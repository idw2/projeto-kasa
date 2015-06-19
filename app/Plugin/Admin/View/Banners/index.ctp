<div class="col col-sm-12 col-md-12 col-lg-12">
    <div>
        <?php echo $this->Html->link(__('New Banner'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
    </div>


    <?php
    echo $this->Form->create('Banner', array('controller' => 'banners', 'action' => 'positions', 'inputDefaults' => array(
            'div' => array('class' => 'form-group'),
            'label' => false
    )));
    ?>
    <br/>
    <div class='table-responsive'>
        <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('photo_file_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                    <th><?php echo $this->Paginator->sort('position'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 0;
                foreach ($banners as $banner):
                    switch ($i) {
                        case 1:
                            $class = "success";
                            break;
                        case 2:
                            $class = "warning";
                            break;
                        case 3:
                            $class = "danger";
                            break;
                        default:
                            $class = "active";
                            break;
                    }
                    ?>
                    <tr>
                        <td><?php echo $this->Upload->uploadImage($banner['Banner'], 'Banner.photo', array('style' => 'thumb'), array('class' => 'img-thumbnail')); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($banner['Banner']['created'])); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($banner['Banner']['modified'])); ?>&nbsp;</td>
                        <td><?php echo h($banner['Banner']['photo_file_name']); ?>&nbsp;</td>
                        <td  class="text-center">
                            <?php if ($banner['Banner']['status']): ?>
                                <?php echo $this->Html->link(__('<i class="fa fa-check"></i>'), array('action' => 'status', $banner['Banner']['id'], 0), array('class' => 'btn btn-xs btn-success', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            
                            <?php else: ?>
                                <?php echo $this->Html->link(__('<i class="fa fa-times"></i>'), array('action' => 'status', $banner['Banner']['id'], 1), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Form->input('id', array('name' => 'data[Banner][id][]', 'type' => 'hidden', 'value' => $banner['Banner']['id']));
                            echo $this->Form->input('position', array('name' => 'data[Banner][position][]', 'type' => 'text', 'label' => false, 'value' => $banner['Banner']['position'], 'class' => 'form-control'));
                            ?>
                        </td>
                        <td class="text-center">
                            <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $banner['Banner']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $banner['Banner']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $banner['Banner']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Are you sure you want to delete # %s?', $banner['Banner']['id'])); ?>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    if ($i == 3) {
                        $i = 0;
                    }
                    ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element("Admin.btn_submit"); ?>
    <br/>
    <br/>
    <?php echo $this->element("Admin.paginator"); ?>
</div>
