<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 25/08/18
 * Time: 12:45
 */
require '../sistema/funcoes/sessao.php'
?>
<html>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand " href="./"><img src="../images/logo1.png" alt="Logo"></a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?= $_SERVER['REQUEST_URI'] == '/acesso/index.php' ? 'active' : '' ?>">
                    <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] == '/acesso/page-myProfile.php' ? 'active' : '' ?>">
                    <a href="page-myProfile.php"> <i class="menu-icon fa fa-user"></i>Perfil </a>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] == '/acesso/page-financial.php' ? 'active' : '' ?>">
                    <a href="page-financial.php"> <i class="menu-icon fa fa-dollar"></i>Financeiro </a>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] == '/acesso/page-myPlan.php' ? 'active' : '' ?>">
                    <a href="page-myPlan.php"> <i class="menu-icon fa fa-fire"></i>Meu Plano </a>
                </li>
                <li>
                    <a href="" class="logOut" id="logOut1"> <i class="menu-icon fa fa-power-off" id="logOut1"></i>Sair
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</aside><!-- /#left-panel -->
</html>