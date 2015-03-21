<?php /* Smarty version Smarty-3.1.21, created on 2015-03-20 08:46:37
         compiled from "../app/Template/Users/userController.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718809529550bcd65c2bc85-09139931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d2492b42f8065284601f720ced7bb264041bae' => 
    array (
      0 => '../app/Template/Users/userController.tpl',
      1 => 1426836935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718809529550bcd65c2bc85-09139931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_550bcd65c93e18_00443258',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bcd65c93e18_00443258')) {function content_550bcd65c93e18_00443258($_smarty_tpl) {?><!DOCTYPE html>
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


<?php }} ?>
