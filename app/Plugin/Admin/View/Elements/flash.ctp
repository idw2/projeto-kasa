<div class="row">
    <div class="col-lg-12">
        <?php
        echo $this->Session->flash('flash', array('params' => array('class' => 'alert alert-success')));
        echo $this->Session->flash('auth', array('params' => array('class' => 'alert alert-danger')));
        ?>
    </div>
</div>