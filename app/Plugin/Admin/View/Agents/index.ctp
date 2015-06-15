<div class="agents index">
    <h2><?php echo __('Agents'); ?></h2>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?></li>
        </ul>        
    </div>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('modified'); ?></th>
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
            <?php foreach ($agents as $agent): ?>
                <tr>
                    <td><?php echo $this->Upload->uploadImage($agent['Agent'], 'Agent.photo', array('style' => 'thumb')); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['created']); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['modified']); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['name']); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['email']); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['phone']); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['cell_phone']); ?>&nbsp;</td>
                    <td><?php echo h($agent['Agent']['fax']); ?>&nbsp;</td>
                    <td  class="actions">
                        <?php if ($agent['Agent']['status']): ?>
                            <?php echo $this->Form->postLink(__('Despublicar Agente'), array('action' => 'status', $agent['Agent']['id'], 0), array(), __('Deseja despublicar agente imóvel "%s"?', $agent['Agent']['name'])); ?>
                        <?php else: ?>
                            <?php echo $this->Form->postLink(__('Publicar Agente'), array('action' => 'status', $agent['Agent']['id'], 1), array(), __('Deseja publicar este agente "%s"?', $agent['Agent']['name'])); ?>
                        <?php endif; ?>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $agent['Agent']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agent['Agent']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agent['Agent']['id']), array(), __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
