<?php
/* Smarty version 4.3.4, created on 2024-06-04 02:34:48
  from 'D:\xamp\htdocs\calories\app\views\person_list_full_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e6128c10018_63865135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eafd45dbb10723d7b47aa11250a3cadc0852f8d2' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\person_list_full_page.tpl',
      1 => 1717461274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:person_list_table.tpl' => 1,
  ),
),false)) {
function content_665e6128c10018_63865135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1847285714665e6128c0ae58_43844682', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7727526665e6128c0b662_09085121', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1847285714665e6128c0ae58_43844682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1847285714665e6128c0ae58_43844682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_7727526665e6128c0b662_09085121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7727526665e6128c0b662_09085121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h4>Filtruj po loginie</h4>
                <form id="search-form" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_list_part','table'); return false;">
                        <div class="row gtr-uniform">
                        <div class="col-12">
                            <input type="text" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" placeholder="login"/>
                        </div>
                        <div class="col-4 col-12-small">
                            <ul class="actions stacked">
                                <li><input type="submit" value="Filtruj" class="button primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <div id="table" class="table-wrapper">
                    <?php $_smarty_tpl->_subTemplateRender("file:person_list_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
