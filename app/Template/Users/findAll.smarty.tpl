<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>smartySalute</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">




</head>

<body>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Usuarios en la base de datos</h1>
    </div>
    <div class="well well-small">
        <ul class="list-group">
            <h3 class="text-center">Estos son los usuarios que existen en la base de datos</h3>
            {foreach $user as $value}
                <ul>
                    <li class="list-group-item"> {$value.firstname} {$value.lastname} </li>
                </ul>
            {/foreach}
        </ul>
    </div>
</div>
</body>
</html>