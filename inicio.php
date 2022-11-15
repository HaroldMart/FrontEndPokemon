<?php

include('libreria/principal.php');

plantilla::aplicar('Opciones de PKM');

// $usuario = obtenerUsuario(true);

?>

<div class="row">
    <div class="col">
        <div class="col col-md-4">
            <a href="eventos.php">Eventos</a>
        </div>

        <div class="col col-md-4">
            <a href="mis_pokem.php">Mi Pokemon</a>
        </div>

        <div class="col col-md-4">
            <a href="registro.php">Registrar Pokemon</a>
        </div>
    </div>

</div>