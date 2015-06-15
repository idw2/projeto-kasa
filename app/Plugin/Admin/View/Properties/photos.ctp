<div class="photos index">
    <h2><?php echo __('Photos'); ?></h2>


    <h2><?php echo __('Property'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($property['Property']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($property['Property']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($property['Property']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($property['Property']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo $property['Property']['description']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Photo File Name'); ?></dt>
        <dd>
            <?php echo h($property['Property']['photo_file_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($property['Property']['status']); ?>
            &nbsp;
        </dd>
    </dl>

    <br/>
    <div>
        <form id="multipleDocs" class="form" enctype="multipart/form-data" method="post">
            <div class="form-group"> 
                <h4>Selecione os documentos</h4>  
                <b>Extensões permitidas:</b><br>.jpg, .png, .gif, .bmp<br>  
                <br/>
                <div id="mulitplefileuploader" class="fileuploader">Upload de diversos tipos de arquivos</div>
                <div id="status"></div>
            </div>
        </form>
        <input type="hidden" name="propertie_id" id="propertie_id" value="<?php echo $propertie_id; ?>"/>
        <input type="hidden" name="base" id="base" value="<?php echo $this->request->base; ?>/admin"/>
    </div>
    <br/>



    <?php
    echo $this->Form->create('Photo', array('controller' => 'photos', 'action' => 'positions'));
    echo $this->Form->input('propertie_id', array('type' => 'hidden', 'value' => $propertie_id));
    ?>


    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>created</th>
                <th>modified</th>
                <th>photo_file_name</th>
                <th>status</th>
                <th>position</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody class="myTbody">
            <?php foreach ($photos as $photo): ?>
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
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo $this->Form->end(__('Submit')); ?>
</div>