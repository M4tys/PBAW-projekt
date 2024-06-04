<?php
/* Smarty version 4.3.4, created on 2024-06-01 23:14:59
  from 'D:\xamp\htdocs\calories\app\views\dish_product_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665b8f53766433_25489985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e24ccf668ad7277e4ada41cc8784e2e3cbf81f7b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\dish_product_edit.tpl',
      1 => 1717276498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665b8f53766433_25489985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_496921817665b8f5375acd6_64017235', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1710858297665b8f5375b300_46962719', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_496921817665b8f5375acd6_64017235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_496921817665b8f5375acd6_64017235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1710858297665b8f5375b300_46962719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1710858297665b8f5375b300_46962719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h2><?php echo $_smarty_tpl->tpl_vars['form']->value->dish_name;?>
</h2>
                <hr>
                <?php if ($_smarty_tpl->tpl_vars['form']->value->dishes) {?>
                <h5>Lista produktów</h5><br>
                <ul class="alt">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value->dishes, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <li><strong><?php echo $_smarty_tpl->tpl_vars['d']->value['productName'];?>
</strong> <br>Ilość: <?php echo $_smarty_tpl->tpl_vars['d']->value['quantity'];?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul><br>
                <hr>
                <ul>
                    <li>Kalorie: <?php echo $_smarty_tpl->tpl_vars['form']->value->totalCalories;?>
</li>
                    <li>Węglowodany: <?php echo $_smarty_tpl->tpl_vars['form']->value->totalCarbohydrates;?>
</li>
                    <li>Białka: <?php echo $_smarty_tpl->tpl_vars['form']->value->totalProteins;?>
</li>
                    <li>Tłuszcze: <?php echo $_smarty_tpl->tpl_vars['form']->value->totalFats;?>
</li>
                </ul>
                <hr>
                <?php }?>
                <ul class="actions">
                    <li><a href="#" class="button secondary">DODAJ PRODUKT</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_list" class="button secondary">POWRÓT</a></li>
                </ul>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
