{extends file="main.tpl"}

{block name=banner}{/block}

{block name=content}
    <article id="main">
        <section class="wrapper style5">
            <div class="inner">
                <h4>Filtruj po loginie</h4>
                <form id="search-form" onsubmit="ajaxPostForm('search-form','{$conf->action_root}person_list_part','table'); return false;">
                        <div class="row gtr-uniform">
                        <div class="col-12">
                            <input type="text" name="sf_login" value="{$searchForm->login}" placeholder="login"/>
                        </div>
                        <div class="col-4 col-12-small">
                            <ul class="actions stacked">
                                <li><input type="submit" value="Filtruj" class="button primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <div id="table" class="table-wrapper">
                    {include file="person_list_table.tpl"}
                </div>
            </div>
        </section>
    </article>
{/block}