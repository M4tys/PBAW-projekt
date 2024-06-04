{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h3>{$form->product_name}</h3>
                <hr>
                {include file="messages.tpl"}
                <form method="post" action="{$conf->action_root}set_quantity_save">
                    <label for="id_quantity">Ilość w gramach: </label>
                    <input type="text" name="quantity" id="id_quantity"/><br>  
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="secondary" /></li>
                    </ul>
                    <input type="hidden" name="idDish" value="{$form->idDish}">
                    <input type="hidden" name="idProduct" value="{$form->idProduct}">
                </form>
                <hr>
            </div>
        </section>
    </article>
{/block}