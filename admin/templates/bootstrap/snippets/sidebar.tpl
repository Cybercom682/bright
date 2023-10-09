{if isset($list) && !empty($list)}
    {if isset($pos) && !empty($pos)}
        {if $pos === 'tab'}
            <div class="list-group" id="list-tab" role="tablist">
                {foreach $list as $items}
                    {if isset($items['area'])}
                        {foreach $items['area'] as $areas}
                            {foreach $areas as $area}
                                {if isset($area['section'])}
                                    <span class="mt-2">{$area['section']}</span>
                                    <hr class="my-1">
                                {/if}
                                <a class="list-group-item list-group-item-action my-1 py-1 rounded bg-secondary text-white"
                                   id="list-{$area['title']}-list"
                                   data-bs-toggle="list"
                                   href="#list-{$area['title']}"
                                   role="tab"
                                   aria-controls="list-{$area['title']}">
                                    {$area['title']}
                                </a>
                            {/foreach}
                        {/foreach}
                    {/if}
                {/foreach}
            </div>
        {/if}
        {if $pos === 'content'}
            <div class="tab-content" id="nav-tabContent">
                {foreach $list as $items}
                    {if isset($items['area'])}
                        {foreach $items['area'] as $areas}
                            {foreach $areas as $area}
                                <div class="tab-pane fade show" id="list-{$area['title']}" role="tabpanel" aria-labelledby="list-{$area['title']}-list">
                                    <div class="mt-5">
                                        {if $area['tpl'] === 'true'}
                                            {include file="../areas/"|cat:$area['file']}
                                        {elseif $area['tpl'] === 'false' && isset($area['file'])}
                                            {* Verbesserung geplant! *}
                                            {include file="../docs/"|cat:$area['file']}
                                        {else}
                                            {if isset($area['content'])}
                                                {$area['content']}
                                            {/if}
                                        {/if}
                                    </div>
                                </div>
                            {/foreach}
                        {/foreach}
                    {/if}
                {/foreach}
            </div>
        {/if}
    {/if}
{/if}


