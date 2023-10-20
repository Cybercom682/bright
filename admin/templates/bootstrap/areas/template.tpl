<div class="container-fluid border rounded p-3">
    {assign var="formID" value="tpl_saveForm"}
        {* Hidden Values *}
        <input type="hidden" name="tpl_name" value="Bright">
        <input type="hidden" name="tpl_version" value="1.0.0.1a">
        {* Setting Values *}
        <div class="mb-3">
            <label for="inputPassword2" class="form-label">Header</label>
            <select class="form-select">
                <option selected>In Future.....</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
</div>