<div class="col col-sm-12 col-md-12 col-lg-12">

    <div>
        <?php echo $this->Html->link(__('New Structure'), array('action' => 'add'), array('class' => 'btn btn-default')); ?>
    </div>
    <br/>
    <div class='table-responsive'>
        <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                    <th><?php echo $this->Paginator->sort('phone'); ?></th>
                    <th><?php echo $this->Paginator->sort('fax'); ?></th>
                    <th><?php echo $this->Paginator->sort('Status'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($structures as $structure): ?>
                    <tr>
                        <td><?php echo $this->Lib->date_format(h($structure['Structure']['created'])); ?>&nbsp;</td>
                        <td><?php echo $this->Lib->date_format(h($structure['Structure']['modified'])); ?>&nbsp;</td>
                        <td><?php echo h($structure['Structure']['email']); ?>&nbsp;</td>
                        <td><?php echo h($structure['Structure']['phone']); ?>&nbsp;</td>
                        <td><?php echo h($structure['Structure']['fax']); ?>&nbsp;</td>
                        <td class="text-center">
                            <?php if ($structure['Structure']['status']): ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-check"></i>'), array('action' => 'status', $structure['Structure']['id'], 0), array('class' => 'btn btn-xs btn-success', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja tirar esta estrutura do site?', $structure['Structure']['email'])); ?>
                            <?php else: ?>
                                <?php echo $this->Form->postLink(__('<i class="fa fa-times"></i>'), array('action' => 'status', $structure['Structure']['id'], 1), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja destacar esta estrutura para o site?', $structure['Structure']['email'])); ?>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $structure['Structure']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $structure['Structure']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;')); ?>
                            <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $structure['Structure']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Are you sure you want to delete # %s?', $structure['Structure']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php echo $this->element("Admin.paginator"); ?>

</div>
