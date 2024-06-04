{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h2>{$form->dish_name}</h2>
                <hr>
                {if $form->dishes}
                <h5>Lista produktów</h5><br>
                <ul class="alt">
                    {foreach $form->dishes as $d}
                        {strip}
                            <li>
                            <div class="row">
                                <div class="col-6 col-12-medium">
                                    <strong>{$d['productName']}</strong> <br>Ilość: {$d['quantity']} gram
                                </div>
                                <div class="col-6 col-12-medium">
                                    <a href="{$conf->action_root}dish_product_delete/{$d['idDish']}/{$d['idProduct']}"><i class="icon solid fa-minus"></i></a>
                                </div>
                            </div>
                            </li>
                        {/strip}
                    {/foreach}
                </ul>
                <hr>
                <ul>
                    <li>Kalorie: {$form->totalCalories|number_format:2} kcal</li>
                    <li>Węglowodany: {$form->totalCarbohydrates|number_format:2} g</li>
                    <li>Białka: {$form->totalProteins|number_format:2} g</li>
                    <li>Tłuszcze: {$form->totalFats|number_format:2} g</li>
                </ul>
                <hr>
                {/if}
                <ul class="actions">
                    <li><a href="{$conf->action_root}product_pick/{$form->idDish}" class="button secondary">DODAJ PRODUKT</a></li>
                    <li><a href="{$conf->action_root}dish_list" class="button secondary">POWRÓT</a></li>
                </ul>
            </div>
        </section>
    </article>
{/block}