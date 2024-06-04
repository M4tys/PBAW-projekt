<?php
/* Smarty version 4.3.4, created on 2024-06-04 05:19:37
  from 'C:\xampp\htdocs\calories\app\views\dish_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e87c92ef3a8_08647040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae1730b50844f0c1b5ad3c04f76d7016690b389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\calories\\app\\views\\dish_list.tpl',
      1 => 1717462728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e87c92ef3a8_08647040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552697055665e87c909f3b1_15051259', 'content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1262967746665e87c92ebfa9_60638631', 'banner');
?>

<?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1731463394665e87c92ecf30_43921766', 'banner');
?>
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1524302222665e87c92ee522_22990033', 'content');
?>
  
<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_552697055665e87c909f3b1_15051259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_552697055665e87c909f3b1_15051259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\calories\\lib\\smarty\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

        <section id="three" class="wrapper style3 special">
            <div class="inner">
                <header class="major">
                    <h2>TWOJE DANIA</h2>
                </header>
                <ul class="features">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dishes']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <li class="icon solid fa-mortar-pestle"><div class="row"><div class="col-6 col-12-medium"><h3><?php echo $_smarty_tpl->tpl_vars['d']->value['dishName'];?>
</h3><?php if ($_smarty_tpl->tpl_vars['d']->value['totalCalories'] > 0) {?><p>Kalorie: <br><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['d']->value['totalCalories'],2);?>
 kcal</p><?php }?></div><div class="col-6 col-12-medium"><ul class="actions"><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['idDish'];?>
"><i class="icon solid fa-pen"></i></a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_product_list/<?php echo $_smarty_tpl->tpl_vars['d']->value['idDish'];?>
"><i class="icon solid fa-bars"></i></a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_delete/<?php echo $_smarty_tpl->tpl_vars['d']->value['idDish'];?>
"><i class="icon solid fa-trash"></i></a></li></ul></div></div></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <a class="button secondary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_new">+ Dodaj danie</a>
            </div>
        </section>
    <?php
}
}
/* {/block 'content'} */
/* {block 'banner'} */
class Block_1262967746665e87c92ebfa9_60638631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1262967746665e87c92ebfa9_60638631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'banner'} */
class Block_1731463394665e87c92ecf30_43921766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1731463394665e87c92ecf30_43921766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="banner">
			<div class="inner">
				<h2>Brak dań</h2>
				    <p>Kliknij w przycisk<br>aby stworzyć danie<br></p>
					<ul class="actions special">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_new" class="button primary">Stwórz</a></li>
					</ul>
			</div>
		</section>
    <?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1524302222665e87c92ee522_22990033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1524302222665e87c92ee522_22990033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
