<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:19:45
  from 'C:\xampp\htdocs\calories\app\views\dish_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e87d1c0ea66_79154741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43958c7c192cc8ee89dfe885277f2da23737dd53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\dish_edit.tpl',
      1 => 1717363634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e87d1c0ea66_79154741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2029234227665e87d1bfee73_61011846', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739243088665e87d1c007d3_84095959', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_2029234227665e87d1bfee73_61011846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_2029234227665e87d1bfee73_61011846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_739243088665e87d1c007d3_84095959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_739243088665e87d1c007d3_84095959',
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
