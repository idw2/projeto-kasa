<?php
/* display message saved in session if any */
echo $this->Session->flash();
?>
<div class="users form">
    <?php
    echo $this->Form->create('User', array('type' => 'file', 'class' => 'form-signin', 'inputDefaults' => array(
            'div' => array('class' => 'form-group'),
            'label' => false
    )));
    ?>
    <fieldset>
        <h2 class="form-signin-heading">Create account</h2>
        <h3>Photo</h3>
        <?php
        echo $this->Form->input('avatar_file_name', array('type' => 'file'));
        echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));
        echo $this->Form->input('email', array('placeholder' => 'E-mail', 'class' => 'form-control'));
        ?>
        <h3>Date of birth</h3>
        <?php
        echo $this->Form->input('birth_dt', array(
            'type' => 'date',
            'id' => 'birth_dt',
            'separator' => '/',
            'dateFormat' => 'DMY',
            'minYear' => date('Y') - 70,
            'maxYear' => date('Y') - 14));
        echo $this->Form->input('username', array('placeholder' => 'Username', 'class' => 'form-control'));
        echo $this->Form->input('password', array('placeholder' => 'Password', 'class' => 'form-control'));
        echo $this->Form->input('confirm_password', array('type' => 'password', 'placeholder' => 'Password confirm', 'class' => 'form-control'));
        ?>
        <h3>Secret question</h3>
        <?php
        echo $this->Form->input('lembrete_pergunta', array(
            'type' => 'select',
            'class' => 'form-control',
//            'label' => 'Pergunta para recuperação de senha',
            'empty' => '(Escolha uma pergunta)',
            'options' => array(
                'Qual é a sua cor favorita?' => 'Qual é a sua cor favorita?',
                'Qual foi o seu primeiro emprego?' => 'Qual foi o seu primeiro emprego?',
                'Qual o nome do seu primeiro animal de estimação?' => 'Qual o nome do seu primeiro animal de estimação?',
                'Qual o nome da sua primeira professora?' => 'Qual o nome da sua primeira professora?',
                'Qual o seu maior segredo?' => 'Qual o seu maior segredo?',
                'Qual foi o seu primeiro automóvel?' => 'Qual foi o seu primeiro automóvel?',
            )
                )
        );

        echo $this->Form->input('lembrete_resposta', array("placeholder" => "Answer", 'required', 'class' => 'form-control'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(array('label' => __('Create'), 'class' => 'btn btn-lg btn-primary btn-block', 'div' => false)); ?>
</div>

<style>

    #birth_dtDay, #birth_dtMonth, #birth_dtYear{
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        line-height: 1.42857143;
        color: #555;
    }
</style>