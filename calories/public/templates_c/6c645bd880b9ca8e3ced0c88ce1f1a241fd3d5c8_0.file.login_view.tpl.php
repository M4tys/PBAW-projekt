<?php
/* Smarty version 4.3.4, created on 2024-06-03 01:56:10
  from 'D:\xamp\htdocs\calories\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665d069a15a435_76776227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c645bd880b9ca8e3ced0c88ce1f1a241fd3d5c8' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\login_view.tpl',
      1 => 1717372568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665d069a15a435_76776227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_547749228665d069a1536f6_65783675', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109560672665d069a153f15_51675633', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_547749228665d069a1536f6_65783675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_547749228665d069a1536f6_65783675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_109560672665d069a153f15_51675633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_109560672665d069a153f15_51675633',
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
