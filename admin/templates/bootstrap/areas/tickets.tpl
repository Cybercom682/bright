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

<div class="container-fluid border rounded mt-3 p-3 d-flex justify-content-end">
    <div class="col-4 me-auto my-auto d-flex">
        <span><strong>Ticket Count:</strong></span>&nbsp;
        <div class="border px-2 text-bg-secondary">{$items|count}</div>
    </div>
    {modal btnText="Create Ticket"}
        {assign var="formID" value="ticket_create"}
        {include file="../areas/config/form.tpl" id=$formID head=true}
        {* Hidden Values *}
        {* Setting Values *}
        <div class="row">
            <div class="col-4 mb-3 form-group">
                <label for="t-title" class="form-label">Title:</label>&nbsp;
                <input id="t-title" class="form-control w-100" name="params[title]" placeholder="Title">
            </div>
            <div class="col-4 mb-3 form-group">
                <label for="t-prio" class="form-label">Prio:</label>&nbsp;
                <input id="t-prio" class="form-control w-100" name="params[prio]" placeholder="high/medium/low">
            </div>
            <div class="col-4 mb-3 form-group">
                <label for="t-status" class="form-label">Status:</label>&nbsp;
                <input id="t-status" class="form-control w-100" name="params[status]" placeholder="active">
            </div>
            <div class="col-12 mb-3 form-group">
                <label for="t-task" class="form-label">Task:</label>&nbsp;
                <textarea class="form-control w-100" id="t-task" name="params[task]" placeholder="content..."></textarea>
            </div>
        </div>
        {include file="../areas/config/form.tpl" id=$formID foot=true button=true btnText="Create"}
    {/modal}
</div>