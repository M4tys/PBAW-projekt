<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:40:52
  from 'D:\xamp\htdocs\calories\app\views\set_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e70a42e4dc5_85872581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a44d93779eb0b763e728eb8316c1471e0a4c605' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\set_quantity.tpl',
      1 => 1717465244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e70a42e4dc5_85872581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_747670432665e70a42dd0c4_00637846', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1843925875665e70a42deba1_09849307', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_747670432665e70a42dd0c4_00637846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_747670432665e70a42dd0c4_00637846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1843925875665e70a42deba1_09849307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1843925875665e70a42deba1_09849307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['form']->value->product_name;?>
</h3>
                <hr>
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
set_quantity_save">
                    <label for="id_quantity">Ilość w gramach: </label>
                    <input type="text" name="quantity" id="id_quantity"/><br>  
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="secondary" /></li>
                    </ul>
                    <input type="hidden" name="idDish" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idDish;?>
">
                    <input type="hidden" name="idProduct" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idProduct;?>
">
                </form>
                <hr>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
