<div class="btn-group btn-group-lg pull-right" role="group" aria-label="Large button group">
    <?php if ($this->Session->read('Config.language') == "eng"): ?>
        <button type="button" class="btn btn-success update-laguage" data-language='eng' data-base='<?php echo $this->base; ?>'><i class="fa fa-check"></i> English</button>
        <button type="button" class="btn btn-default update-laguage" data-language='por' data-base='<?php echo $this->base; ?>'><i class="fa fa-times"></i> Portuguese</button>
    <?php else: ?>
        <button type="button" class="btn btn-default update-laguage" data-language='eng' data-base='<?php echo $this->base; ?>'><i class="fa fa-check"></i> English</button>
        <button type="button" class="btn btn-success update-laguage" data-language='por' data-base='<?php echo $this->base; ?>'><i class="fa fa-times"></i> Portuguese</button>
    <?php endif; ?>
</div>