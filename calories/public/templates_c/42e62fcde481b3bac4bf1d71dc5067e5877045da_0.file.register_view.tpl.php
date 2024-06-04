<?php
/* Smarty version 4.3.4, created on 2024-06-04 02:22:40
  from 'D:\xamp\htdocs\calories\app\views\register_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e5e50bb6400_25036432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42e62fcde481b3bac4bf1d71dc5067e5877045da' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\register_view.tpl',
      1 => 1717460487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e5e50bb6400_25036432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2090889285665e5e50bb0f81_98172924', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_832845485665e5e50bb1670_51646413', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_2090889285665e5e50bb0f81_98172924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_2090889285665e5e50bb0f81_98172924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_832845485665e5e50bb1670_51646413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_832845485665e5e50bb1670_51646413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Rejestracja</h4><br>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">
                    <label for="id_username">Podaj nazwę użytkownika: </label>
                    <input type="text" name="username" id="id_username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
" placeholder="Nazwa użytkownika" /><br>
                    <label for="login">Podaj login: </label>
                    <input type="text" name="login" id="id_login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Login" /><br>
                    <label for="id_pass">Podaj hasło: </label>
                    <input type="password" name="pass" id="id_pass" value="" placeholder="Hasło" /><br>
                    <label for="id_pass_check">Powtórz hasło: </label>
                    <input type="password" name="pass_check" id="id_pass_check" value="" placeholder="Powtórzone hasło" /><br>
                    <label for="id_acc_role">Wybierz rodzaj konta: </label>
                    <select name="acc_role" id="id_acc_role">
                        <option value="3">Użytkownik</option>
                        <option value="2">Dietetyk</option>
                    </select><br>
                    <ul class="actions">
                        <li><input type="submit" value="Zarejestruj" class="primary" /></li>
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
