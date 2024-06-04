{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h4>Dodanie nowej roli</h4><br>
                {include file="messages.tpl"}
                <hr>
                <form method="post" action="{$conf->action_root}role_add">
                    <label for="id_rolename">Nazwa Roli: </label>
                    <input type="text" name="rolename" id="id_rolename" value="{$form->roleName}"/><br>
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="{$conf->action_root}role_list">Powrót</a></li>
                    </ul>
                </form>
                <hr>
            </div>
        </section>
    </article>
{/block}