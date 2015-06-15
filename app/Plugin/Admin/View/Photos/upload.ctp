<tr>
    <td><?php echo $this->Upload->uploadImage($photo['Photo'], 'Photo.photo', array('style' => 'thumb')); ?>&nbsp;</td>
    <td><?php echo h($photo['Photo']['created']); ?>&nbsp;</td>
    <td><?php echo h($photo['Photo']['modified']); ?>&nbsp;</td>
    <td><?php echo h($photo['Photo']['photo_file_name']); ?>&nbsp;</td>
    <td  class="actions">

        <?php if ($photo['Photo']['status']): ?>
            <?php echo $this->Form->postLink(__('Despublicar Imagem'), array('controller' => 'photos', 'action' => 'status', $photo['Photo']['id'], 0), array(), __('Deseja despublicar esta imagem: "%s"?', $photo['Photo']['photo_file_name'])); ?>
        <?php else: ?>
            <?php echo $this->Form->postLink(__('Publicar Imagem'), array('controller' => 'photos', 'action' => 'status', $photo['Photo']['id'], 1), array(), __('Deseja publicar esta imagem: "%s"?', $photo['Photo']['photo_file_name'])); ?>
        <?php endif; ?>

    </td>
    <td>
        <?php
        echo $this->Form->input('id', array('name' => 'data[Photo][id][]', 'type' => 'hidden', 'value' => $photo['Photo']['id']));
        echo $this->Form->input('position', array('name' => 'data[Photo][position][]', 'type' => 'text', 'label' => false, 'value' => $photo['Photo']['position']));
        ?>
    </td>
    <td class="actions">
        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['Photo']['id']), array(), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?>
    </td>
</tr>