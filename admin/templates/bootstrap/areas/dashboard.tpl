<div class="row">
    <div class="col-4">
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
    <div class="col-4">
        {card title="Last Changes.."}
            <ul>
                <li>added [SmartyFunc] - 09.10.2023 [10:30 Uhr]</li>
                <li>added [xmlHelper] - 09.10.2023 [10:00 Uhr]</li>
            </ul>
        {/card}
    </div>
    <div class="col-4">
        {card title="Server-Informations"}
            <div class="row">
                {foreach $serverInfo as $title => $info}
                        <div class="col-3 d-grid">
                            <span class="fw-bold">{$title}:</span>
                        </div>
                        <div class="col-9 d-grid">
                            <span>{$info}</span>
                        </div>
                {/foreach}
            </div>
        {/card}
    </div>
</div>
