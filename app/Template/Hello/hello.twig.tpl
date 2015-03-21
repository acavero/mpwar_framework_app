<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello world with Twig</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Saludos desde Twig</h1>
    </div>
        <ul class="list-group">
            <h3 class="text-center">Introduce nombres en la url para saludarlos, así: nombre1/nombre2</h3>
            {% for current_param in param %}
            <li class="list-group-item">
                {{ current_param }}
            </li>
            {% endfor %}
        </ul>
    </div>
</body>
</html>