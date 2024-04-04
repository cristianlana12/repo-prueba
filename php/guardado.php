<?php
    include 'encabezado.php';
?>

<?php
include 'funciones.php';
    if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
        $conexion = conectar();
        if ($conexion) {
            $usu = $_POST['usuario'];
            $contra = sha1($_POST['contraseña']);

            $consulta = 'INSERT INTO apunteclase(usuario, contraseña) 
                         VALUES (?, ?)';

            $sentencia = mysqli_prepare($conexion, $consulta);

            mysqli_stmt_bind_param($sentencia, 'ss' , $usu , $contra);

            $q = mysqli_stmt_execute($sentencia);

            if ($q) {
                echo '<p>Guardado Exitosamente</p>';
            }else{
                echo '<p>Error al guardar</p>';
            }
            desconectar($conexion);

        }
    }else{
        echo '<p>Debe ingresar datos en el formulario</p>';
        header('refresh:3;url=../index.php');
    }
?>

<?php
    include 'pie.php';
?>