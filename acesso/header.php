<?php
$img = $_SESSION['img_perfil_mql'];

?>

<html>
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                </div>
            </div>

            <div class="col-sm-5">

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?= $img?>" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="page-myProfile.php"><i class="fa fa-user"></i>Meu Perfil</a>

                        <a href="" class="logOut" id="logOut1"> <i class="menu-icon fa fa-power-off" id="logOut1"></i>Sair </a>
                     </div>
                </div>


            </div>
        </div>

    </header>

    <script src="../js/dashboard.js"></script>
</html>

