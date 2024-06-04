<?php
/* Smarty version 4.3.4, created on 2024-06-03 20:03:19
  from 'D:\xamp\htdocs\calories\app\views\person_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e0567d357c3_29085283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31516dbaed492c5b4f36cffeeac598636ae4f737' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\person_edit.tpl',
      1 => 1717437744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e0567d357c3_29085283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1975929916665e0567d2b0f7_54229561', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1425195242665e0567d2be50_10299908', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1975929916665e0567d2b0f7_54229561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1975929916665e0567d2b0f7_54229561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1425195242665e0567d2be50_10299908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1425195242665e0567d2be50_10299908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Edycja użytkownika</h4><br>
                <hr>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_save">
                    <label for="id_username">Nazwa użytkownika: </label>
                    <input type="text" name="username" id="id_username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
"/><br>
                    <label for="id_login">Login: </label>
                    <input type="text" name="login" id="id_login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/><br>
                    <label for="id_role">Rodzaj konta: </label>         
                    <select name="acc_role" id="id_acc_role">
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['form']->value->rolename == 'user') {?>selected<?php }?>>Użytkownik</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['form']->value->rolename == 'dietician') {?>selected<?php }?>>Dietetyk</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['form']->value->rolename == 'admin') {?>selected<?php }?>>Administrator</option>
                    </select><br>
                    <a class="button primary small" id="changePasswordButton">Zmień hasło</a><br><br>
                    <div id="passwordFields" style="display: none;">
                        <label for="id_pass">Zmiana hasła: </label>
                        <input type="password" name="pass" id="id_pass" value=""/><br>
                        <label for="id_pass_check">Potwierdź hasło: </label>
                        <input type="password" name="pass_check" id="id_pass_check" value=""/><br>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_list">Powrót</a></li>
                    </ul>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
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
