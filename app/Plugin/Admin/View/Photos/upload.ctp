<tr>
    <td><?php echo $this->Upload->uploadImage($photo['Photo'], 'Photo.photo', array('style' => 'thumb'), array('class' => 'img-thumbnail')); ?>&nbsp;</td>
    <td><?php echo h($photo['Photo']['created']); ?>&nbsp;</td>
    <td><?php echo h($photo['Photo']['modified']); ?>&nbsp;</td>
    <td><?php echo h($photo['Photo']['photo_file_name']); ?>&nbsp;</td>
    <td  class="actions">

        <?php if ($photo['Photo']['status']): ?>
            <?php echo $this->Form->postLink('<i class="fa fa-check"></i>', array('controller' => 'photos', 'action' => 'status', $photo['Photo']['id'], 0), array('class' => 'btn btn-xs btn-success', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja despublicar esta imagem: "%s"?', $photo['Photo']['photo_file_name'])); ?>
        <?php else: ?>
            <?php echo $this->Form->postLink('<i class="fa fa-times"></i>', array('controller' => 'photos', 'action' => 'status', $photo['Photo']['id'], 1), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Deseja publicar esta imagem: "%s"?', $photo['Photo']['photo_file_name'])); ?>
        <?php endif; ?>

    </td>

    <td>
        <?php
        echo $this->Form->input('id', array('name' => 'data[Photo][id][]', 'type' => 'hidden', 'value' => $photo['Photo']['id']));
        echo $this->Form->input('position', array('name' => 'data[Photo][position][]', 'type' => 'text', 'label' => false, 'value' => $photo['Photo']['position'], 'class' => 'form-control'));
        ?>
    </td>
    <td class="actions">
        <?php echo $this->Form->postLink('<i class="fa fa-trash-o"></i>', array('controller' => 'photos', 'action' => 'delete', $photo['Photo']['id']), array('class' => 'btn btn-xs btn-default', 'escape' => false, 'style' => 'font-size: 20px; width: 33px;'), __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?>
    </td>
</tr>