<div class="banners index">
    <h2><?php echo __('Banners'); ?></h2>

    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Banner'), array('action' => 'add')); ?></li>
        </ul>
    </div>


    <?php
    echo $this->Form->create('Banner', array('controller' => 'banners', 'action' => 'positions'));
    ?>
    <table cellpadding="0" cellspacing="0">
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
            <?php foreach ($banners as $banner): ?>
                <tr>
                    <td><?php echo $this->Upload->uploadImage($banner['Banner'], 'Banner.photo', array('style' => 'thumb')); ?>&nbsp;</td>
                    <td><?php echo h($banner['Banner']['created']); ?>&nbsp;</td>
                    <td><?php echo h($banner['Banner']['modified']); ?>&nbsp;</td>
                    <td><?php echo h($banner['Banner']['photo_file_name']); ?>&nbsp;</td>
                    <td  class="actions">
                        <?php if ($banner['Banner']['status']): ?>
                            <?php echo $this->Form->postLink(__('Despublicar Banner'), array('action' => 'status', $banner['Banner']['id'], 0), array(), __('Deseja despublicar este banner "%s"?', $banner['Banner']['photo_file_name'])); ?>
                        <?php else: ?>
                            <?php echo $this->Form->postLink(__('Publicar Banner'), array('action' => 'status', $banner['Banner']['id'], 1), array(), __('Deseja publicar este banner "%s"?', $banner['Banner']['photo_file_name'])); ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->input('id', array('name' => 'data[Banner][id][]', 'type' => 'hidden', 'value' => $banner['Banner']['id']));
                        echo $this->Form->input('position', array('name' => 'data[Banner][position][]', 'type' => 'text', 'label' => false, 'value' => $banner['Banner']['position']));
                        ?>
                    </td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $banner['Banner']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $banner['Banner']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $banner['Banner']['id']), array(), __('Are you sure you want to delete # %s?', $banner['Banner']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo $this->Form->end(__('Submit')); ?>

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
