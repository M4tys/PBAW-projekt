<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:20:26
  from 'C:\xampp\htdocs\calories\app\views\set_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e87fa4ce283_49010030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74ec4e892c2ecff85c98827fbf50a481da07611f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\set_quantity.tpl',
      1 => 1717465246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e87fa4ce283_49010030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40212928665e87fa4b8673_96986452', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290709083665e87fa4b9b09_73819735', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_40212928665e87fa4b8673_96986452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_40212928665e87fa4b8673_96986452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_290709083665e87fa4b9b09_73819735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_290709083665e87fa4b9b09_73819735',
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
