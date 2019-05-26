<!-- barra lateral  -->
<aside id='sidebar'>
        <div id='login' class="bloque">
            <h3>Identificacion</h3>
            <form action="login.php" method='post'>
                <label for="usuario">Usuario</label>
                <input type="email" name='usuario' />
                <label for="pass">Clave</label>
                <input type="password" name='pass' />
                <input type="submit" value="Entrar">
            </form>
        </div>
        <div id='register' class="bloque">
            <h3>Registrate</h3>
            <form action="registro.php" method='post'>
                <label for="nombre">Nombre</label>
                <input type="text" name='nombre' />
                <label for="apellido">Apellido</label>
                <input type="text" name='apellido' />
                <label for="usuario">Usuario</label>
                <input type="text" name='usuario' />
                <label for="pass">Clave</label>
                <input type="password" name='pass' />
                <input type="submit" value="Registrar">
            </form>
        </div>
    </aside>