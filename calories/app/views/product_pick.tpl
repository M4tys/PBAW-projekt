{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
            {include file="messages.tpl"}
                <h4>Filtruj</h4>
                <form method="post" action="{$conf->action_root}product_pick/{$idDish}?sf_product_name={$searchForm->product_name}">
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <label for="login_search"> </label>
                            <input type="text" name="sf_product_name" id="login_search" value="{$searchForm->product_name}" placeholder="Nazwa produktu"/>
                        </div>
                        <div class="col-4 col-12-small">
                            <ul class="actions">
                                <li><input type="submit" value="Filtruj" class="button secondary" /></li>
                                <li><a class="button small" href="{$conf->action_root}dish_product_list/{$idDish}">Powrót</a></li>
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
                            {foreach $products as $p}
                                {strip}
                                    <tr>
                                        <td>{$p["productName"]}</td>
                                        <td>{$p["carbohydrates"]}</td>
                                        <td>{$p["proteins"]}</td>
                                        <td>{$p["fats"]}</td>
                                        <td>{$p["calories"]}</td>
                                        <td><a href="{$conf->action_root}product_add/{$idDish}/{$p['idProduct']}"><i class="icon solid fa-plus"></i></a></td>
                                    </tr>
                                {/strip}                                                          
                            {/foreach}         
                        </tbody>
                    </table>
                </div>                       
            </div>
        </section>
    </article>
{/block}