<?php
/* Smarty version 3.1.30, created on 2023-04-18 15:57:37
  from "C:\xampp\htdocs\anpass\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_643ea1d1de07e4_92598124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3461a3eb604241e8ed8d99f2e374dff899df69f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anpass\\templates\\index.tpl',
      1 => 1681826257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:sprites.tpl' => 1,
    'file:main.tpl' => 1,
  ),
),false)) {
function content_643ea1d1de07e4_92598124 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:sprites.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
