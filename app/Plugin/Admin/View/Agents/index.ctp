<div class="col col-sm-12">

    <?php echo $this->element("Admin.language"); ?>
    <div>
        <?php echo $this->Html->link(__('New Agent'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>     
    </div>

    <br/>
    <div class='table-responsive'>
        <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('language'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                    <th><?php echo $this->Paginator->sort('phone'); ?></th>
                    <th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
                    <th><?php echo $this->Paginator->sort('fax'); ?></th>
                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($agents as $agent):

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
                        <td><?php echo $this->Upload->uploadImage($agent['Agent'], 'Agent.photo', array('style' => 'thumb'), array('class' => 'img-thumbnail')); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($agent['Agent']['created'])); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($agent['Agent']['modified'])); ?>&nbsp;</td>
                        <td><?php echo h($agent['Agent']['language']); ?>&nbsp;</td>
                        <td><?php echo h($agent['Agent']['name']); ?>&nbsp;</td>
                        <td><?php echo h($agent['Agent']['email']); ?>&nbsp;</td>
                        <td><?php echo h($agent['Agent']['phone']); ?>&nbsp;</td>
                        <td><?php echo h($agent['Agent']['cell_phone']); ?>&nbsp;</td>
                        <td><?php echo h($agent['Agent']['fax']); ?>&nbsp;</td>
                        <td  class="text-center">
                            <?php if ($agent['Agent']['status']): ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-check"></i>'), array('action' => 'status', $agent['Agent']['id'], 0), array('class' => 'btn btn-xs btn-success', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja despublicar agente imóvel "%s"?', $agent['Agent']['name'])); ?>
                            <?php else: ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-times"></i>'), array('action' => 'status', $agent['Agent']['id'], 1), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja publicar este agente "%s"?', $agent['Agent']['name'])); ?>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $agent['Agent']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $agent['Agent']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $agent['Agent']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?>
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
