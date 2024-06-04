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
		<link rel="stylesheet" href="{$conf->action_root}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->action_root}/assets/css/noscript.css" /></noscript>
		<script type="text/javascript" src="{$conf->action_root}/assets/js/functions.js"></script>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<header id="header">
					<h1><a href="{$conf->action_root}home_view">Dish Planner</a></h1>
					<nav id="nav">
						<ul>
							<li class="special">
								<a href="#menu" class="menuToggle"><span>Menu</span></a>
								<div id="menu">
									<ul>
										<li><a href="{$conf->action_root}home_view">Strona główna</a></li>
										{if isset($user)}
											<li>-- {$user["userName"]} --</li>
											{if $isAdmin}
											<li><a href="{$conf->action_root}person_list">Lista użytkowników</li>
											<li><a href="{$conf->action_root}role_list">Lista ról</li>
											<li><a href="{$conf->action_root}role_add_show">Dodaj nową rolę</li>
											{/if}
											{if $isDietician}
											<li><a href="{$conf->action_root}product_list">Lista produktów</li>
											<li><a href='{$conf->action_root}product_new'>Dodaj nowy produkt</li>
											{/if}
											{if $isUser or $isDietician}
												<li><a href="{$conf->action_root}dish_list">Dania</li>
											{/if}
											<li><a href="{$conf->action_root}logout">Wyloguj</a></li>									
										{else}
											<li><a href="{$conf->action_root}login_show">Zaloguj</a></li>
											<li><a href="{$conf->action_root}register_show">Rejestracja</a></li>
										{/if}
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</header>

				<!-- Banner -->
                {block name=banner}
					<section id="banner">
						<div class="inner">
							<h2>Witamy w Aplikacji Kalorycznej</h2>
							<p>Nasza aplikacja umożliwia dodawanie produktów do dań<br />
                            oraz obliczanie ich wartości kalorycznej i odżywczej.<br />
                            Dzięki nam z łatwością kontrolujesz swoją dietę!</p>
							{if !isset($user)}
							<ul class="actions special">								
								<li><a href="{$conf->action_root}register_show" class="button primary">Stwórz konto</a></li>
							</ul>
							{/if}
						</div>
						<a href="#one" class="more scrolly">Czytaj dalej</a>
					</section>
                {/block}

				{block name=content}
				<section id="one" class="wrapper alt style2">
					<section class="spotlight">
						<div class="image"><img src="{$conf->action_root}/assets/images/dania1.jpg" alt="" /></div><div class="content">
							<h2>Dodawaj Produkty<br />
							i Twórz Dania</h2>
							<p>Dodawaj produkty do swoich dań, a nasza aplikacja automatycznie obliczy<br />
							ich wartość kaloryczną i odżywczą. Dzięki temu łatwiej zaplanujesz zdrową dietę!</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="{$conf->action_root}/assets/images/dieta.jpg" alt="" /></div><div class="content">
							<h2>Obliczaj Kalorie<br />
							i Makroskładniki</h2>
							<p>Nasza aplikacja dokładnie oblicza kalorie oraz makroskładniki każdego dania, abyś mógł kontrolować swoje spożycie.</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="{$conf->action_root}/assets/images/produkty.jpg" alt="" /></div><div class="content">
						<h2>Duża Baza Produktów<br />
						Stale Dodawana Przez Dietetyków</h2>
						<p>Nasza aplikacja zawiera obszerną bazę produktów spożywczych, która jest regularnie aktualizowana i poszerzana przez profesjonalnych dietetyków, aby zapewnić najbardziej aktualne dane.</p>
						</div>
					</section>
                </section>
				{/block}

				<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Autor: Bartosz Matysek</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
			</div>

		<!-- Scripts -->
			<script src="{$conf->action_root}/assets/js/jquery.min.js"></script>
			<script src="{$conf->action_root}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->action_root}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->action_root}/assets/js/browser.min.js"></script>
			<script src="{$conf->action_root}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->action_root}/assets/js/util.js"></script>
			<script src="{$conf->action_root}/assets/js/main.js"></script>
			<script>
				$(document).ready(function(){
					$('#changePasswordButton').click(function(){
						$('#passwordFields').toggle();
					});
				});
			</script>

	</body>
</html>