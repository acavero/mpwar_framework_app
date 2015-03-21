<?php /* Smarty version Smarty-3.1.21, created on 2015-03-20 07:59:00
         compiled from "../app/Template/userController.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199413217550b4cf4b47fd3-26635697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b715d63766e5cc75b1ac56fc9f6e338022a35438' => 
    array (
      0 => '../app/Template/userController.tpl',
      1 => 1426834809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199413217550b4cf4b47fd3-26635697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_550b4cf4bc2b63_53805550',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b4cf4bc2b63_53805550')) {function content_550b4cf4bc2b63_53805550($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="col-md-3"><a href="/users/insertUserByName">Insertar usuario por nombre</a></div>
    <div class="col-md-3"><a href="/users/deleteUserByName">Eliminar usuario por nombre</a></div>
    <div class="col-md-3"><a href="/users/findUserByName">Buscar un usuario por nombre</a></div>
</div>
</body>
</html>


<?php }} ?>
