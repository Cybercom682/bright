{if isset($list) && !empty($list)}
    {if isset($pos) && !empty($pos)}
        {if $pos === 'tab'}
            <div class="list-group" id="list-tab" role="tablist">
                {assign var="counter" value=0}
                {foreach $list as $items}
                    {if isset($items->section)}
                        {foreach $items->section as $section}
                                <span class="mt-2">{$section['name']}</span>
                                <hr class="my-1">
                            <div class="p-2 mb-1" style="background: #444;">
                            {foreach $section->area as $key => $area}
                                    <a class="list-group-item list-group-item-action my-1 p-1 ps-2 {if $counter === 0}active{/if} bg-secondary text-white"
                                       id="list-{$area['title']}-list"
                                       data-bs-toggle="list"
                                       href="#list-{$area['title']}"
                                       role="tab"
                                       aria-controls="list-{$area['title']}">
                                        {if isset($area['icon'])}
                                            <i class="{$area['icon']}"></i>
                                        {/if}
                                        {$area['title']}
                                    </a>
                                {assign var="counter" value=$counter+1}
                                {/foreach}
                            </div>
                        {/foreach}
                    {/if}
                {/foreach}
            </div>
        {/if}
        {if $pos === 'content'}
            <div class="tab-content" id="nav-tabContent">
                {assign var="counterTwo" value=0}
                {foreach $list as $items}
                    {if isset($items->section)}
                        {foreach $items->section as $section}
                            {foreach $section->area as $area}
                                <div class="tab-pane fade {if $counterTwo === 0}show active{/if}" id="list-{$area['title']}" role="tabpanel" aria-labelledby="list-{$area['title']}-list">
                                    <div class="mt-5">
                                        {if $area['tpl'] == 'true'}
                                            {include file="../areas/"|cat:$area['file']}
                                        {elseif $area['tpl'] == 'false' && isset($area['file'])}
                                            {* Verbesserung geplant! *}
                                            {include file="../docs/"|cat:$area['file']}
                                        {else}
                                            {if isset($area['content'])}
                                                {$area['content']}
                                            {/if}
                                        {/if}
                                    </div>
                                </div>
                                {assign var="counterTwo" value=$counterTwo+1}
                            {/foreach}
                        {/foreach}
                    {/if}
                {/foreach}
            </div>
        {/if}
    {/if}
{/if}