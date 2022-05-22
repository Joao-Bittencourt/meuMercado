<?php

//include '_form_produto_edit.ctp';

$title = empty($title) ? 'Cadastro de Produto' : $title ;    
?>
<h2>
    <?php echo $title ?>
</h2>
<?php 
    echo $this->Form->create('Produto',['class'=>'form-group']);
?>
<div class="mb-5">

    <div class="row mb-3">
        <div class="col-sm-1">
           <?php echo $this->Form->input('Produto.id', ['type'=> 'text', 'label'=> 'Codigo', 'class'=>'form-control', 'empty' => ' - ','disabled' => true]);?>
        </div>
        <div class="col-sm-5">
           <?php echo $this->Form->input('Produto.nome', ['type'=> 'text', 'label'=> 'Nome', 'class'=>'form-control']);?>
        </div>
        <div class="col-sm-6">
           <?php echo $this->Form->input('Produto.categoria_id', ['label' => 'Categoria', 'class' => 'form-control']);?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-12">
            <?php echo $this->Form->input('Produto.descricao', ['type' => 'text','label' => 'Descrição', 'class' => 'form-control']);?>
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.ncm', ['type' => 'text','label' => 'NCM', 'class' => 'form-control']);?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.unidade_medida', ['type' => 'text','label' => 'Unidade medida', 'class' => 'form-control']);?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.cod_gtin', ['type' => 'text','label' => 'Cod GTIN', 'class' => 'form-control']);?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.cod_cest', ['type' => 'text','label' => 'Cod CEST', 'class' => 'form-control']);?>
        </div>
    </div>

    <div class="row mb-3">
       
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.valor_unitario', ['type' => 'text','label' => 'Valor Unitario', 'class' => 'form-control']);?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.situacao_tributaria', ['label' => 'situacao_tributaria', 'class' => 'form-control']);?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.ind_arredondamento', ['label' => 'ind_arredondamento', 'class' => 'form-control']);?>
        </div>
        <div class="col-sm-3">
            <?php echo $this->Form->input('Produto.ind_producao', ['label' => 'ind_producao', 'class' => 'form-control']);?>
        </div>
    </div>

</div>

<?php

echo $this->Form->input('Produto.id', ['type' => 'hidden']);   
echo $this->Form->end('Salvar',['class'=>'btn btn-primary mb-3']); 
?>

<hr>