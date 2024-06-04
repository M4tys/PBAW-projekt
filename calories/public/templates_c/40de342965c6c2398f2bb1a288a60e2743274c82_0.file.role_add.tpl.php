<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:16:17
  from 'C:\xampp\htdocs\calories\app\views\role_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e8701d4f2a9_03263325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40de342965c6c2398f2bb1a288a60e2743274c82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\role_add.tpl',
      1 => 1717469300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e8701d4f2a9_03263325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_361579049665e8701d3e3f5_79295924', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477581050665e8701d3fb06_48715140', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_361579049665e8701d3e3f5_79295924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_361579049665e8701d3e3f5_79295924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_477581050665e8701d3fb06_48715140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_477581050665e8701d3fb06_48715140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h4>Dodanie nowej roli</h4><br>
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <hr>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
role_add">
                    <label for="id_rolename">Nazwa Roli: </label>
                    <input type="text" name="rolename" id="id_rolename" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->roleName;?>
"/><br>
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
role_list">Powrót</a></li>
                    </ul>
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
