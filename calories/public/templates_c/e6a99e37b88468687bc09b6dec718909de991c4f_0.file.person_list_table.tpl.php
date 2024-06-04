<?php
/* Smarty version 4.3.4, created on 2024-06-04 07:14:01
  from 'C:\xampp\htdocs\calories\app\views\person_list_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665ea299c7e589_50710148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a99e37b88468687bc09b6dec718909de991c4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\person_list_table.tpl',
      1 => 1717478037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665ea299c7e589_50710148 (Smarty_Internal_Template $_smarty_tpl) {
?><h5>Lista użytkowników</h5>
    <table class="alt">
        <thead>
            <tr>
                <th>login</th>
                <th>Rola</th>
                <th>Czy aktywny</th>
                <th>Data dezaktywacji</th>
                <th>Aktywuj/ Dezaktywuj</th>
                <th>Edytowany przez (id)</th>
                <th>Data edytcji</th>
                <th>Edytuj</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["roleName"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['u']->value["isActive"] == 1) {?>TAK<?php } else { ?>NIE<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['u']->value["deactivateDate"] == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['u']->value["deactivateDate"];
}?></td><?php if ($_smarty_tpl->tpl_vars['u']->value['isActive'] == 1) {?><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_deactivate/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
"><i class="icon solid fa-minus"></i></a></td><?php } else { ?><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_activate/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
"><i class="icon solid fa-plus"></i></a></td><?php }?><td><?php if ($_smarty_tpl->tpl_vars['u']->value["editedBy"] == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['u']->value["editedBy"];
}?></td><td><?php if ($_smarty_tpl->tpl_vars['u']->value["editDate"] == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['u']->value["editDate"];
}?></td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_edit/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
"><i class="icon solid fa-pen"></i></a></td></tr>                                                          
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
        </tbody>
    </table><?php }
}
