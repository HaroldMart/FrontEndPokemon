<?php

include('libreria/principal.php');

plantilla::aplicar('Eventos');

$usuario = obtenerUsuario(true);

// $rs = enviarPost('http://localhost/apiPokemon/act/eventos.php');

$eventos = $rs->datos;

foreach($eventos as $evento) {
    echo <<<EVENTO
    <div>
        <h4>{$evento->titulo}>/h4>
        <div>{$evento->contenido}</div>
    </div>

EVENTO;
}

?>