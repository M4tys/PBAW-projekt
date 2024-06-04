<?php
/* Smarty version 4.3.4, created on 2024-06-03 21:27:23
  from 'D:\xamp\htdocs\calories\app\views\person_list_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e191b71a858_74023682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25547b5e42362c752f983a5c3643c8a3c92b361e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\person_list_table.tpl',
      1 => 1717442838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e191b71a858_74023682 (Smarty_Internal_Template $_smarty_tpl) {
?><h5>Lista użytkowników</h5>
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
    </table><?php }
}
