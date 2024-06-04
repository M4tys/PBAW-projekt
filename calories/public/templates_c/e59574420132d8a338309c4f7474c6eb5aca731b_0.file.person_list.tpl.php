<?php
/* Smarty version 4.3.4, created on 2024-06-03 21:02:11
  from 'D:\xamp\htdocs\calories\app\views\person_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e1333e52762_88509632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e59574420132d8a338309c4f7474c6eb5aca731b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\person_list.tpl',
      1 => 1717441256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e1333e52762_88509632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263318469665e1333e3e382_77578303', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1808341961665e1333e3ee23_41764706', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_1263318469665e1333e3e382_77578303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1263318469665e1333e3e382_77578303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1808341961665e1333e3ee23_41764706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1808341961665e1333e3ee23_41764706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h4>Filtruj po loginie</h4>
                <form id="search-form" onsubmit="ajaxPostForm('search-form';'<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_list_part','person-table'); return false;">
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <label for="login_search"> </label>
                            <input type="text" name="sf_login" id="login_search" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" placeholder="login"/>
                        </div>
                        <div class="col-4 col-12-small">
                            <ul class="actions stacked">
                                <li><input type="submit" value="Filtruj" class="button primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <h5>Lista użytkowników</h5>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th>login</th>
                                <th>Nazwa użykownika</th>
                                <th>Data utworzenia</th>
                                <th>Rola</th>
                                <th>Edytowany przez (id)</th>
                                <th>Data edytcji</th>
                                <th>Edytuj</th>
                                <th>Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                                <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["userName"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["creationDate"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["roleName"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['u']->value["editedBy"] == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['u']->value["editedBy"];
}?></td><td><?php if ($_smarty_tpl->tpl_vars['u']->value["editDate"] == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['u']->value["editDate"];
}?></td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_edit/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
"><i class="icon solid fa-pen"></i></a></td><td><a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
', 'Czy na pewno chcesz usunąć rekord?')"><i class="icon solid fa-trash"></i></a></td></tr>                                                          
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
