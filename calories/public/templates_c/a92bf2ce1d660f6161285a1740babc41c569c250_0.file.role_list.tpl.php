<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:15:56
  from 'C:\xampp\htdocs\calories\app\views\role_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e86ec1021e8_89915719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92bf2ce1d660f6161285a1740babc41c569c250' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\role_list.tpl',
      1 => 1717469164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e86ec1021e8_89915719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_550359613665e86ec0de203_91170887', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1321080538665e86ec0df6a3_35523658', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_550359613665e86ec0de203_91170887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_550359613665e86ec0de203_91170887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1321080538665e86ec0df6a3_35523658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1321080538665e86ec0df6a3_35523658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">                       
                <h5>Role</h5>
                <div class="table-wrapper">
                    <hr>
                    <table>
                        <thead>
                            <tr>
                                <th>Nazwa roli</th>
                                <th>Czy aktywna</th>
                                <th>Data stworzenia</th>
                                <th>Dezaktywuj/Aktywuj rolę</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["roleName"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['r']->value["isActive"] == 1) {?>TAK<?php } else { ?>NIE<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["creationDate"];?>
</td><?php if ($_smarty_tpl->tpl_vars['r']->value['isActive'] == 1) {?><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
role_deactivate/<?php echo $_smarty_tpl->tpl_vars['r']->value['idRole'];?>
"><i class="icon solid fa-minus"></i></a></td><?php } else { ?><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
role_activate/<?php echo $_smarty_tpl->tpl_vars['r']->value['idRole'];?>
"><i class="icon solid fa-plus"></i></a></td><?php }?></tr>                                                          
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>         
                        </tbody>
                    </table>
                    <hr>
                </div>                       
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
