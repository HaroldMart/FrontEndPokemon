<?php

class plantilla
{
    static $instancia = null;

    public static function aplicar($titulo = null)
    {
        self::$instancia = new plantilla($titulo);
    }

    public function __construct($titulo)
    {

        if ($titulo == null) {
            $titulo = 'Bienvenido a la pagina de Pokemon';
        };

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
                font-size: 1.4rem;
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

        <body>
            <div class="container p-4">
                <div class="text-right">
                    <?php
                    $usr = obtenerUsuario();
                    if ($usr) {
                        echo "
                            {$usr->nombre} {$usr->apellido} <a href='cerrarSesion.php>Cerrar Sesion</a>
                            ";
                    }
                    ?>
                </div>
                <h1><?= $titulo ?></h1>

            <?php
        }

        public function __destruct()
        {

            ?>


            </div>

        </body>

        </html>

<?php
        }
    }

?>