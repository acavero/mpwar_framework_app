<?php /* Smarty version Smarty-3.1.21, created on 2015-03-20 08:24:22
         compiled from "../app/Template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974948270550b4cf299acf7-18759368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bfd5532a894aba81c6b4b2fcdd409b1db20cb03' => 
    array (
      0 => '../app/Template/index.tpl',
      1 => 1426836134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974948270550b4cf299acf7-18759368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_550b4cf2a05145_84621322',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b4cf2a05145_84621322')) {function content_550b4cf2a05145_84621322($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twig index</title>
    <link href="bootstrap-3.3.4-dist%202/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Bienvenido al framework</h1>
    </div>
    <div class="well well-small">
        <h2 class="text-center"> Siéntate y disfruta </h2>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <a href="hello">Controlador que saluda</a>
        </div>
        <div class="col-md-6 text-center"><a href="users">Controlador que maneja los usuarios</a>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src=Bootstrap/js/bootstrap.min.js><?php echo '</script'; ?>
>

</body>
</html>



<?php }} ?>
