{if isset($list) && !empty($list)}
    {if isset($pos) && !empty($pos)}
        {if $pos === 'tab'}
            <div class="list-group" id="list-tab" role="tablist">
                {foreach $list as $items}
                    {if isset($items->section)}
                        {foreach $items->section as $section}
                                <span class="mt-2">{$section['name']}</span>
                                <hr class="my-1">
                            <div class="p-2 mb-1" style="background: #444;">
                            {foreach $section->area as $area}
                                    <a class="list-group-item list-group-item-action my-1 p-1 bg-secondary text-white"
                                       id="list-{$area['title']}-list"
                                       data-bs-toggle="list"
                                       href="#list-{$area['title']}"
                                       role="tab"
                                       aria-controls="list-{$area['title']}">
                                        {$area['title']}
                                    </a>
                                {/foreach}
                            </div>
                        {/foreach}
                    {/if}
                {/foreach}
            </div>
        {/if}
        {if $pos === 'content'}
            <div class="tab-content" id="nav-tabContent">
                {foreach $list as $items}
                    {if isset($items->section)}
                        {foreach $items->section as $section}
                            {foreach $section->area as $area}
                                <div class="tab-pane fade show" id="list-{$area['title']}" role="tabpanel" aria-labelledby="list-{$area['title']}-list">
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
                            {/foreach}
                        {/foreach}
                    {/if}
                {/foreach}
            </div>
        {/if}
    {/if}
{/if}