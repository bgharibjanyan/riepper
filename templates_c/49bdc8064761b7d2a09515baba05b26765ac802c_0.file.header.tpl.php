<?php
/* Smarty version 3.1.30, created on 2023-04-25 15:21:15
  from "C:\xampp\htdocs\Rieper.main\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6447d3cb4f09b7_80056876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49bdc8064761b7d2a09515baba05b26765ac802c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rieper.main\\templates\\header.tpl',
      1 => 1682428776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447d3cb4f09b7_80056876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="header">
    <button class="menu-button">
        <svg class="menu-icon">
            <use xlink:href="#menu"></use>
        </svg>
        <p class="menu-text">Menü</p>
    </button>

    <button class="logo-button">
        <svg class="logo-icon">
            <use xlink:href="#logo"></use>
        </svg>
    </button>
    <div class="header-right">
        <button class="lang-button">
            <p class="text">DE</p>
            <svg class="down-icon">
                <use xlink:href="#to-down"></use>
            </svg>

        </button>
        <button class="shop-button">
            <svg class="shop-icon">
                <use xlink:href="#shop"></use>
            </svg>
            <p class="text">ZUM ONLINESHOP</p>
        </button>
    </div>
</header><?php }
}
