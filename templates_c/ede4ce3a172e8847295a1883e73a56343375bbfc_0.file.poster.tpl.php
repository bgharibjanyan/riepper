<?php
/* Smarty version 3.1.30, created on 2023-04-25 15:29:17
  from "C:\xampp\htdocs\Rieper.main\templates\poster.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6447d5ad651ec4_55961309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede4ce3a172e8847295a1883e73a56343375bbfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rieper.main\\templates\\poster.tpl',
      1 => 1682429357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6447d5ad651ec4_55961309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="poster">
    <img src="./img/main_poster.jpg" class="poster-img">



    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="poster-content central-box">
        <div class="wrapper">

            <h1 class="headline">Produkte lorem ipsum dolor sit amet</h1>
            <h4 class="sub-headline">Lorem ipsum dolor sit amet dolorem sit</h4>
            <a href="./../main.php" class="more-link">Mehl für zuhause</a>
        </div>


        <ul class="nav-list">
            <li class="nav-item">
                <div class="marker"></div>
                <a href="" class="link-text">Produktpalette</a>
            </li>
            <li class="nav-item">
                <div class="marker"></div>
                <a href="" class="link-text">Rezept der Woche</a>
            </li>
            <li class="nav-item">
                <div class="marker"></div>
                <a href="" class="link-text">Backhack</a>
            </li>
        </ul>
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
