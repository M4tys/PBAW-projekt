<?php
/* Smarty version 4.3.4, created on 2024-06-04 07:09:49
  from 'C:\xampp\htdocs\calories\app\views\product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665ea19dbf3d84_66031070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f280bd04b480068b2de6a0fab5aff919a53a94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\product_list.tpl',
      1 => 1717476108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665ea19dbf3d84_66031070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126901803665ea19dbbfea0_73141439', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1933957973665ea19dbc17b1_13723402', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_126901803665ea19dbbfea0_73141439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_126901803665ea19dbbfea0_73141439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1933957973665ea19dbc17b1_13723402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1933957973665ea19dbc17b1_13723402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\calories\\lib\\smarty\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Filtruj</h4>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_list">
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <label for="login_search"> </label>
                            <input type="text" name="sf_product_name" id="login_search" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
" placeholder="Nazwa produktu"/>
                        </div>
                        <div class="col-4 col-12-small">
                            <ul class="actions stacked">
                                <li><input type="submit" value="Filtruj" class="button primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <h5>Lista produktów</h5>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Nazwa</th>
                                <th>Węglowodany (g)</th>
                                <th>Białko (g)</th>
                                <th>Tłuszcze (g)</th>
                                <th>Kalorie (kcal)</th>
                                <th>Edytuj</th>
                                <th>Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["productName"];?>
</td><td><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['p']->value["carbohydrates"],2);?>
</td><td><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['p']->value["proteins"],2);?>
</td><td><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['p']->value["fats"],2);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["calories"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_edit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProduct'];?>
"><i class="icon solid fa-pen"></i></a></td><td><a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_delete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProduct'];?>
', 'Czy na pewno chcesz usunąć rekord?')"><i class="icon solid fa-trash"></i></a></td></tr>                                                          
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>         
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_list/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
?sf_product_name=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value-1 < 1) {?>class="page disabled"<?php } else { ?>class="prev"<?php }?>><</a>
                    <div class="pages">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_list/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
?sf_product_name=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
" class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_list/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
?sf_product_name=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
" <?php if ($_smarty_tpl->tpl_vars['last']->value == 1) {?>class="page disabled"<?php } else { ?>class="next"<?php }?>>></a>
                </div>                    
            </div>
        </section>
    </article>
<?php
}
}
/* {/block 'content'} */
}
