<?php /* Smarty version Smarty-3.1.21, created on 2015-03-19 23:26:51
         compiled from "../app/Template/hello_no_method.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2109218511550b4cd40dc4d6-76680256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e21f30a5d041be0eea8ed4c70c552a178e076b5' => 
    array (
      0 => '../app/Template/hello_no_method.tpl',
      1 => 1426804010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2109218511550b4cd40dc4d6-76680256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_550b4cd414cbc0_03760835',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b4cd414cbc0_03760835')) {function content_550b4cd414cbc0_03760835($_smarty_tpl) {?><!DOCTYPE html>
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
        <div class="col-md-6">
            <a href="/hello/salute">Método de saludos</a>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
</body>

</html><?php }} ?>
