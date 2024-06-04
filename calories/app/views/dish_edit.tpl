{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <hr>
                {include file="messages.tpl"}
                <form method="post" action="{$conf->action_root}dish_save">
                    <label for="id_dish_name">Nazwa dania: </label>
                    <input type="text" name="dish_name" id="id_dish_name" value="{$form->dish_name}"/><br>  
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="secondary" /></li>
                        <li><a class="button small" href="{$conf->action_root}dish_list">Powrót</a></li>
                    </ul>
                    <input type="hidden" name="id" value="{$form->idDish}">
                </form>
                <hr>
            </div>
        </section>
    </article>
{/block}