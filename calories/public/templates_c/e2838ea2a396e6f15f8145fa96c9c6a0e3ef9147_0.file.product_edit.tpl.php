<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:17:39
  from 'C:\xampp\htdocs\calories\app\views\product_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e8753b5aba4_05090366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2838ea2a396e6f15f8145fa96c9c6a0e3ef9147' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\product_edit.tpl',
      1 => 1717435828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e8753b5aba4_05090366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_471320694665e8753990a39_06048899', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951745497665e87539923d9_15349102', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_471320694665e8753990a39_06048899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_471320694665e8753990a39_06048899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1951745497665e87539923d9_15349102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1951745497665e87539923d9_15349102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Produkt</h4><br>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_save">
                    <label for="id_product_name">Nazwa produktu: </label>
                    <input type="text" name="product_name" id="id_product_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->product_name;?>
"/><br>
                    <label for="id_carbohydrates">Węglowodany (w 100g): </label>
                    <input type="text" name="carbohydrates" id="id_carbohydrates" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->carbohydrates;?>
"/><br>
                    <label for="id_proteins">Białko (w 100g): </label>
                    <input type="text" name="proteins" id="id_proteins" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->proteins;?>
"/><br>
                    <label for="id_fats">Tłuszcze (w 100g): </label>
                    <input type="text" name="fats" id="id_fats" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->fats;?>
"/><br>         
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_list">Powrót</a></li>
                    </ul>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
                </form>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
