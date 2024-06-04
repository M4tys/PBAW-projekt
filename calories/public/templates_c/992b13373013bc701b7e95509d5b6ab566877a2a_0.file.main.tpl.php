<?php
/* Smarty version 4.3.4, created on 2024-06-04 04:47:18
  from 'D:\xamp\htdocs\calories\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e80360cc276_54423111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992b13373013bc701b7e95509d5b6ab566877a2a' => 
    array (
      0 => 'D:\\xamp\\htdocs\\calories\\app\\views\\templates\\main.tpl',
      1 => 1717469175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e80360cc276_54423111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dish Planner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/css/noscript.css" /></noscript>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/functions.js"><?php echo '</script'; ?>
>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<header id="header">
					<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home_view">Dish Planner</a></h1>
					<nav id="nav">
						<ul>
							<li class="special">
								<a href="#menu" class="menuToggle"><span>Menu</span></a>
								<div id="menu">
									<ul>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home_view">Strona główna</a></li>
										<?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
											<li>-- <?php echo $_smarty_tpl->tpl_vars['user']->value["userName"];?>
 --</li>
											<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
person_list">Lista użytkowników</li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
role_list">Lista ról</li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
role_add_show">Dodaj nową rolę</li>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['isDietician']->value) {?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_list">Lista produktów</li>
											<li><a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
product_new'>Dodaj nowy produkt</li>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['isUser']->value || $_smarty_tpl->tpl_vars['isDietician']->value) {?>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dish_list">Dania</li>
											<?php }?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>									
										<?php } else { ?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login_show">Zaloguj</a></li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register_show">Rejestracja</a></li>
										<?php }?>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</header>

				<!-- Banner -->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1118843328665e80360c9647_87240467', 'banner');
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_333872000665e80360ca400_71187732', 'content');
?>


				<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Autor: Bartosz Matysek</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
				$(document).ready(function(){
					$('#changePasswordButton').click(function(){
						$('#passwordFields').toggle();
					});
				});
			<?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'banner'} */
class Block_1118843328665e80360c9647_87240467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1118843328665e80360c9647_87240467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<section id="banner">
						<div class="inner">
							<h2>Witamy w Aplikacji Kalorycznej</h2>
							<p>Nasza aplikacja umożliwia dodawanie produktów do dań<br />
                            oraz obliczanie ich wartości kalorycznej i odżywczej.<br />
                            Dzięki nam z łatwością kontrolujesz swoją dietę!</p>
							<?php if (!(isset($_smarty_tpl->tpl_vars['user']->value))) {?>
							<ul class="actions special">								
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register_show" class="button primary">Stwórz konto</a></li>
							</ul>
							<?php }?>
						</div>
						<a href="#one" class="more scrolly">Czytaj dalej</a>
					</section>
                <?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_333872000665e80360ca400_71187732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_333872000665e80360ca400_71187732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<section id="one" class="wrapper alt style2">
					<section class="spotlight">
						<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/images/dania1.jpg" alt="" /></div><div class="content">
							<h2>Dodawaj Produkty<br />
							i Twórz Dania</h2>
							<p>Dodawaj produkty do swoich dań, a nasza aplikacja automatycznie obliczy<br />
							ich wartość kaloryczną i odżywczą. Dzięki temu łatwiej zaplanujesz zdrową dietę!</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/images/dieta.jpg" alt="" /></div><div class="content">
							<h2>Obliczaj Kalorie<br />
							i Makroskładniki</h2>
							<p>Nasza aplikacja dokładnie oblicza kalorie oraz makroskładniki każdego dania, abyś mógł kontrolować swoje spożycie.</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/assets/images/produkty.jpg" alt="" /></div><div class="content">
						<h2>Duża Baza Produktów<br />
						Stale Dodawana Przez Dietetyków</h2>
						<p>Nasza aplikacja zawiera obszerną bazę produktów spożywczych, która jest regularnie aktualizowana i poszerzana przez profesjonalnych dietetyków, aby zapewnić najbardziej aktualne dane.</p>
						</div>
					</section>
                </section>
				<?php
}
}
/* {/block 'content'} */
}
