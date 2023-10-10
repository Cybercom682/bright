<p>
    This powerful function empowers users to purge the entire cache within your application. By executing this action,
    they can ensure that all cached data is removed, which is helpful for keeping the application up-to-date,
    eliminating outdated information, and optimizing performance. With this function, your users maintain control over the cache,
    ensuring that the application runs smoothly and stays current without the need to delve into technical details.
</p>
<div class="container-fluid border rounded p-3">
    {assign var="formID_cache" value="cache_clearForm"}
    {include file="../areas/config/form.tpl" id=$formID_cache head=true}
    {* Hidden Values *}
    <input type="hidden" name="action" value="cache">
    {* Setting Values *}
    {include file="../areas/config/form.tpl" id=$formID_cache foot=true button=true btnText="Clear Cache"}
</div>