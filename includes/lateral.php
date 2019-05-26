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
            <h3>Register</h3>
            <?php if (!empty($_GET)) { ?>
                <p class="alerta">Registro exitoso</p>
            <?php }?>
            <form action="registro.php" method='post'>
                <label for="name">Name</label>
                <input type="text" name='name' />
                <label for="lastname">Lastname</label>
                <input type="text" name='lastname' />
                <label for="mail">Email</label>
                <input type="email" name='mail' />
                <label for="pass">Password</label>
                <input type="password" name='pass' />
                <input type="submit" value="Register">
            </form>
        </div>
    </aside>