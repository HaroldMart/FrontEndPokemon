<?php

require('libreria/principal.php');


if ($_POST){
    $rs = singin($_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['pw']);
    var_dump($rs); exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    <title>Mi Api Pokemon</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Signika&display=swap');

    body {
        background-image: url("https://i.pinimg.com/originals/68/ee/89/68ee89f591913b774f9bd3a7e59e96be.jpg");
        background-repeat: no-repeat;
        color: white;
        background-size: cover;
        font-family: 'Signika', sans-serif;
    }

    .contenedor-links {
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .imagen img{
        width: 60%;
    }
</style>
  <div class="registration-form">
    <form method="post">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Ingresa el nombre" name="nombre">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Ingresa el apellido" name="apellido">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Ingresa el correo" name="correo">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="Ingresa la clave" name="clave">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Ingresa el whatsapp" name="wasa">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Ingresa la ciudad" name="ciudad">
        </div>

        <div class="form-group">
            <button class="btn create-account">Crear</button>
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



</body>

</html>
