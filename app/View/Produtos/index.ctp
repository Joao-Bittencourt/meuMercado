<?php

include '_form_produto_edit.ctp';

$tableHeaders = [];
$tableHeaders[]=  $this->Paginator->sort('Produto.id', 'cod');
$tableHeaders[]=  $this->Paginator->sort('Produto.nome', 'nome');
$tableHeaders[]=  $this->Paginator->sort('Produto.tipo', 'tipo');
    
$tableHeaders[]=  $this->Paginator->sort('Produto.valor', 'valor');
$tableHeaders[]= $this->Paginator->sort('Produto.estoque', 'estoque');

if ($this->session->read('Auth.User.grupo_id') == '1') {
    $tableHeaders[]= '';
    $tableHeaders[]= 'Editar';
    $tableHeaders[]= 'Remover';
}

$tableCells = [];
if( !empty($dados)){
    foreach ($dados as $key => $dado){
        $tableCells[$key][] = Hash::get($dado, 'Produto.id', '-');
        $tableCells[$key][] = Hash::get($dado, 'Produto.nome', '-');
        $tableCells[$key][] = Hash::get($dado, 'Produto.tipo', '-');
        $tableCells[$key][] = empty(Hash::get($dado, 'Produto.valor')) ? '-' : number_format(Hash::get($dado, 'Produto.valor'), 2, ',', '.');
        $tableCells[$key][] = Hash::get($dado, 'Produto.estoque', '-');
        if ($this->session->read('Auth.User.grupo_id') == '1') {
            $tableCells[$key][] = '';
            $tableCells[$key][] = $this->Html->link('Valor  ',['controller' => 'Produtos','action' => 'editValor', Hash::get($dado, 'Produto.id')]).$this->Html->link('estoque',['controller' => 'Produtos','action' => 'editEstoque', Hash::get($dado, 'Produto.id')]);
            $tableCells[$key][] = $this->Html->link('Remover', [ 'controller' => 'Produtos', 'action' => 'delete', Hash::get($dado, 'Produto.id')]);
        }
    }
}
?>
<table class="table table-striped table-sm">

<?php
    echo $this->Html->tableHeaders($tableHeaders);
    echo $this->Html->tableCells($tableCells);
?>
</table>
