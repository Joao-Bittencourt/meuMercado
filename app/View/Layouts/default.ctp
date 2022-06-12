<!DOCTYPE html>
<html>
    <head>
	<?php echo $this->element('header'); ?>	
    </head>
    <body class="bg-light">
            <?php echo $this->element('menu'); ?>	
        <main class="container">
            
            <div class="my-3 p-3 bg-body rounded shadow-sm">

                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->fetch('css'); ?>      
        </main> 
    </body>
</html>