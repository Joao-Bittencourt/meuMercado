<?php

echo $this->Form->create('Venda', [
    'url' => [
        'controller' => 'vendas',
        'action' => 'add'
    ]
]);
$lastVendaItem = 0;
?>

<div class="row">
    <div class="col-lg-8" >
        <?php echo $this->element('_form_pdv_itens'); ?>  
    </div>
    <div class="col-lg-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="input text">
                        <label for="ProdutoId">Preço</label>
                         <?php echo $this->Form->input("VendaItem.{$lastVendaItem}.preco", ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false, 'disabled' => true ]);?> 
                    </div>       
                </div>
                <div class="col-sm-12">
                    <div class="input text">
                        <label for="ProdutoId">quantidade</label>
                        <?php echo $this->Form->input("VendaItem.{$lastVendaItem}.qtd", ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false, 'disabled' => true ]);?>
                    </div>       
                </div>
                <div class="col-sm-12">
                    <div class="input text">
                        <label for="ProdutoId">sub-total</label>
                        <?php echo $this->Form->input("VendaItem.{$lastVendaItem}.valor_total", ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false, 'disabled' => true ]);?>
                    </div>       
                </div>
                <hr>
                <div class="col-sm-12">
                    <div class="input text">
                        <label for="ProdutoId">Total Venda</label>
                        <?php echo $this->Form->input("Venda.valor_total", ['type'=> 'text', 'label'=> false, 'class'=>'form-control', 'required' => false, 'readonly' => true ]);?>
                    </div>       
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
            <?php
                 echo $this->Form->input('Venda.id', ['type' => 'hidden']);   
                 echo $this->Form->input('Venda.tipo_venda_id', ['type' => 'hidden', 'value' => 1]);  // Venda rapida  
                 echo $this->Form->input('Venda.venda_status', ['type' => 'hidden', 'value' => 1]);  // Venda concluida  
                 echo $this->Form->submit('Finalizar Venda',['class'=>'btn btn-primary']);
                 echo $this->Form->end();
            ?>
            </div>
        </div>
    </div>
</div>



