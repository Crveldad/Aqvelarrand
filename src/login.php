<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["usuario"])) {
    header('Location: listado.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Aquelarrand - Aditus</title>
</head>

<body>
    <nav class="nav affix">
        <div class="container">
            <div class="logo">
                <a href="index.php">Aquelarrand</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="caracteristicas.php">Generador</a></li>
                    <li><a href="dados.php">Tiradas</a></li>
                    <li><a href="login.php">Acceso</a></li>
                    <li><a href="mailto:crveldad@hotmail.com">Contacto</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>


    <div class="contenedor">
        <div class="vacio"></div>

        <div class="login-wrap">
            <div class="login-html">
                <?php
                if (isset($_SESSION["error_login"])) {
                    echo '<div class="error">Error de login. ' . $_SESSION["error_login"] . '</div>';
                    unset($_SESSION["error_login"]);
                }
                if (isset($_SESSION["error_registro"])) {
                    echo '<div class="error">Error de registro. ' . $_SESSION["error_registro"] . '</div>';
                    unset($_SESSION["error_registro"]);
                }
                ?>
                <input id="tab-1" type="radio" name="tab" class="sign-in" <?= !isset($_GET['tab']) || $_GET['tab'] === 'login' ? 'checked' : '' ?>>
                <label for="tab-1" class="tab">Acceso</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up" <?= isset($_GET['tab']) && $_GET['tab'] === 'register' ? 'checked' : '' ?>>
                <label for="tab-2" class="tab">Registro</label>
                <div class="login-form">
                    <form action="acceso.php" method="POST">

                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="email" class="label">Email</label>
                                <input id="email" name="email" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Contrase??a</label>
                                <input id="pass" name="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> Mantenerme conectado</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" name="login" value="Entrar">
                                <input type="hidden" name="type" value="login">
                            </div>
                        </div>
                    </form>

                    <form action="registro.php" method="POST">

                        <div class="sign-up-htm">
                            <div class="group">
                                <label for="user" class="label">Usuario</label>
                                <input id="user" name="user" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Contrase??a</label>
                                <input id="pass" name="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <label for="pass2" class="label">Repite la contrase??a</label>
                                <input id="pass2" name="pass2" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <label for="email" class="label">Email</label>
                                <input id="email" name="email" type="text" class="input">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" name="register" value="Registrar">
                                <input type="hidden" name="type" value="register">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php
   include_once("footer.php");
   ?>

    <script src="js/dados.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/estilo.js"></script> -->
</body>

</html>