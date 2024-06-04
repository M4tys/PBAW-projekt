<?php
/* Smarty version 4.3.4, created on 2024-05-27 22:13:45
  from 'D:\xamp\htdocs\calories\app\views\Person_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6654e979b1f1e5_53408680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c373482d2f2f0e14249b41ed75250f470d2ce29f' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\Person_edit.tpl',
      1 => 1716840823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6654e979b1f1e5_53408680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18477165396654e979b16031_57578141', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4007488876654e979b16b16_05340441', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_18477165396654e979b16031_57578141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_18477165396654e979b16031_57578141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_4007488876654e979b16b16_05340441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4007488876654e979b16b16_05340441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Edycja</h4><br>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_edit">
                    <label for="id_username">Nazwa użytkownika: </label>
                    <input type="text" name="username" id="id_username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
"/><br>
                    <label for="login">Login: </label>
                    <input type="text" name="login" id="id_login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/><br>
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
