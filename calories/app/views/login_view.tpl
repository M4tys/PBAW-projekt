{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
            {include file="messages.tpl"}
                <h4>Logowanie</h4><br>
                <hr>
                <form method="post" action="{$conf->action_root}login">
                    <label for="id_login">Podaj login: </label>
                    <input type="text" name="login" id="id_login" value="" placeholder="Login" /><br>
                    <label for="id_pass">Podaj hasło: </label>
                    <input type="password" name="pass" id="id_pass" value="" placeholder="Hasło" /><br>
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>
                    </ul>
                </form>
                <hr>
            </div>
        </section>
    </article>
{/block}