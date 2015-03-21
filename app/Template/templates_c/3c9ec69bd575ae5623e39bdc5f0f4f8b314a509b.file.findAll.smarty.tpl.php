<?php /* Smarty version Smarty-3.1.21, created on 2015-03-20 08:34:56
         compiled from "../app/Template/Users/findAll.smarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607431248550bcda0edf151-35811221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c9ec69bd575ae5623e39bdc5f0f4f8b314a509b' => 
    array (
      0 => '../app/Template/Users/findAll.smarty.tpl',
      1 => 1426803937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607431248550bcda0edf151-35811221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_550bcda10869b2_55536742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550bcda10869b2_55536742')) {function content_550bcda10869b2_55536742($_smarty_tpl) {?><!DOCTYPE html>
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
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <ul>
                    <li class="list-group-item"> <?php echo $_smarty_tpl->tpl_vars['value']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['lastname'];?>
 </li>
                </ul>
            <?php } ?>
        </ul>
    </div>
</div>
</body>
</html><?php }} ?>
