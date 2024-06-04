{if $msgs->isError()}
    <h4>Wystąpiły błędy: </h4>
    <ul style='color: red;'>
    {foreach $msgs->getMessages() as $msg}
        <li>{$msg->text}</li>
    {/foreach}
    </ul>
{/if}