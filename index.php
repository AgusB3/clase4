<?php
require_once('controladores/funciones.php');
require_once('helpers/dd.php');
$resultado = sumar(100, 20);
$miArray = datos("Amarillo", "Azul", "Rojo", "Azul");
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">

    <title>Programa para PHP</title>
</head>

<body>
    <div class="container-fluid">
        <?php require_once('partials/header.php'); ?>
        <section class="row">
            <article class="col-xs-12 col-md-6 col-lg-4">
                <img class="w-100" src="img/bicycle.jpg" alt="Bicicleta">
            </article>
            <article class="col-xs-12 col-md-6 col-lg-4">
                <img class="w-100" src="img/bicycle1.jpg" alt="Bicicleta">
            </article>
            <article class="col-xs-12 col-md-6 col-lg-4">
                <img class="w-100" src="img/bicycle3.jpg" alt="Bicicleta">
            </article>
        </section>
        <section>
            <h2 class="text-center text-success">Trabajando con Funciones</h2>
            <h2 class="text-center text-danger"><?= $resultado; ?></h2>
        </section>
        <section>
            <hr>

            <h2 class="text-center text-success">Opciones de colores</h2>
            <form action="" class="form-group text-center">
                <select name="colores" id="colores">
                    <option value="#">Seleccione un color</option>
                    <?php foreach ($miArray as $key => $value) : ?>
                        <option value="<?= $key; ?>"><?= $value; ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="btn btn-danger">Enviar</button>
            </form>
        </section>
        <?php include('partials/footer.php'); ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>