<?php
/* Smarty version 4.3.4, created on 2024-06-01 02:51:06
  from 'D:\xamp\htdocs\calories\app\views\dish_set_name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665a707adbfd85_04739250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe0aa1daea14eb6a49962ac0e568d948bc45b5d' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\dish_set_name.tpl',
      1 => 1717202914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665a707adbfd85_04739250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1210613788665a707adb69f1_46426772', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1124735880665a707adb74e7_32714648', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1210613788665a707adb69f1_46426772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1210613788665a707adb69f1_46426772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1124735880665a707adb74e7_32714648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1124735880665a707adb74e7_32714648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_save">
                    <label for="id_dish_name">Nazwa dania: </label>
                    <input type="text" name="dish_name" id="id_dish_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dishName;?>
"/><br>  
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_list">Powrót</a></li>
                    </ul>
                </form>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
