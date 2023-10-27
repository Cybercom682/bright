<div class="w-100 pb-3 border-bottom">
    <div class="form-check form-switch form-check-reverse">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Caching</label>
    </div>
</div>
<p class="py-3">
    This powerful function empowers users to purge the entire cache within your application. By executing this action,
    they can ensure that all cached data is removed, which is helpful for keeping the application up-to-date,
    eliminating outdated information, and optimizing performance. With this function, your users maintain control over the cache,
    ensuring that the application runs smoothly and stays current without the need to delve into technical details.
</p>

{form id="cForm" method="POST" action="cache"}
    <button class="btn btn-outline-dark w-100 btn-sm border-0" type="submit"><i class="fa-solid fa-trash"></i> clear cache</button>
{/form}
