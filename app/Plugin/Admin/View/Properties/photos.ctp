<div class="col-sm-12">
    <div>
<div class="panel panel-default">
    <div class="panel-heading"> <h3 class="panel-title"><?php echo __('Property'); ?> </h3> </div>
  <div class="panel-body">


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
<!--        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo $property['Property']['description']; ?>
            &nbsp;
        </dd>-->
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
 
   </div>
      </div>
    </div> 
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


    <table class="table table-bordered table-striped" cellpadding="0" cellspacing="0">
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
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo $this->element("Admin.btn_submit"); ?>
</div>
