<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:16:55
  from 'D:\xamp\htdocs\calories\app\views\dish_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e6b071932c9_11513065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b7d3fa2b5d054eec05ca4b16447d4543be0a63' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\dish_product_list.tpl',
      1 => 1717463809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e6b071932c9_11513065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1877376775665e6b07184ee3_72788574', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1809344446665e6b071857f4_11764673', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1877376775665e6b07184ee3_72788574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1877376775665e6b07184ee3_72788574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1809344446665e6b071857f4_11764673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1809344446665e6b071857f4_11764673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamp\\htdocs\\calories\\lib\\smarty\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
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
                        <li><div class="row"><div class="col-6 col-12-medium"><strong><?php echo $_smarty_tpl->tpl_vars['d']->value['productName'];?>
</strong> <br>Ilość: <?php echo $_smarty_tpl->tpl_vars['d']->value['quantity'];?>
 gram</div><div class="col-6 col-12-medium"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_product_delete/<?php echo $_smarty_tpl->tpl_vars['d']->value['idDish'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['idProduct'];?>
"><i class="icon solid fa-minus"></i></a></div></div></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <hr>
                <ul>
                    <li>Kalorie: <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['form']->value->totalCalories,2);?>
 kcal</li>
                    <li>Węglowodany: <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['form']->value->totalCarbohydrates,2);?>
 g</li>
                    <li>Białka: <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['form']->value->totalProteins,2);?>
 g</li>
                    <li>Tłuszcze: <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['form']->value->totalFats,2);?>
 g</li>
                </ul>
                <hr>
                <?php }?>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_pick/<?php echo $_smarty_tpl->tpl_vars['form']->value->idDish;?>
" class="button secondary">DODAJ PRODUKT</a></li>
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
