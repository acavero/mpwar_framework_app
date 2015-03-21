<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twig index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Controlador de usuarios</h1>
    </div>
    <div class="well well-small">
        <h2 class="text-center">Con este controlador trasteamos en la base de datos</h2>
    </div>

    <div class="col-md-3"><a href="/users/findAll">Recoger todos los usuarios</a></div>
    <div class="col-md-3"><a href="/users/insertUser">Insertar usuario por nombre</a></div>
    <div class="col-md-3"><a href="/users/deleteUserByName">Eliminar usuario por nombre</a></div>
    <div class="col-md-3"><a href="/users/findUserByName">Buscar un usuario por nombre</a></div>
</div>
</body>
</html>


