<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:09:40
  from 'C:\xampp\htdocs\calories\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e8574655f35_38515329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96f3a74d6d9a77d9632ba2252b45495147ac42c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\login_view.tpl',
      1 => 1717372570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e8574655f35_38515329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1437997137665e857463f579_21446460', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636570564665e8574641681_66041870', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1437997137665e857463f579_21446460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1437997137665e857463f579_21446460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1636570564665e8574641681_66041870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1636570564665e8574641681_66041870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Logowanie</h4><br>
                <hr>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">
                    <label for="id_login">Podaj login: </label>
                    <input type="text" name="login" id="id_login" value="" placeholder="Login" /><br>
                    <label for="id_pass">Podaj hasło: </label>
                    <input type="password" name="pass" id="id_pass" value="" placeholder="Hasło" /><br>
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>
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
