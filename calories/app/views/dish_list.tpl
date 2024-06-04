{extends file="main.tpl"}

{if $count > 0}
    {block name=content}
        <section id="three" class="wrapper style3 special">
            <div class="inner">
                <header class="major">
                    <h2>TWOJE DANIA</h2>
                </header>
                <ul class="features">
                    {foreach $dishes as $d}
                        {strip}
                            <li class="icon solid fa-mortar-pestle">    
                                <div class="row">
                                    <div class="col-6 col-12-medium">
                                        <h3>{$d['dishName']}</h3>
                                        {if $d['totalCalories'] > 0}
                                        <p>Kalorie: <br>{$d['totalCalories']|number_format:2} kcal</p>
                                        {/if}
                                    </div>
                                    <div class="col-6 col-12-medium">
                                        <ul class="actions">
                                            <li><a href="{$conf->action_root}dish_edit/{$d['idDish']}"><i class="icon solid fa-pen"></i></a></li>
                                            <li><a href="{$conf->action_root}dish_product_list/{$d['idDish']}"><i class="icon solid fa-bars"></i></a></li>
                                            <li><a href="{$conf->action_root}dish_delete/{$d['idDish']}"><i class="icon solid fa-trash"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        {/strip}
                    {/foreach}
                </ul>
                <a class="button secondary small" href="{$conf->action_root}dish_new">+ Dodaj danie</a>
            </div>
        </section>
    {/block}

    {block name=banner}{/block}
{else}
    {block name=banner}
        <section id="banner">
			<div class="inner">
				<h2>Brak dań</h2>
				    <p>Kliknij w przycisk<br>aby stworzyć danie<br></p>
					<ul class="actions special">
						<li><a href="{$conf->action_root}dish_new" class="button primary">Stwórz</a></li>
					</ul>
			</div>
		</section>
    {/block}  
    {block name=content} {/block}  
{/if}
