{extends file="../../layout/index.tpl"}

{block name="bright-admin-header"}
    <div class="container border mt-5">
        <div class="row p-3">
                <div class="col-6 d-grid">
                    <h5 class="text-uppercase"><i class="fa-solid fa-microchip"></i> <strong>{$pluginInfo['cTitle']}</strong></h5>
                    <span><i class="fa-solid fa-at"></i> <strong>Author:</strong> {$pluginInfo['cAuthor']}</span>
                    <span><i class="fa-solid fa-code-compare"></i> <strong>Version:</strong> {$pluginInfo['cVersion']}</span>
                    <span><i class="fa-solid fa-globe"></i> <strong>Website:</strong> {$pluginInfo['cWebsite']}</span>
                    <span><i class="fa-solid fa-certificate"></i> <strong>Licence:</strong> {$pluginInfo['cLicence']}</span>
                    <span><i class="fa-solid fa-folder"></i> <strong>Validate:</strong> {$pluginInfo['cValidate']}</span>
                </div>
                <div class="col-6 border p-3">
                    <span><i class="fa-solid fa-circle-info"></i><strong>Description:</strong></span><br>
                    <div class="ms-3 mt-3 p-2 border-start">
                        <span>{$pluginInfo['cDescription']}</span>
                    </div>
                </div>
        </div>
    </div>
{/block}
{block name="bright-admin-main-content"}
    <div class="container border p-3 mt-3">
        <form id=PluginForm" method="post">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="handler" value="plugin">
            <input type="hidden" name="kPlugin" value="{$pluginInfo['kPlugin']}">
            {foreach $pluginConfig as $setting}
                {if in_array($setting['kPlugin'],$pluginInfo)}
                    {if $setting['type'] === 'checkbox'}
                        {assign var="class" value="form-check-input"}
                    {else}
                        {assign var="class" value="form-control"}
                    {/if}
                    <div class="mb-3">
                        <label for="{$setting['name']}" class="form-label"><strong>{$setting['cTitle']}</strong></label>
                        <input class="{$class}" id="{$setting['name']}" type="{$setting['type']}" name="setting[{$setting['name']}]" value="{$setting['value']}">
                    </div>
                {else}
                    <div class="alert alert-info"><span>No Options...</span></div>
                {/if}
            {/foreach}
            <div class="w-100">
                <button class="btn btn-sm btn-outline-primary w-100"><i class="fa-solid fa-floppy-disk"></i> Save</button>
            </div>
        </form>
    </div>
{/block}
{block name="bright-admin-footer"}
    <div class="container border mb-3 p-3 fixed-bottom">
        <button class="btn btn-sm btn-outline-dark w-100" onclick="window.open('../admin','_self')">Back To Backend</button>
    </div>
{/block}