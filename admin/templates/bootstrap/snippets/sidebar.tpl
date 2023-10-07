{if isset($list) && !empty($list)}
    <div class="list-group" id="list-tab" role="tablist">
        {foreach $list as $key => $item}
            <a class="list-group-item list-group-item-action my-1 py-1 rounded" id="list-{$key}-list" data-bs-toggle="list" href="#list-{$key}" role="tab" aria-controls="list-{$key}">{$key}</a>
        {/foreach}
  </div>
{/if}
