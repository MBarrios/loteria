<?php
$nv = $this->session->userdata("lote_tipo");
?>
<div class="page-container horizontal-menu">


    <header class="navbar navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->

        <div class="navbar-inner">

            <!-- logo -->
            <div class="navbar-brand">
                <a href="index.html">
                    <label style="color: white">Loteria</label></a>
            </div>


            <!-- main menu -->

            <ul class="navbar-nav">
                <?php if(in_array($nv,array(1))){?>

                    <li>
                        <a href="#">
                            <i class="fa fa-gear"></i>
                            <span class="title">Configurar</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?=base_url("index.php/admin/inicio") ?>">
                                    <i class="entypo-network"></i>
                                    <span class="title">Listar Apuestas</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                <?php } ?>
                <?php if(in_array($nv,array(0))){?>
                    <li>
                        <a href="<?=base_url("index.php/admin/inicio") ?>">
                            <i class="entypo-network"></i>
                            <span class="title">Realizar Apuesta</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url("configuracion/cliente") ?>">
                            <i class="fa fa-user"></i>
                            <span class="title">Datos Personales</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url("configuracion/BCliente") ?>">
                            <i class="fa fa-bank"></i>
                            <span class="title">Datos Bancarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url("configuracion/Billetera") ?>">
                            <i class="entypo-credit-card"></i>
                            <span class="title">Mi Billetera</span>
                        </a>
                    </li>
                <?php } ?>

            </ul>


            <!-- notifications and other links -->
            <ul class="nav navbar-right pull-right">


                <li>
                    <a href="<?=base_url("principal/salir") ?>">
                        Salir <i class="entypo-logout right"></i>
                    </a>
                </li>


                <!-- mobile only -->
                <li class="visible-xs">

                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="horizontal-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </li>

            </ul>
        </div>
    </header>