<?php

$tableHeaders = [];
$tableHeaders[]=  'Cod';
$tableHeaders[]=  'Item';
$tableHeaders[]=  'Nome';
$tableHeaders[]=  'Valor un';
$tableHeaders[]=  'Qtd';
$tableHeaders[]=  'Sub total';
$tableHeaders[]=  'Remove';

$tableCells = [];

$this->request->data['Venda']['valor_total'] = 0;
$lastVendaItem = 0;
$pdv_products = $this->request->data('VendaItem');
if( !empty($pdv_products)){

    foreach ($pdv_products as $key => $dado) {
        
        $this->request->data['VendaItem'][$key]['qtd'] = 1;
        $this->request->data['VendaItem'][$key]['nitem'] = $key+1;
      
        $tableCells[$key][] = Hash::get($dado, 'produto_id', '-');
        $tableCells[$key][] = $key+1;
        $tableCells[$key][] = Hash::get($dado, 'nome', '-');
        $tableCells[$key][] = empty(Hash::get($dado, 'preco')) ? '-' : number_format(Hash::get($dado, 'preco'), 2, ',', '.');
        $tableCells[$key][] = $this->Form->input("VendaItem.{$key}.qtd", ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false]);
        $tableCells[$key][] = empty(Hash::get($dado, 'preco')) ? '-' : number_format(Hash::get($dado, 'preco'), 2, ',', '.');
        $tableCells[$key][] = 'X';
        
        $this->request->data['VendaItem'][$key]['valor_total'] = Hash::get($dado, 'preco', 0) * 1;
        $this->request->data['Venda']['valor_total'] += $this->request->data['VendaItem'][$key]['valor_total'];
           
        echo $this->Form->input("VendaItem.{$key}.produto_id", ['type'=> 'hidden']);
        echo $this->Form->input("VendaItem.{$key}.nitem", ['type'=> 'hidden']);
        echo $this->Form->input("VendaItem.{$key}.nome", ['type'=> 'hidden']);
        echo $this->Form->input("VendaItem.{$key}.produto_id", ['type'=> 'hidden']);
        echo $this->Form->input("VendaItem.{$key}.preco", ['type'=> 'hidden']);
        echo $this->Form->input("VendaItem.{$key}.qtd", ['type'=> 'hidden']);
        echo $this->Form->input("VendaItem.{$key}.valor_total", ['type'=> 'hidden']);
        
        $lastVendaItem = $key;
    }
    echo $this->Form->input("lastVendaItem", ['type'=> 'hidden', 'value' => $lastVendaItem]);
}
?>


<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="input text">
                    <label for="ProdutoId">Busca</label>
                            <?php echo $this->Form->input("Produto.busca", ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false]);?> 
                </div> 
            </div>
        </div>

        <br/>
        <div class="table-responsive">
            <table class="table table-bordered">
                        <?php 
                            echo $this->Html->tableHeaders($tableHeaders);
                            echo $this->Html->tableCells($tableCells);
                        ?>
            </table>
        </div>


    </div>
</div>

