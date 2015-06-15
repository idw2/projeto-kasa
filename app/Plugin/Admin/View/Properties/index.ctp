<div class="properties index">
    <h2><?php echo __('Properties'); ?></h2>

    <div class="actions">    
        <ul>
            <li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?></li>
        </ul>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('modified'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property): ?>
                <tr>
                    <td><?php echo $this->Upload->uploadImage($property['Property'], 'Property.photo', array('style' => 'thumb')); ?>&nbsp;</td>
                    <td><?php echo h($property['Property']['created']); ?>&nbsp;</td>
                    <td><?php echo h($property['Property']['modified']); ?>&nbsp;</td>
                    <td><?php echo h($property['Property']['name']); ?>&nbsp;</td>
                    <td  class="actions">

                        <?php if ($property['Property']['status']): ?>
                            <?php echo $this->Form->postLink(__('Despublicar Imóvel'), array('action' => 'status', $property['Property']['id'], 0), array(), __('Deseja despublicar este imóvel "%s"?', $property['Property']['name'])); ?>
                        <?php else: ?>
                            <?php echo $this->Form->postLink(__('Publicar Imóvel'), array('action' => 'status', $property['Property']['id'], 1), array(), __('Deseja publicar este imóvel "%s"?', $property['Property']['name'])); ?>
                        <?php endif; ?>

                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Details'), array('action' => 'details', $property['Property']['id'])); ?>
                        <?php echo $this->Html->link(__('Location'), array('action' => 'locations', $property['Property']['id'])); ?>
                        <?php echo $this->Html->link(__('Photos'), array('action' => 'photos', $property['Property']['id'])); ?>
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $property['Property']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $property['Property']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $property['Property']['id']), array(), __('Are you sure you want to delete # %s?', $property['Property']['name'])); ?>
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
