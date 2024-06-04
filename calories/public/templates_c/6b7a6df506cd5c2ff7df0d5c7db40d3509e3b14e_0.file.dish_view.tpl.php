<?php
/* Smarty version 4.3.4, created on 2024-05-31 19:44:55
  from 'D:\xamp\htdocs\calories\app\views\dish_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665a0c97232d85_04215165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b7a6df506cd5c2ff7df0d5c7db40d3509e3b14e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\dish_view.tpl',
      1 => 1717177493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665a0c97232d85_04215165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_864738072665a0c972285e6_20238264', 'content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1453285246665a0c97231af7_14565528', 'banner');
?>

<?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1929631562665a0c97232461_29047576', 'banner');
?>
    
<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_864738072665a0c972285e6_20238264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_864738072665a0c972285e6_20238264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="three" class="wrapper style3 special">
            <div class="inner">
                <header class="major">
                    <h2>TWOJE DANIA</h2>
                </header>
                <ul class="features">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dishes']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                        <li class="icon solid fa-mortar-pestle"><div class="row"><div class="col-6 col-12-medium"><h3><?php echo $_smarty_tpl->tpl_vars['u']->value['dishName'];?>
</h3></div><div class="col-6 col-12-medium"><a href="#" class="button secondary">Wybierz</a></div></div></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </section>
    <?php
}
}
/* {/block 'content'} */
/* {block 'banner'} */
class Block_1453285246665a0c97231af7_14565528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1453285246665a0c97231af7_14565528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'banner'} */
class Block_1929631562665a0c97232461_29047576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1929631562665a0c97232461_29047576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="banner">
			<div class="inner">
				<h2>Brak dań</h2>
				    <p>Kliknij w przycisk<br>aby stworzyć danie<br></p>
					<ul class="actions special">
						<li><a href="#" class="button primary">Stwórz</a></li>
					</ul>
			</div>
		</section>
    <?php
}
}
/* {/block 'banner'} */
}
