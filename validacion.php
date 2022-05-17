<style>
    .no_validado {
        font-size: 18px;
        color: #f00;
        font-weight: bold;
    }

    .validado {
        font-size: 18px;
        color: #0c3;
        font-weight: bold;
    }
</style>
<?php

if (isset($_POST["enviando"])) {

    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    if ($usuario == "Juan" && $edad >= 18) {

        echo "<p class='validado'>Puedes entrar</p>";
    } else {
        echo "<p class=\"no_validado\">" . "no puedes entrar" . "</p>";
    }
}


?>