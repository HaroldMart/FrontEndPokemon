<?php

include('libreria/principal.php');

$usuario = obtenerUsuario(true);

plantilla::aplicar('Atrapalo.....');

if($_POST) {
    $_POST['token'] = $usuario->token;
    // $rs = enviarPost('http://localhost/apiPokemon/act/registrar_pokemon.php');
    if($rs->exito) {
        echo "<div class='alert alert-success'>Pokemon regitrado</div>";
    } else {
        echo "<div class='alert alert-danger'>{$rs->mensaje}</div>";
    }

    echo "
        <a href='mis_pokem.php' class='btn-success'>Mis pokemones</a>
    ";
    exit();
}

?>

<form method="post">
    <div>
        <label>Nombre</label>
        <input type='text' names='nombre' class="form-control" required>
    </div>

    <div>
        <label>Nivel</label>
        <input type='text' names='nivel' class="form-control" required>
    </div>

    <div>
        <label>Tipo</label>
        <input type='text' names='tipo' class="form-control" required>
    </div>

    <div>
        <label>Comentario</label>
        <input type='text' names='comentario' class="form-control" required>
    </div>

    <div>
        <input type="submit" value="Registrar" class="btn-primary">
    </div>
</form>