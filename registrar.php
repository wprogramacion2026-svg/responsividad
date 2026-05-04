<?php
include("conn.php");

if (isset($_POST['enviar'])) {
    // Validamos que los campos obligatorios no estén vacíos
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['telefono']) >= 1) {
        
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $objetivo = $_POST['objetivo'];
        $horario = $_POST['horario'];
        $plan = $_POST['plan'];

        $consulta = "INSERT INTO prospectos(nombre, email, telefono, objetivo, horario, plan) 
                     VALUES ('$nombre', '$email', '$telefono', '$objetivo', '$horario', '$plan')";
        
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<h3 class='ok'>¡Datos guardados con éxito!</h3>";
        } else {
            echo "<h3 class='bad'>Ups, ocurrió un error: " . mysqli_error($conexion) . "</h3>";
        }
    } else {
        echo "<h3 class='bad'>Por favor, completa los campos obligatorios.</h3>";
    }
}
?>