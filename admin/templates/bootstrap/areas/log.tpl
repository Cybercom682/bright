<table class="table table-hover table-sm border">
    <thead>
    <tr>
        <th class="th-sm" scope="col">Handler</th>
        <th scope="col">Type</th>
        <th scope="col">Message</th>
    </tr>
    </thead>
    <tbody>
    {foreach $logValues as $key => $log}
        {LogFormat string=$log assign="logged"}
        <tr class="p-2">
            <td>{$logged['handler']}</td>
            <td>{$logged['type']}</td>
            <td class="w-75">{$logged['message']}</td>
        </tr>
    {/foreach}
    </tbody>
</table>