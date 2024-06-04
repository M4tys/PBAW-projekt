{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                {include file="messages.tpl"}
                <h4>Edycja użytkownika</h4><br>
                <hr>
                <form method="post" action="{$conf->action_root}person_save">
                    <label for="id_username">Nazwa użytkownika: </label>
                    <input type="text" name="username" id="id_username" value="{$form->username}"/><br>
                    <label for="id_login">Login: </label>
                    <input type="text" name="login" id="id_login" value="{$form->login}"/><br>
                    <label for="id_role">Rodzaj konta: </label>         
                    <select name="acc_role" id="id_acc_role">
                        <option value="3" {if $form->rolename == 'user'}selected{/if}>Użytkownik</option>
                        <option value="2" {if $form->rolename == 'dietician'}selected{/if}>Dietetyk</option>
                        <option value="1" {if $form->rolename == 'admin'}selected{/if}>Administrator</option>
                    </select><br>
                    <a class="button primary small" id="changePasswordButton">Zmień hasło</a><br><br>
                    <div id="passwordFields" style="display: none;">
                        <label for="id_pass">Zmiana hasła: </label>
                        <input type="password" name="pass" id="id_pass" value=""/><br>
                        <label for="id_pass_check">Potwierdź hasło: </label>
                        <input type="password" name="pass_check" id="id_pass_check" value=""/><br>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Zapisz" class="primary" /></li>
                        <li><a class="button small" href="{$conf->action_root}person_list">Powrót</a></li>
                    </ul>
                    <input type="hidden" name="id" value="{$form->id}">
                </form>
                <hr>
            </div>
        </section>
    </article>
{/block}