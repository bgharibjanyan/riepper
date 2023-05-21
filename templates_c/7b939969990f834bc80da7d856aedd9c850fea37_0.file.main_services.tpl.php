<?php
/* Smarty version 3.1.30, created on 2023-04-26 15:48:04
  from "C:\xampp\htdocs\Rieper\templates\main_services.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64492b947260c4_20386485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b939969990f834bc80da7d856aedd9c850fea37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rieper\\templates\\main_services.tpl',
      1 => 1682516882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_64492b947260c4_20386485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202311162464492b94725c71_26370123', "poster");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "poster"} */
class Block_202311162464492b94725c71_26370123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


       <?php $_smarty_tpl->_assignInScope('headline', "Was uns besonders macht ");
$_smarty_tpl->_assignInScope('sHeadline', "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.");
?>

<?php $_smarty_tpl->_assignInScope('img1', "./img/serv1.jpg");
$_smarty_tpl->_assignInScope('img2', "./img/serv2.jpg");
$_smarty_tpl->_assignInScope('img3', "./img/serv3.jpg");
$_smarty_tpl->_assignInScope('img4', "./img/serv4.jpg");
?>


<?php $_smarty_tpl->_assignInScope('name1', "Qualitätsgarantie");
$_smarty_tpl->_assignInScope('name2', "Zuverlässigkeit");
$_smarty_tpl->_assignInScope('name3', "Traditionen leben");
$_smarty_tpl->_assignInScope('name4', "Regionalität");
?>

<?php $_smarty_tpl->_assignInScope('desc1', "Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy.
Eirmod tempor invidunt. Lorem ipsum 
dolor sit amet, consetetur elitr, diam
elitr tempor diam ipsum.");
$_smarty_tpl->_assignInScope('desc2', "Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy.");
$_smarty_tpl->_assignInScope('desc3', "Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy.");
$_smarty_tpl->_assignInScope('desc4', "Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy.");
?>


        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this);
?>
 

<?php
}
}
/* {/block "poster"} */
}
