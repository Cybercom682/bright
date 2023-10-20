{if isset($head) && $head === true}
    <form id="{$id}" method="{$method|default:'POST'}">
{/if}
{if isset($foot) && $foot === true}
    {if isset($button) && $button === true}
        <button type="submit" id="save-btn-{$id}"  class="btn btn-{$btnBg|default:'primary'}">{$btnText|default:'Submit'}</button>
    {/if}
</form>
{/if}
