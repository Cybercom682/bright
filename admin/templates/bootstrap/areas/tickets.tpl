{DataTable table="ttickets" assign="items"}
<div class="container-fluid p-0">
    <table class="table table-sm table-hover border">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Task</th>
            <th scope="col">Prio</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Options</th>
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
            <td>
                <ul class="nav-bar nav">
                   <li>
                       <button class="btn btn-sm link-primary border-0" onclick="editTicket({$item['kTicket']})">
                           <i class="fa-solid fa-pen-to-square"></i>
                       </button>
                   </li>
                    <li>
                        <button class="btn btn-sm link-danger border-0" onclick="deleteTicket({$item['kTicket']})">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </li>
                </ul>
            </td>
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
        {form id="tForm" method="POST" action="create" handler="ticket"}
            <div class="row">
                <div class="col-12 mb-3 form-group">
                    <label for="t-title" class="form-label">Title:</label>&nbsp;
                    <input id="t-title" class="form-control w-100" name="t_title" placeholder="Title">
                </div>
                <div class="col-6 mb-3 form-group">
                    <label for="t-prio" class="form-label">Prio:</label>&nbsp;
                    <select id="t-prio" class="form-select w-100" name="t_prio" placeholder="Medium">
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>
                </div>
                <div class="col-6 mb-3 form-group">
                    <label for="t-status" class="form-label">Status:</label>&nbsp;
                    <select id="t-status" class="form-select w-100" name="t_status" placeholder="open">
                        <option value="open">Open</option>
                        <option value="closed"></option>
                    </select>
                </div>
                <div class="col-12 mb-3 form-group">
                    <label for="t-task" class="form-label">Task:</label>&nbsp;
                    <textarea class="form-control w-100" id="t-task" name="t_task" placeholder="content..." style="min-height: 150px;"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">create</button>
                </div>
            </div>
        {/form}
    {/modal}
</div>

<script>
    function deleteTicket(id){
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = window.location.href;

        var hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'action';
        hiddenInput.value = 'delete';

        var hiddenInput2 = document.createElement('input');
        hiddenInput2.type = 'hidden';
        hiddenInput2.name = 'handler';
        hiddenInput2.value = 'ticket';

        var idValue = document.createElement('input');
        idValue.type = 'hidden';
        idValue.name = 't_id';
        idValue.value = id;

        form.appendChild(hiddenInput);
        form.appendChild(hiddenInput2);
        form.appendChild(idValue);

        document.body.appendChild(form);

        form.submit();
    }
    function editTicket(id){
        console.log('model to edit: ' + id);
    }
</script>