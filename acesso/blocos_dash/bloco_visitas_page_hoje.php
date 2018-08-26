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
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Page1</a>
                        <a class="dropdown-item" href="#">Page2</a>
                        <a class="dropdown-item" href="#">Page3</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Visitas Hoje</p>

            <div class="chart-wrapper px-0" style="height:70px;">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>

    </div>
</div>
</html>