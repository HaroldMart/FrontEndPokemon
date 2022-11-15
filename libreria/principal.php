<?php

session_start();

include('plantilla.php');

// function iniciarSesion($usuario, $clave)
// {
//     $rs = enviarPost('http://localhost/apiPokemon/act/iniciar_sesion.php', array('correo'=>$usuario,'clave'=>$clave));
//     if($rs->exito) {
//         $_SESSION['usuario'] = $rs->datos;
//     }
    
//     return $rs;
// }

function obtenerUsuario($redirect = false) {
    if(isset($_SESSION['usuario'])) {
        return $_SESSION['usuario'];
    } else {

        if($redirect) {
            header('Location: index.php');
            exit();
        } 

       return false;
    }
}

function singin($name,$lastname,$email,$pw){
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost/pokeAPI/actions/registrar_maestro.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('correo' => $email,'clave' => $pw,'nombre' => $name,'apellido' => $lastname),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo"<script>alert('{$response}');</script>";
    header("location: ../index.php");
}

// function enviarPost($url, $data=[])
// {
//     $tmp = [];

//     if(is_object($data)) {

//         foreach($data as $key => $value) {
//             $tmp[$key] = $value;
//         }

//         $data = $tmp;
//     }

//     $curl = curl_init();

//     curl_setopt_array($curl, array(
//         CURLOPT_URL => $url,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => '',
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => 'POST',
//         CURLOPT_POSTFIELDS => $data,
//     ));

//     $response = curl_exec($curl);

//     var_dump($response);

//     exit();
  
//     curl_close($curl);

//     $response = json_decode($response);

//     return $response;

// }


