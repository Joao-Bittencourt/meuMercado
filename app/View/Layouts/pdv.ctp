<?php ?>
<html>
    <head>
	<?php echo $this->element('header'); ?>	
    </head>
    <body class="bg-light">

            <?php //echo $this->element('menu'); ?>	
        <main class="container">

            <div class="my-3 p-3 bg-body rounded shadow-sm">

                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <?php echo $this->fetch('script'); ?>
            <?php echo $this->fetch('css');?>

        </main> 
    </body>
    
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function () {
            $("#ProdutoBusca").autocomplete({
                source: "<?php echo  Router::url( ['controller'=>'pdvs','action'=>'buscaProdutoSaida'], true );?>",
                minLength: 2,
                select: function (event, ui) {

                    var values = $("#VendaIndexForm").serialize();

                    $.ajax({
                        method: 'post',
                        url: '<?php echo  Router::url( ['controller'=>'pdvs','action' => 'index'], true );?>/index/produto_id:' + ui.item.id,
                        data: values,

                        success: function (response) {
                            $('#VendaIndexForm').html(response);
                        }
                    });
                }
            });
        });
    </script>
</html>