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
        <h1 class="text-center">Saludos desde Smarty</h1>
    </div>
    <div class="well well-small">
       <h3>Este controlador tiene el método salute, para usarlo, añádelo a la url, así: /salute/</h3>
        <h3>También puede saludar en Json, para hacerlo, añándelo a la url, así: /jsonsalute/nombre1/nombre2/...</h3>
    </div>
    <div class="row">
        <div class="col-md-6    ">
            <a href="/hello/salute">Método de saludos</a>
        </div>
        <div class="col-md-6">
            <a href="/hello/jsonsalute">Método de saludos en json</a>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
</body>

</html>