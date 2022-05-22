<?php

$title = empty($title) ? 'Cadastro de Categoria' : $title ;    
?>
<h2>
    <?php echo $title ?>
</h2>
<?php 
    echo $this->Form->create('Categoria',['class'=>'form-group']);
?>
<div class="mb-5">

    <div class="row mb-3">
        <div class="col-sm-1">
           <?php echo $this->Form->input('Categoria.id', ['type'=> 'text', 'label'=> 'Codigo', 'class'=>'form-control', 'empty' => ' - ','disabled' => true]);?>
        </div>
        <div class="col-sm-5">
           <?php echo $this->Form->input('Categoria.nome', ['type'=> 'text', 'label'=> 'Nome', 'class'=>'form-control']);?>
        </div>
        
    <div class="row mb-3">
       
        <div class="col-sm-3">
            <?php echo $this->Form->input('Categoria.status', ['label' => 'Status','options' => ['0' => 'cancelado', '1' => 'Ativo'], 'class' => 'form-control']);?>
        </div>
        
    </div>

</div>

<?php

echo $this->Form->input('Categoria.id', ['type' => 'hidden']);   
echo $this->Form->end('Salvar',['class'=>'btn btn-primary mb-3']); 
?>

<hr>