    <?php
        function conectar (){
            $servidor = 'localhost';
            $usuario = 'root';
            $clave = '';
            $baseDatos = 'apunteclase7';

            set_error_handler(function (){
                throw new Exception("Error");
            });

            try {
                $conexion = mysqli_connect($servidor,$usuario,$clave,$baseDatos);
            } catch (Exception $e) {
                $conexion = false;
                echo '<p> Error, cominiquese con su admin </p>';
            }

            return $conexion;
        }

        function desconectar($conexion){
            if ($conexion) {
                mysqli_close($conexion);
            }else{
                echo '<p> No se puede desconectar, porque no existe conexion </p>';
            }
        }
    ?>