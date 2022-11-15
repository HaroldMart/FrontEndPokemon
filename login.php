<?php

include('libreria/principal.php');

$mensaje = '';
if ($_POST) {
    // $rs = iniciarSesion($_POST['correo'], $_POST['clave']);
    if($rs->exito) {
        header('Location: inicio.php');
    } else {
        $mensaje = $rs->mensaje;
    }
}

plantilla::aplicar('Inicio de Sesion');

?>

<div class="registration-form">
    <form method="post">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Ingresa el correo" name="correo">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="Ingresa la clave" name="clave">
        </div>

        <div class="text-danger"> <?= $mensaje ?></div>
        <div class="form-group">
            <button class="btn create-account">Ingresar</button>
        </div>
    </form>

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="assets/js/script.js"></script>

<style>
    body {
        background-color: #dee9ff;
    }

    .registration-form {
        padding: 50px 0;
    }

    .registration-form form {
        background-color: #fff;
        max-width: 600px;
        margin: auto;
        padding: 50px 70px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    }

    .registration-form .form-icon {
        text-align: center;
        background-color: #5891ff;
        border-radius: 50%;
        font-size: 40px;
        color: white;
        width: 100px;
        height: 100px;
        margin: auto;
        margin-bottom: 50px;
        line-height: 100px;
    }

    .registration-form .item {
        border-radius: 20px;
        margin-bottom: 25px;
        padding: 10px 20px;
    }

    .registration-form .create-account {
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #5791ff;
        border: none;
        color: white;
        margin-top: 20px;
    }

    @media (max-width: 576px) {
        .registration-form form {
            padding: 50px 20px;
        }

        .registration-form .form-icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
            line-height: 70px;
        }
    }
</style>