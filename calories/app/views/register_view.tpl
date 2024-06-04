{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                {include file="messages.tpl"}
                <h4>Rejestracja</h4><br>
                <form method="post" action="{$conf->action_root}register">
                    <label for="id_username">Podaj nazwę użytkownika: </label>
                    <input type="text" name="username" id="id_username" value="{$form->username}" placeholder="Nazwa użytkownika" /><br>
                    <label for="login">Podaj login: </label>
                    <input type="text" name="login" id="id_login" value="{$form->login}" placeholder="Login" /><br>
                    <label for="id_pass">Podaj hasło: </label>
                    <input type="password" name="pass" id="id_pass" value="" placeholder="Hasło" /><br>
                    <label for="id_pass_check">Powtórz hasło: </label>
                    <input type="password" name="pass_check" id="id_pass_check" value="" placeholder="Powtórzone hasło" /><br>
                    <label for="id_acc_role">Wybierz rodzaj konta: </label>
                    <select name="acc_role" id="id_acc_role">
                        <option value="3">Użytkownik</option>
                        <option value="2">Dietetyk</option>
                    </select><br>
                    <ul class="actions">
                        <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                    </ul>
                </form>
                
            </div>
        </section>
    </article>
{/block}