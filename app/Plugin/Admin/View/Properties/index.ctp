<div class="col col-sm-12 col-md-12 col-lg-12">
    <div>
        <?php echo $this->Html->link(__('New property'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
    </div>
    <br/>
    <div class='table-responsive'>
        <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('type'); ?></th>
                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                    <th><?php echo $this->Paginator->sort('featured'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($properties as $property):
//                    switch ($i) {
//                        case 1:
//                            $class = "success";
//                            break;
//                        case 2:
//                            $class = "warning";
//                            break;
//                        case 3:
//                            $class = "danger";
//                            break;
//                        default:
//                            $class = "active";
//                            break;
//                    }
                    ?>

                    <tr>
                        <td><?php echo $this->Upload->uploadImage($property['Property'], 'Property.photo', array('style' => 'thumb'), array('class' => 'img-thumbnail')); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($property['Property']['created'])); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($property['Property']['modified'])); ?>&nbsp;</td>
                        <td><?php echo h($property['Property']['name']); ?>&nbsp;</td>
                        <td><?php echo h($property['Property']['type']); ?>&nbsp;</td>
                        <td class="text-center">
                            <?php if ($property['Property']['status']): ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-check"></i>'), array('action' => 'status', $property['Property']['id'], 0), array('class' => 'btn btn-xs btn-success', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja despublicar este imóvel "%s"?', $property['Property']['name'])); ?>
                            <?php else: ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-times"></i>'), array('action' => 'status', $property['Property']['id'], 1), array('class' => 'btn btn-xs btn-default','escape' => false, 'style' => 'font-size: 20px; width: 33px;'),  __('Deseja publicar este imóvel "%s"?', $property['Property']['name'])); ?>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php if ($property['Property']['featured']): ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-check"></i>'), array('action' => 'featured', $property['Property']['id'], 0), array('class' => 'btn btn-xs btn-success', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja tirar destaque este imóvel "%s"?', $property['Property']['name'])); ?>
                            <?php else: ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-times"></i>'), array('action' => 'featured', $property['Property']['id'], 1), array('class' => 'btn btn-xs btn-default','escape' => false, 'style' => 'font-size: 20px; width: 33px;'),  __('Deseja destacar este imóvel "%s"?', $property['Property']['name'])); ?>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $this->Html->link(__('<i class="fa fa-info"></i>'), array('action' => 'details', $property['Property']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-map-marker"></i>'), array('action' => 'locations', $property['Property']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-camera"></i>'), array('action' => 'photos', $property['Property']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $property['Property']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $property['Property']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $property['Property']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Are you sure you want to delete # %s?', $property['Property']['name'])); ?>
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
    <?php echo $this->element("Admin.paginator"); ?>
</div>
