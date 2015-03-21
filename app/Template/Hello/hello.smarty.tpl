<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>smartySalute</title>
</head>

<body>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Saludos desde Smarty</h1>
    </div>
    <div class="well well-small">
        <ul class="list-group">
                <h3 class="text-center">Introduce nombres en la url para saludarlos, así: nombre1/nombre2</h3>
            {foreach $param as $key=>$value}
                <li class="list-group-item"> Hola: {$value}</li>
            {/foreach}
        </ul>
    </div>
</div>
</body>
</html>