<!DOCTYPE html>
<html>
    <head>
	<?php echo $this->element('header'); ?>	
    </head>
    <body class="bg-light">
        <main class="container">    
            <div class="card">

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link">
                            Produtos
                        </a>
                        <ul>
                            <li><a class="dropdown-item" href="<?php echo Router::url(['controller' => 'produtos', 'action' => 'index']);?>">Listar</a></li>
                            <li><a class="dropdown-item"  href="<?php echo Router::url(['controller' => 'produtos', 'action' => 'add']);?>">Cadastrar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item ms-auto p-2 bd-highlight">
                       <?php echo $this->session->read('Auth.User.id') .' - '.$this->session->read('Auth.User.name');?>
                    </li>
                    <li>
                        <button class="nav-item">
                            <a href = <?= Router::url(['controller' => 'users', 'action' => 'logout']); ?>>     
                                sair
                                <i class="bi bi-power"></i>
                            </a>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="my-3 p-3 bg-body rounded shadow-sm">

        <?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
            </div>
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->fetch('css'); ?>
        </main>
    </body>
</html>