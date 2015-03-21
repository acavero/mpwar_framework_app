<?php /* Smarty version Smarty-3.1.21, created on 2015-03-19 23:25:49
         compiled from "../app/Template/hello.smarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611202885550b4ced3aba36-93497000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d171a65dd5d3f2e884c803c26c4a374b4893a6d' => 
    array (
      0 => '../app/Template/hello.smarty.tpl',
      1 => 1426803946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611202885550b4ced3aba36-93497000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'param' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_550b4ced489417_50453782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b4ced489417_50453782')) {function content_550b4ced489417_50453782($_smarty_tpl) {?><!DOCTYPE html>
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
        <ul class="list-group">
                <h3 class="text-center">Introduce nombres en la url para saludarlos, así: nombre1/nombre2</h3>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['param']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li class="list-group-item"> Hola: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
            <?php } ?>
        </ul>
    </div>
</div>
</body>

</html><?php }} ?>
