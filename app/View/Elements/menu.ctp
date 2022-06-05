<?php ?>
<style>
    .nav-link {
        color: white !important;
    }

</style>
<div class="card rounded-0 bg-secondary" style="--bs-bg-opacity: .5;">

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="<?php echo Router::url(['controller' => 'produtos', 'action' => 'index']);?>">Listar</a>
                </li>
                <li>
                    <a class="dropdown-item"  href="<?php echo Router::url(['controller' => 'produtos', 'action' => 'add']);?>">Cadastrar</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="<?php echo Router::url(['controller' => 'categorias', 'action' => 'index']);?>">Listar</a>
                </li>
                <li>
                    <a class="dropdown-item"  href="<?php echo Router::url(['controller' => 'categorias', 'action' => 'add']);?>">Cadastrar</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Estoque
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="<?php echo Router::url(['controller' => 'estoques', 'action' => 'index']);?>">Listar</a>
                </li>
                <li>
                    <a class="dropdown-item"  href="<?php echo Router::url(['controller' => 'estoques', 'action' => 'add']);?>">Cadastrar</a>
                </li>
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