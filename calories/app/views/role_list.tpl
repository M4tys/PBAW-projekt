{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">                       
                <h5>Role</h5>
                <div class="table-wrapper">
                    <hr>
                    <table>
                        <thead>
                            <tr>
                                <th>Nazwa roli</th>
                                <th>Czy aktywna</th>
                                <th>Data stworzenia</th>
                                <th>Dezaktywuj/Aktywuj rolę</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $roles as $r}
                                {strip}
                                    <tr>
                                        <td>{$r["roleName"]}</td>
                                        <td>{if $r["isActive"] == 1}TAK{else}NIE{/if}</td>
                                        <td>{$r["creationDate"]}</td>
                                        {if $r['isActive'] == 1}
                                        <td><a href="{$conf->action_root}role_deactivate/{$r['idRole']}"><i class="icon solid fa-minus"></i></a></td>
                                        {else}
                                        <td><a href="{$conf->action_root}role_activate/{$r['idRole']}"><i class="icon solid fa-plus"></i></a></td>
                                        {/if}
                                    </tr>
                                {/strip}                                                          
                            {/foreach}         
                        </tbody>
                    </table>
                    <hr>
                </div>                       
            </div>
        </section>
    </article>
{/block}