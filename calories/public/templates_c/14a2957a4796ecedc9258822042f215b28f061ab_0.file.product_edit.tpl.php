<?php
/* Smarty version 4.3.4, created on 2024-06-03 19:32:29
  from 'D:\xamp\htdocs\calories\app\views\product_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665dfe2dc2f6b5_00053058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14a2957a4796ecedc9258822042f215b28f061ab' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\product_edit.tpl',
      1 => 1717435826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665dfe2dc2f6b5_00053058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1963771085665dfe2dc29e27_45735004', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1594598225665dfe2dc2a477_66984710', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1963771085665dfe2dc29e27_45735004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1963771085665dfe2dc29e27_45735004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1594598225665dfe2dc2a477_66984710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1594598225665dfe2dc2a477_66984710',
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
