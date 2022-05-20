<?php

$form = $this->Form->create('Usuario', array('class' => 'form-signin'));
$form .= $this->Html->tag('h1', 'Login', array('class' => 'h3 mb-3 font-weight-normal'));
$form .= $this->Form->input('User.name', array(
    'required' => false,
    'div' => false,
    'label' => 'login',
    'type' => 'text',
    'class' => 'form-control', 
    'placeholder' => 'Login',
    'error' => array('attributes' => array('class' => 'invalid-feedback'))    
));
$form .= $this->Form->input('User.password', array(
    'required' => false,
    'type' => 'password',
    'label' => 'Senha',
    'div' => false,
    'placeholder' => 'Senha',
    'class' => 'form-control', 
    'error' => array('attributes' => array('class' => 'invalid-feedback'))    
));
$form .= '<br>';
$form .= $this->Form->submit('Entrar', array('div' => false, 'class' => 'btn btn-danger btn-lg btn-block mb-3'));
$form .= $this->Flash->render('danger'); 
$form .= $this->Flash->render('warning'); 
$form .= $this->Form->end();

echo $form;

$this->Js->buffer('$(".form-error").addClass("is-invalid");');

if ($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}?>
 <!--<a href = <?php // echo Router::url(['controller' => 'users', 'action' => 'add']); ?>>    Cadastrar se</a>-->