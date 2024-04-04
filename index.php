<?php
    require_once('./php/encabezado.php')
?>

<main>
    <section>
        <h1>Ingreso de Usuario</h1>
    </section>
    <section>
        <form action="php/guardado.php" method="post">
            <section>
                <label for="usu">Ingresar Usuario: </label>
                <input type="text" name="usuario" id="usu">
            </section>
            <section>
                <label for="contra">Ingresar Contraseña: </label>
                <input type="password" name="contraseña" id="contra">
            </section>
            <section>
                <input type="submit" value="Guardar">
            </section>
        </form>
    </section>
</main>

<?php
    require_once('./php/pie.php')
?>