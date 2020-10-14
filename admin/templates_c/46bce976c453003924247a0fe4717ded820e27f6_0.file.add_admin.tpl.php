<?php
/* Smarty version 3.1.32, created on 2018-10-24 01:00:16
  from 'D:\OpenServer\domains\smarty\admin\templates\add_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcf99f09d62a1_92928997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bce976c453003924247a0fe4717ded820e27f6' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\add_admin.tpl',
      1 => 1540332016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf99f09d62a1_92928997 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form enctype="multipart/form-data" method="post" action="add_admin.php">
    <h2>ADD your name</h2>
    <input type="text" name="namme">
    <h2>ADD awatar</h2>
    <input type="file" name="awatar">
    <h2>ADD your login</h2>
    <input type="text" name="login">
    <h2>ADD PASSWORD</h2>
    <input type="password" name="password">
    <h2>ADD PASSWORD</h2>
    <input type="password" name="password2"><br>
    <hr>
    <input type="email" name="email" placeholder="email"><br>
    <input type="tel" name="tel" placeholder="tel"><br>
    <select name="prava">
        <option selected value="1" name="prava">Admin</option>
        <option value="2">Operator</option>
    </select><br>
    <input type="submit" name="send"><br>
</form>
</body>
</html><?php }
}
