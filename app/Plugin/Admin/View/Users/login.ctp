<div class="users form">
    <?php
    echo $this->Form->create('User', array('type' => 'file', 'class' => 'form-signin', 'inputDefaults' => array(
            'div' => false,
            'label' => false
    )));
    ?>
    <h2 class="form-signin-heading">Please sign in</h2>
    <?php
    echo $this->Form->input('username', array('label' => array('for' => 'inputEmail', 'class' => 'sr-only', 'text' => 'Username'), 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus'));
    echo $this->Form->input('password', array('label' => array('for' => 'inputPassword', 'class' => 'sr-only', 'text' => 'Password'), 'class' => 'form-control', 'placeholder' => 'Password', 'required'));
    ?>

<!--    <div class="checkbox">
        <label style="padding: 0">-->
            <?php #echo $this->Html->link('Create account', array('action' => 'register'), array('style' => 'color: #333')); ?>
<!--        </label>

        <label style="padding: 0; text-align: right; display: inline-block; float: right;">-->
            <?php #echo $this->Html->link('Forgot your password?', array('action' => 'register'), array('style' => 'color: #333')); ?>
<!--        </label>
    </div>
    
    <br/>-->

    <?php echo $this->Form->end(array('label' => __('Sign in'), 'class' => 'btn btn-lg btn-primary btn-block', 'div' => false)); ?>


</div>