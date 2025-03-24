<!DOCTYPE html>     
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/principal.css">
    <title>Practica 3</title>
</head>
<body>
    <header>
        <h1>Las escuelas de mi vida</h1>
    </header>
    <main>
        <section>
            <h2>Educacion basica</h2>
                <?php
                include ("./escuelas/kinder.php");
                ?>
                <?php
                include ("./escuelas/primaria.php");
                ?>
                <?php
                include ("./escuelas/secundaria.php");
                ?>
                <h2>Educacion Media Superior</h2>
                <?php
                include ("./escuelas/preparatoria.php");
                ?>
        </section>
    </main>
</body>
</html>
