<div class="row">
    <div class="col-4 p-3">
        {card title="Visitors"}
            <div class="row">
                <div class="col-3 d-grid">
                    <span class="fw-bold mb-3">Today:</span>
                    <span class="fw-bold mb-3">This Month:</span>
                    <span class="fw-bold mb-3">This Year:</span>
                </div>
                <div class="col-9 d-grid">
                    <span class="badge rounded-pill text-bg-dark mx-auto mb-3">{$visitToday}</span>
                    <span class="badge rounded-pill text-bg-dark mx-auto mb-3">{$visitThisMonth}</span>
                    <span class="badge rounded-pill text-bg-dark mx-auto mb-3">{$visitThisYear}</span>
                </div>
            </div>
        {/card}
    </div>
    <div class="col-4 p-3">
        {card title="Last Changes.."}
            <ul>
                <li>added [SmartyFunc] - 09.10.2023 [10:30 Uhr]</li>
                <li>added [xmlHelper] - 09.10.2023 [10:00 Uhr]</li>
            </ul>
        {/card}
    </div>
    <div class="col-4 p-3">
        {card title="Server-Informations"}
            <div class="row">
                {foreach $serverInfo as $title => $info}
                        <div class="col-4 d-grid">
                            <span class="fw-bold">{$title}:</span>
                        </div>
                        <div class="col-8 d-grid">
                            <span>{$info}</span>
                        </div>
                {/foreach}
            </div>
        {/card}
    </div>
    <div class="col-4 p-3">
        {card title="Open Tickets"}
        {DataTable table="ttickets" assign="items"}
            <table class="table table-sm table-hover border">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Prio</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                {foreach $items as $key => $item}
                    {if $key <= 3}
                    <tr>
                        <td>{$item['cTitle']}</td>
                        <td>{$item['cPrio']}</td>
                        <td>{$item['cStatus']}</td>
                    </tr>
                    {/if}
                {/foreach}
                </tbody>
            </table>
            <div class="w-100">
                <button class="btn btn-outline-dark border-0 btn-sm w-100" onclick="openTab('list-Tickets-list')">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span>show all</span>
                </button>
            </div>
        {/card}
    </div>
    <div class="col-4 p-3">
        {card title="Logs"}
            <table class="table table-hover table-sm border">
                <thead>
                <tr>
                    <th scope="col">Handler</th>
                    <th scope="col">Type</th>
                    <th scope="col">Message</th>
                </tr>
                </thead>
                <tbody>
                {foreach $logValues as $key => $log}
                    {if $key <= 3}
                        {LogFormat string=$log assign="logged"}
                        <tr>
                            <td>{$logged['handler']}</td>
                            <td>{$logged['type']}</td>
                            <td>{$logged['message']}</td>
                        </tr>
                    {/if}
                {/foreach}
                </tbody>
            </table>
            <div class="w-100">
                <button class="btn btn-outline-dark border-0 btn-sm w-100" onclick="openTab('list-Log-list')">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span>show all</span>
                </button>
            </div>
        {/card}
    </div>
</div>
