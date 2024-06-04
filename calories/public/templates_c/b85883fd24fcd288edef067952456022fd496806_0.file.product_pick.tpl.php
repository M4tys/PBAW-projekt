<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:20:31
  from 'D:\xamp\htdocs\calories\app\views\product_pick.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e6bdf399d07_49507573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85883fd24fcd288edef067952456022fd496806' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\product_pick.tpl',
      1 => 1717464027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e6bdf399d07_49507573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_653450995665e6bdf38fcc3_66073355', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418146857665e6bdf390339_18766179', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'banner'} */
class Block_653450995665e6bdf38fcc3_66073355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_653450995665e6bdf38fcc3_66073355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_418146857665e6bdf390339_18766179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_418146857665e6bdf390339_18766179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h4>Filtruj</h4>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_pick/<?php echo $_smarty_tpl->tpl_vars['idDish']->value;?>
?sf_product_name=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
">
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <label for="login_search"> </label>
                            <input type="text" name="sf_product_name" id="login_search" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
" placeholder="Nazwa produktu"/>
                        </div>
                        <div class="col-4 col-12-small">
                            <ul class="actions">
                                <li><input type="submit" value="Filtruj" class="button secondary" /></li>
                                <li><a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_product_list/<?php echo $_smarty_tpl->tpl_vars['idDish']->value;?>
">Powrót</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <br>
                             
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
                                <th>Dodaj</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["carbohydrates"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["proteins"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["fats"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["calories"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_add/<?php echo $_smarty_tpl->tpl_vars['idDish']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProduct'];?>
"><i class="icon solid fa-plus"></i></a></td></tr>                                                          
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
