<div class="container-fluid border rounded p-3">
    <div class="row">
        <div class="col-4">
            {card type="success" title="Visitors"}
                {alert type="info" message="Momentan nicht gelistet!"}
            {/card}
        </div>
        <div class="col-4">
            {card type="success" title="Last Changes.."}
                <ul>
                    <li>added [SmartyFunc] - 09.10.2023 [10:30 Uhr]</li>
                    <li>added [xmlHelper] - 09.10.2023 [10:00 Uhr]</li>
                </ul>
            {/card}
        </div>
        <div class="col-4">
            {card type="success" title="Server"}
                {foreach $serverInfo as $title => $info}
                    <span class="fw-bold">{$title}:</span>&nbsp;<span>{$info}</span><br>
                {/foreach}
            {/card}
        </div>
    </div>
</div>