<?php

$title = empty($title) ? 'Cadastro de Produto' : $title ;
$titleButtonSubmit = empty($titleButtonSubmit) ? 'Salvar' : $titleButtonSubmit ;
$actionAddOrEdit = in_array($this->request->params['action'], ['add', 'edit']) ?: false;
$actionIsEditEstoqueOrEditValor = in_array($this->request->params['action'], ['editEstoque', 'editValor']) ?: false;
$actionIsEditEstoque = $this->request->params['action'] == 'editEstoque'?: false;
$actionIsEditValor = $this->request->params['action'] == 'editValor'?: false;
?>

<h2><?php echo $title ?></h2>
<?php echo $this->Form->create('Produto',['class'=>'form-group']); ?>
<div class="mb-5">
    <?php 
    if ($actionAddOrEdit) {
    ?>
    <div class="row mb-3">

        <label for="nome" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-5">
            <?php echo Hash::get($this->request->data,'Produto.id', ' - ');?>
        </div>
    </div>
    <?php 
    }
    ?>
    <div class="row mb-3">

        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-5">
                <?php echo $this->Form->input('Produto.nome', ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false, 'readonly' => $actionIsEditEstoqueOrEditValor ]);?>
        </div>
    </div> 
    <div class="row mb-3">
        <label for="cpf" class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-5">
                <?php echo $this->Form->input('Produto.tipo', ['type' => 'text','label' => false, 'class' => 'form-control', 'required' => false, 'readonly' => $actionIsEditEstoqueOrEditValor]);?>
        </div>
    </div>
    <?php 
    if ($actionAddOrEdit || $actionIsEditValor) {
    ?>
    <div class="row mb-3">
        <label for="cpf" class="col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-5">
            <?php echo $this->Form->input('Produto.valor', ['type' => 'text','label' => false, 'class' => 'form-control', 'required' => false]);?>
        </div>
    </div>
     <?php } 
     if ($actionAddOrEdit|| $actionIsEditEstoque) {
         ?>
    <div class="row mb-3">
        <label for="cpf" class="col-sm-2 col-form-label">Estoque</label>
        <div class="col-sm-5">
                    <?php echo $this->Form->input('Produto.estoque', ['type' => 'text','label' => false, 'class' => 'form-control', 'required' => false]);?>
        </div>
    </div>

    <?php } ?>
</div>

<?php

echo $this->Form->input('Produto.id', ['type' => 'hidden']);   
echo $this->Form->end($titleButtonSubmit,['class'=>'btn btn-primary mb-3']); 
?>

<hr>