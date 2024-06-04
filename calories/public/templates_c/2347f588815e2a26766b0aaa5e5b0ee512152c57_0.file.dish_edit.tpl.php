<?php
/* Smarty version 4.3.4, created on 2024-06-02 23:27:15
  from 'D:\xamp\htdocs\calories\app\views\dish_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665ce3b375a584_09436094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2347f588815e2a26766b0aaa5e5b0ee512152c57' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\dish_edit.tpl',
      1 => 1717363632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665ce3b375a584_09436094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1915213238665ce3b3755815_82925120', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1780592424665ce3b3755e58_33512958', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1915213238665ce3b3755815_82925120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1915213238665ce3b3755815_82925120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1780592424665ce3b3755e58_33512958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1780592424665ce3b3755e58_33512958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <hr>
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_save">
                    <label for="id_dish_name">Nazwa dania: </label>
                    <input type="text" name="dish_name" id="id_dish_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dish_name;?>
"/><br>  
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="secondary" /></li>
                        <li><a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_list">Powrót</a></li>
                    </ul>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idDish;?>
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
