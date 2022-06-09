<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Texturina:opsz,wght@12..72,200&display=swap" rel="stylesheet">

    <title>VIDEOJUEGOS </title>
</head>

<body>
    <!-- cabecera -->

    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                <h1> BLOG DE VIDEOJUEGOS</h1>
            </a>
            <!-- menu -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">inicio</a>
                    </li>
                    <li>
                        <a href="index.php">categoria 1</a>
                    </li>
                    <li>
                        <a href="index.php">categoria 2</a>
                    </li>
                    <li>
                        <a href="index.php">categoria 3</a>
                    </li>
                    <li>
                        <a href="index.php">categoria 4</a>
                    </li>
                    <li>
                        <a href="index.php">sobre mi </a>
                    </li>
                    <li>
                        <a href="index.php">contacto</a>
                    </li>
                </ul>
            </nav>
    </header>
    <div id="contenedor">
        <!-- barra lateral -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>LOGIN</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="text" name="email">

                    <label for="password">password</label>
                    <input type="password" name="password">

                    <input type="submit" value="Ingresar">
                </form>
            </div>
            <div id="registrarse.php" class="boque">
                <h3>REGISTRARSE</h3>
                <form action="registrarse.php" method="POST">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Password</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </aside>
        <!-- caja principal -->
        <div di="principal">
            <h1>Ultimas entradas</h1>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <P>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </P>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <P>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </P>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <P>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </P>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <P>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </P>
            </article>
        </div>
    </div>

    <!-- pie de pagina -->
    <footer id="pie">
        <p>Desarrollado por Andres Ramirez &copy; 2022</p>
    </footer>

</body>

</html>