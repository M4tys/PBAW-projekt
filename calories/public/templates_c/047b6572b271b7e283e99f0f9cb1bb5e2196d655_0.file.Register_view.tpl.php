<?php
/* Smarty version 4.3.4, created on 2024-05-10 15:38:23
  from 'D:\xamp\htdocs\calories\app\views\Register_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663e234fb291a3_25935600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '047b6572b271b7e283e99f0f9cb1bb5e2196d655' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\Register_view.tpl',
      1 => 1715348295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e234fb291a3_25935600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1895594381663e234fb230c0_53287570', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456840403663e234fb23c08_64451205', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1895594381663e234fb230c0_53287570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1895594381663e234fb230c0_53287570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_456840403663e234fb23c08_64451205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_456840403663e234fb23c08_64451205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Page Wrapper --> 
    <div id="page-wrapper">
        <!-- Main -->
        <article id="main">
            <section class="wrapper style5">
                <div class="inner">
                    <section>
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
                            <input type="password" name="passCheck" id="id_pass_check" value="" placeholder="Powtórzone hasło" /><br>
                            <ul class="actions">
                                <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                            </ul>
                        </form>
                    </section>
                </div>
            </section>
        </article>
    </div>
<?php
}
}
/* {/block 'content'} */
}
