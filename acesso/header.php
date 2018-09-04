<?php

require '../sistema/funcoes/sessao.php';
$user_mql = $_SESSION['user_mql'];

?>

<html>
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                </div>
            </div>

            <div class="col">

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="align-self-center rounded-circle mr-3" style="width:50px; height:50px;"  src="<?= $img_perfil_mql?>" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu" >

                        <a class="nav-link" href="page-myProfile.php"> <i class="menu-icon fa fa-user" id=""></i><?= " ".$user_mql ?></a>

                        <a href="" class="nav-link logOut" id="logOut1"> <i class="menu-icon fa fa-power-off" id="logOut1"></i>_Sair </a>
<!--                        <section class="card">-->
<!--                            <ul class="list-group list-group-flush">-->
<!--                                <li class="list-group-item">-->
<!--                                    <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </section>-->

                     </div>
                </div>


            </div>
        </div>

    </header>

    <script src="../js/dashboard.js"></script>
</html>

