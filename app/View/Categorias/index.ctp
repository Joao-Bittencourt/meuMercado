<?php

//include '_form_categoria_edit.ctp';;

$tableHeaders = [];
$tableHeaders[]=  $this->Paginator->sort('Categoria.id', 'cod');
$tableHeaders[]=  $this->Paginator->sort('Categoria.nome', 'nome');
$tableHeaders[]=  $this->Paginator->sort('Categoria.status', 'status');
$tableHeaders[]=  'Ação';
    

$tableCells = [];
if( !empty($dados)){
    foreach ($dados as $key => $dado){
        $id =  Hash::get($dado, 'Categoria.id', 0);
        $tableCells[$key][] = Hash::get($dado, 'Categoria.id', '-');
        $tableCells[$key][] = Hash::get($dado, 'Categoria.nome', '-');
        $tableCells[$key][] = Hash::get($dado, 'Categoria.status', '-');
        $tableCells[$key][] = "<a href= 'categorias/edit/{$id}'<i class='bi bi-pencil-square'>Editar</i>";
       
    }
}
?>
<table class="table table-striped table-sm">

<?php
    echo $this->Html->tableHeaders($tableHeaders);
    echo $this->Html->tableCells($tableCells);
?>
</table>