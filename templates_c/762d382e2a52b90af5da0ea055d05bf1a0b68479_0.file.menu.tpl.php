<?php
/* Smarty version 3.1.30, created on 2023-05-04 22:43:33
  from "C:\xampp\htdocs\Rieper\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645418f579ab04_82825583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '762d382e2a52b90af5da0ea055d05bf1a0b68479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rieper\\templates\\menu.tpl',
      1 => 1683232901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645418f579ab04_82825583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('headline', "Besonders lecker ");
$_smarty_tpl->_assignInScope('sHeadline', "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
invidunt.");
?>

<?php $_smarty_tpl->_assignInScope('img1', "./img/menu1-min.jpg");
$_smarty_tpl->_assignInScope('img2', "./img/menu2-min.jpg");
$_smarty_tpl->_assignInScope('img3', "./img/menu3-min.jpg");
$_smarty_tpl->_assignInScope('img4', "./img/menu4-min.jpg");
?>


<?php $_smarty_tpl->_assignInScope('name1', "Tortellini");
$_smarty_tpl->_assignInScope('name2', "Kartoffelnocken");
$_smarty_tpl->_assignInScope('name3', "Griesspudding");
$_smarty_tpl->_assignInScope('name4', "Tortellini");
?>

<?php $_smarty_tpl->_assignInScope('desc1', "Der italienische Klassiker zum selber machen.");
$_smarty_tpl->_assignInScope('desc2', "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.");
$_smarty_tpl->_assignInScope('desc3', "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.");
$_smarty_tpl->_assignInScope('desc4', "Der italienische Klassiker zum selber machen.");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1374320799645418f579a2e7_87904688', 'poster');
}
/* {block 'poster'} */
class Block_1374320799645418f579a2e7_87904688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<section class="menu-section">
    <div class="bg-seeds">
        <svg class="seed-svg">
            <use xlink:href="#seeds "></use>
        </svg>
    </div>
    <div class="wrapper central-box">
        <h2 class="headline">
            <?php echo $_smarty_tpl->tpl_vars['headline']->value;?>

        </h2>
        <p class="sub-headline"><?php echo $_smarty_tpl->tpl_vars['sHeadline']->value;?>
</p>
    </div>
    <div class="menu-cataloge">
        <div class="item">
            <div class="img-box">
                <img src=<?php echo $_smarty_tpl->tpl_vars['img1']->value;?>
 class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline"><?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</h5>
                <p class="description"><?php echo $_smarty_tpl->tpl_vars['desc1']->value;?>
</p>
                <div class="rate">
                    <p class="pre-headline">Vorspeise | 20 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="item honest">
            <div class="img-box">
                <img src="<?php echo $_smarty_tpl->tpl_vars['img2']->value;?>
" class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline"><?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
</h5>
                <p class="description"><?php echo $_smarty_tpl->tpl_vars['desc2']->value;?>
</p>
                <div class="rate">
                    <p class="pre-headline">Haupspeiße | 50 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src=<?php echo $_smarty_tpl->tpl_vars['img3']->value;?>
 class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline"><?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</h5>
                <p class="description"><?php echo $_smarty_tpl->tpl_vars['desc3']->value;?>
</p>
                <div class="rate">
                    <p class="pre-headline">Nachspeiße | 10 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="item honest">
            <div class="img-box">
                <img src=<?php echo $_smarty_tpl->tpl_vars['img4']->value;?>
 class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline"><?php echo $_smarty_tpl->tpl_vars['name4']->value;?>
</h5>
                <p class="description"><?php echo $_smarty_tpl->tpl_vars['desc4']->value;?>
</p>
                <div class="rate">
                    <p class="pre-headline">Vorspeise | 20 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>

    </div>
    <div class="dots-box">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>


    </div>
    <a href="" class="simple-link">Alle Rezepte</a>
</section>
<?php
}
}
/* {/block 'poster'} */
}
