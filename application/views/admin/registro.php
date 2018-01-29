<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="author" content="mediawanderlust.com" />

    <title>Software de Loteria</title>

    <link rel="stylesheet" href="<?=__MAQ__?>admin/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/bootstrap.css">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/neon-core.css">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/neon-theme.css">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/neon-forms.css">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/custom.css">
    <link rel="stylesheet" href="<?=__MAQ__?>admin/css/skins/facebook.css">
    <link rel="icon" href="<?=__MAQ__?>admin/images/favicon.ico" type="image/x-icon" />
    <script src="<?=__MAQ__?>admin/js/jquery-1.11.0.min.js"></script>
    <script>$.noConflict();</script>
    <script src="<?=__JSVIEW__?>general/global.js"></script>

    <!--[if lt IE 9]><script src="<?=__MAQ__?>admin/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-form-fall">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
    var baseurl = '';
</script>

<div class="login-container">

    <div class="login-header login-caret">

        <div class="login-content">

            <a href="index.html" class="logo">
                <img src="assets/images/logo@2x.png" width="120" alt="" />
            </a>

            <p class="description">Crea tu cuenta y gana!</p>

            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator">
                <h3>43%</h3>
                <span>logging in...</span>
            </div>
        </div>

    </div>

    <div class="login-progressbar">
        <div></div>
    </div>

    <div class="login-form">

        <div class="login-content">

            <form method="post" role="form" id="form_register">

                <div class="form-register-success">
                    <i class="entypo-check"></i>
                    <h3>You have been successfully registered.</h3>
                    <p>We have emailed you the confirmation link for your account.</p>
                </div>

                <div class="form-steps">

                    <div class="step current" id="step-1">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>

                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>

                                <input type="text" class="form-control" name="ape" id="ape" placeholder="Apellido" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-vcard"></i>
                                </div>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option>V</option>
                                    <option>E</option>
                                </select>
                                <input type="number" class="form-control" name="ced" id="ced" placeholder="Cedula de identidad" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-right-open-mini"></i>
                                Siguiente
                            </button>
                        </div>

                        <div class="form-group">
                            Formulario 1 of 2
                        </div>

                    </div>

                    <div class="step" id="step-2">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-vcard"></i>
                                </div>
                                <input type="number" class="form-control" name="tel" id="tel" placeholder="Telefono Local"  />
                            </div>
                        </div> <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-vcard"></i>
                                </div>
                                <input type="number" class="form-control" name="cel" id="cel" placeholder="Telefono Celular" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user-add"></i>
                                </div>

                                <textarea class="form-control" name="direc" id="direc" placeholder="Direccion"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-mail"></i>
                                </div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-lock"></i>
                                </div>

                                <input type="password" class="form-control" name="password" id="password" placeholder="Clave de Acceso"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>">
                            <button type="submit" class="btn btn-success btn-block btn-login">
                                <i class="entypo-right-open-mini"></i>
                                Completar Registro
                            </button>
                        </div>

                        <div class="form-group">
                            Formulario 2 of 2
                        </div>

                    </div>

                </div>

            </form>

<!--
            <div class="login-bottom-links">

                <a href="" class="link">
                    <i class="entypo-lock"></i>
                    Regresar al Login
                </a>

                <br />

                <a href="#">Politicas</a>  - <a href="#">Normas</a>

            </div> -->

        </div>

    </div>

</div>


<!-- Bottom scripts (common) -->
<script src="<?=__MAQ__?>admin/js/gsap/main-gsap.js"></script>
<script src="<?=__MAQ__?>admin/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="<?=__MAQ__?>admin/js/bootstrap.js"></script>
<script src="<?=__MAQ__?>admin/js/joinable.js"></script>
<script src="<?=__MAQ__?>admin/js/resizeable.js"></script>
<script src="<?=__MAQ__?>admin/js/neon-api.js"></script>
<script src="<?=__MAQ__?>admin/js/jquery.validate.min.js"></script>
<script src="<?=__MAQ__?>admin/js/neon-register.js"></script>
<script src="<?=__MAQ__?>admin/js/jquery.inputmask.bundle.min.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="<?=__MAQ__?>admin/js/neon-custom.js"></script>


<!-- Demo Settings -->
<script src="<?=__MAQ__?>admin/js/neon-demo.js"></script>

</body>
</html>