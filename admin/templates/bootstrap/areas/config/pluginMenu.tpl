{extends file="../../layout/index.tpl"}

{block name="bright-admin-header"}
    <div class="container border mt-5">
        <div class="row p-3">
            {foreach $pluginData as $plugin}
                <div class="col-6 d-grid">
                    <h5 class="text-uppercase"><i class="fa-solid fa-microchip"></i> <strong>{$plugin['cTitle']}</strong></h5>
                    <span><i class="fa-solid fa-at"></i> <strong>Author:</strong> {$plugin['cAuthor']}</span>
                    <span><i class="fa-solid fa-code-compare"></i> <strong>Version:</strong> {$plugin['cVersion']}</span>
                    <span><i class="fa-solid fa-globe"></i> <strong>Website:</strong> {$plugin['cWebsite']}</span>
                    <span><i class="fa-solid fa-certificate"></i> <strong>Licence:</strong> {$plugin['cLicence']}</span>
                    <span><i class="fa-solid fa-folder"></i> <strong>Validate:</strong> {$plugin['cValidate']}</span>
                </div>
                <div class="col-6 border p-3">
                    <span><i class="fa-solid fa-circle-info"></i> <strong>Description:</strong> {$plugin['cDescription']}</span>
                </div>
            {/foreach}
        </div>
    </div>
{/block}
{block name="bright-admin-main-content"}
    <div class="container border p-3 mt-3">
        Content Settings
    </div>
{/block}
{block name="bright-admin-footer"}
    <div class="container border mb-3 p-3 fixed-bottom">
        <button class="btn btn-sm btn-outline-dark w-100" onclick="window.open('../admin','_self')">Back To Backend</button>
    </div>
{/block}