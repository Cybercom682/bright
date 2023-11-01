<ul class="nav nav-tabs" id="{$id|default:'example-tab'}" role="tablist">
    {foreach $items as $item}
        <li class="nav-item" role="{$item['cSectionName']}">
            <button class="nav-link active" id="{$item['cSectionName']}-tab" data-bs-toggle="tab" data-bs-target="#{$item['cSectionName']}-tab-pane" type="button" role="tab" aria-controls="{$item['cSectionName']}-tab-pane" aria-selected="true">{$item['cSectionName']}</button>
        </li>
    {/foreach}
</ul>
<div class="tab-content" id="{$id|default:'example-tab'}Content">
    {foreach $items as $setting}
        <div class="tab-pane fade show active" id="{$item['cSectionName']}-tab-pane" role="tabpanel" aria-labelledby="{$item['cSectionName']}-tab" tabindex="0">
            <div class="mb-3">
                <label for="{$setting['name']}" class="form-label"><strong>{$setting['cTitle']}</strong></label>
                <input class="form-control" id="{$setting['name']}" type="{$setting['type']}" name="setting[{$setting['name']}]" value="{$setting['value']}">
            </div>
        </div>
    {/foreach}
</div>