{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
            {include file="messages.tpl"}
                <h4>Filtruj</h4>
                <form method="post" action="{$conf->action_root}product_list">
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <label for="login_search"> </label>
                            <input type="text" name="sf_product_name" id="login_search" value="{$searchForm->product_name}" placeholder="Nazwa produktu"/>
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
                            {foreach $products as $p}
                                {strip}
                                    <tr>
                                        <td>{$p["productName"]}</td>
                                        <td>{$p["carbohydrates"]|number_format:2}</td>
                                        <td>{$p["proteins"]|number_format:2}</td>
                                        <td>{$p["fats"]|number_format:2}</td>
                                        <td>{$p["calories"]}</td>
                                        <td><a href="{$conf->action_root}product_edit/{$p['idProduct']}"><i class="icon solid fa-pen"></i></a></td>
                                        <td><a onclick="confirmLink('{$conf->action_root}product_delete/{$p['idProduct']}', 'Czy na pewno chcesz usunąć rekord?')"><i class="icon solid fa-trash"></i></a></td>
                                    </tr>
                                {/strip}                                                          
                            {/foreach}         
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <a href="{$conf->action_root}product_list/{$page-1}?sf_product_name={$searchForm->product_name}" {if $page-1 < 1}class="page disabled"{else}class="prev"{/if}><</a>
                    <div class="pages">
                        <a href="{$conf->action_root}product_list/{$page}?sf_product_name={$searchForm->product_name}" class="page">{$page}</a>
                    </div>
                    <a href="{$conf->action_root}product_list/{$page+1}?sf_product_name={$searchForm->product_name}" {if $last == 1}class="page disabled"{else}class="next"{/if}>></a>
                </div>                    
            </div>
        </section>
    </article>
{/block}