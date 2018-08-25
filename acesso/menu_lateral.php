<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 25/08/18
 * Time: 12:45
 */

?>
<html>
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
        <li >
            <a href="" class="logOut" id="logOut"> <i class="menu-icon fa fa-power-off" id="logOut"></i>Sair </a>
        </li>

    </ul>
</div>
</html>