{DataTable table="ttickets" assign="items"}
<div class="container-fluid">
    <table class="table table-hover border">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Task</th>
            <th scope="col">Prio</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
        </tr>
        </thead>
        <tbody>
        {foreach $items as $item}
        <tr>
            <td>{$item['cTitle']}</td>
            <td>{$item['cContent']}</td>
            <td>{$item['cPrio']}</td>
            <td>{$item['cStatus']}</td>
            <td>{$item['dErstellt']}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>
</div>
