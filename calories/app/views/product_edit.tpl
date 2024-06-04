{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                {include file="messages.tpl"}
                <h4>Produkt</h4><br>
                <form method="post" action="{$conf->action_root}product_save">
                    <label for="id_product_name">Nazwa produktu: </label>
                    <input type="text" name="product_name" id="id_product_name" value="{$form->product_name}"/><br>
                    <label for="id_carbohydrates">Węglowodany (w 100g): </label>
                    <input type="text" name="carbohydrates" id="id_carbohydrates" value="{$form->carbohydrates}"/><br>
                    <label for="id_proteins">Białko (w 100g): </label>
                    <input type="text" name="proteins" id="id_proteins" value="{$form->proteins}"/><br>
                    <label for="id_fats">Tłuszcze (w 100g): </label>
                    <input type="text" name="fats" id="id_fats" value="{$form->fats}"/><br>         
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="{$conf->action_root}product_list">Powrót</a></li>
                    </ul>
                    <input type="hidden" name="id" value="{$form->id}">
                </form>
            </div>
        </section>
    </article>
{/block}