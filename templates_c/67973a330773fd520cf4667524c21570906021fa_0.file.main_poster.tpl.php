<?php
/* Smarty version 3.1.30, created on 2023-04-25 17:47:35
  from "C:\xampp\htdocs\Rieper.main\templates\main_poster.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6447f617e7a450_42016111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67973a330773fd520cf4667524c21570906021fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rieper.main\\templates\\main_poster.tpl',
      1 => 1682437654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6447f617e7a450_42016111 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="main-poster">


    <picture class="poster-img">
        <source media="(min-width:724px)" srcset="./img/poster.jpg" class="poster-img">
        <source media="(min-width:10px)" srcset="./img/poster_min.jpg" class="poster-img">
        <img src="./img/poster.jpg" alt="Flowers" class="poster-img">
    </picture>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <div class="poster-content ">
        <div class="left wrapper">
            <h2 class="headline">Mehle für
                zuhause</h2>
        </div>
        <div class="central wrapper">
            <h1 class="headline">Mehle für
                BÄCKER & KÖCHE</h1>
            <p class="sub-headline">Lorem ipsum dolor sit amet, cons etetur sadipscing elitr, sed.</p>
            <a href="*" class="simple-link">DETAILS</a>
        </div>
        <div class="right wrapper">
            <h2 class="headline">Futtermittel für
                Nutztiere</h2>
        </div>
    </div>
</section>
<section class="mobile-menu">
    <button class="menu-button button">

        <p class="button-description">Menu</p>
    </button>
    <button class="shop-button button">
        <svg class="shop-icon">
            <use xlink:href="#black-shop "></use>
        </svg>
        <p class="button-description">ZUM SHOP</p>
    </button>

</section><?php }
}
