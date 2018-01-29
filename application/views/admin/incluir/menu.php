<?php
$nv = $this->session->userdata("lote_tipo");
?>
<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="<?=base_url("index.php/admin/inicio") ?>">
                    Animales
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
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
    </div>
</div>