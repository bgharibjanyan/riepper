<?php
/* Smarty version 3.1.30, created on 2023-04-25 16:52:29
  from "C:\xampp\htdocs\Rieper.main\templates\main_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6447e92d9d2dc7_46658136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d83255370aab4e2228c00368bb9198ebe086db8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rieper.main\\templates\\main_index.tpl',
      1 => 1682434349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main-head.tpl' => 1,
    'file:sprites.tpl' => 1,
    'file:main_poster.tpl' => 1,
  ),
),false)) {
function content_6447e92d9d2dc7_46658136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>


        <?php $_smarty_tpl->_subTemplateRender("file:main-head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </head>

    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:sprites.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:main_poster.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

    </html>

</body>

</html><?php }
}
