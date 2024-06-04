<h5>Lista użytkowników</h5>
    <table class="alt">
        <thead>
            <tr>
                <th>login</th>
                <th>Rola</th>
                <th>Czy aktywny</th>
                <th>Data dezaktywacji</th>
                <th>Aktywuj/ Dezaktywuj</th>
                <th>Edytowany przez (id)</th>
                <th>Data edytcji</th>
                <th>Edytuj</th>
            </tr>
        </thead>
        <tbody>
            {foreach $users as $u}
                {strip}
                    <tr>
                        <td>{$u["login"]}</td>
                        <td>{$u["roleName"]}</td>
                        <td>{if $u["isActive"] == 1}TAK{else}NIE{/if}</td>
                        <td>{if $u["deactivateDate"] == null} - {else}{$u["deactivateDate"]}{/if}</td>
                        {if $u['isActive'] == 1}
                            <td><a href="{$conf->action_root}person_deactivate/{$u['idUser']}"><i class="icon solid fa-minus"></i></a></td>
                        {else}
                            <td><a href="{$conf->action_root}person_activate/{$u['idUser']}"><i class="icon solid fa-plus"></i></a></td>
                        {/if}
                        <td>{if $u["editedBy"] == null} - {else}{$u["editedBy"]}{/if}</td>
                        <td>{if $u["editDate"] == null} - {else}{$u["editDate"]}{/if}</td>
                        <td><a href="{$conf->action_root}person_edit/{$u['idUser']}"><i class="icon solid fa-pen"></i></a></td>
                    </tr>
                {/strip}                                                          
            {/foreach}       
        </tbody>
    </table>