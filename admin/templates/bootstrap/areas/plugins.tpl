{DataTable table="tplugin" assign="items"}
<div class="container-fluid">
    <h5>Installed</h5>
    <table class="table table-hover border">
        <thead>
        <tr>
            <th scope="col">Plugin</th>
            <th scope="col">Description</th>
            <th scope="col">Version</th>
            <th scope="col">Folder</th>
            <th scope="col">Status</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        {foreach $pluginList as $plugin}
            {foreach $items as $item}
                {if $item['cValidate'] === $plugin["@attributes"]['validate']}
                    <tr>
                        <td>{$plugin["@attributes"]['title']}</td>
                        <td>{$plugin["@attributes"]['description']}</td>
                        <td>{$plugin["@attributes"]['version']}</td>
                        <td>{$plugin["@attributes"]['validate']}</td>
                        <td class="mx-auto"><i class="fa-solid fa-check text-success"></i></td>
                        <td>
                            <ul class="nav-bar nav">
                                <li>
                                    <button class="btn btn-sm link-primary border-0" onclick="openPlugin('{$item['kPlugin']}')">
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                {/if}
            {/foreach}
        {/foreach}
        </tbody>
    </table>

    <h5>Available</h5>
    <table class="table table-hover border">
        <thead>
        <tr>
            <th scope="col">Plugin</th>
            <th scope="col">Description</th>
            <th scope="col">Version</th>
            <th scope="col">Folder</th>
            <th scope="col">Status</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        {foreach $pluginList as $plugin}
            {if !in_array($plugin["@attributes"]['validate'],$items)}
                <tr>
                    <td>{$plugin["@attributes"]['title']}</td>
                    <td>{$plugin["@attributes"]['description']}</td>
                    <td>{$plugin["@attributes"]['version']}</td>
                    <td>{$plugin["@attributes"]['validate']}</td>
                    <td class="mx-auto">
                        compatible
                    </td>
                    <td>
                        <ul class="nav-bar nav">
                            <li class="me-2">
                                <button class="btn btn-sm btn-outline-primary" onclick="installPlugin('{$plugin["@attributes"]['validate']}')">
                                    <span>INSTALL</span>
                                </button>
                            </li>
                            <li>
                                <button class="btn btn-sm btn-outline-danger" onclick="deletePlugin('{$plugin["@attributes"]['validate']}')">
                                    <span>DELETE</span>
                                </button>
                            </li>
                        </ul>
                    </td>
                </tr>
            {/if}
        {/foreach}
        </tbody>
    </table>

    <h5>Upload</h5>
    <div class="w-100 border p-3">
        <form id="uploadPluginForm" method="post" enctype="multipart/form-data">
            <div class="row">
                <input type="hidden" name="action" value="upload">
                <input type="hidden" name="handler" value="plugin">
                <div class="form-group d-flex">
                    <div class="col-11">
                        <input type="file" name="pluginZip" id="pluginZip" class="form-control">
                    </div>
                    <div class="col-1 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-outline-dark">Upload Plugin</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function openPlugin(plugin_id){
        if(plugin_id.length > 0){
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = window.location.href;

            var hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'action';
            hiddenInput.value = 'open';

            var hiddenInput2 = document.createElement('input');
            hiddenInput2.type = 'hidden';
            hiddenInput2.name = 'handler';
            hiddenInput2.value = 'plugin';

            var idValue = document.createElement('input');
            idValue.type = 'hidden';
            idValue.name = 'kPlugin';
            idValue.value = plugin_id;

            form.appendChild(hiddenInput);
            form.appendChild(hiddenInput2);
            form.appendChild(idValue);

            document.body.appendChild(form);

            form.submit();
        }
    }
    function installPlugin(plugin_folder){
        if(plugin_folder.length > 0){
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = window.location.href;

            var hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'action';
            hiddenInput.value = 'install';

            var hiddenInput2 = document.createElement('input');
            hiddenInput2.type = 'hidden';
            hiddenInput2.name = 'handler';
            hiddenInput2.value = 'plugin';

            var idValue = document.createElement('input');
            idValue.type = 'hidden';
            idValue.name = 'validate';
            idValue.value = plugin_folder;

            form.appendChild(hiddenInput);
            form.appendChild(hiddenInput2);
            form.appendChild(idValue);

            document.body.appendChild(form);

            form.submit();
        }
    }
    function deletePlugin(plugin_folder){
        if(plugin_folder.length > 0){
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = window.location.href;

            var hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'action';
            hiddenInput.value = 'delete';

            var hiddenInput2 = document.createElement('input');
            hiddenInput2.type = 'hidden';
            hiddenInput2.name = 'handler';
            hiddenInput2.value = 'plugin';

            var idValue = document.createElement('input');
            idValue.type = 'hidden';
            idValue.name = 'validate';
            idValue.value = plugin_folder;

            form.appendChild(hiddenInput);
            form.appendChild(hiddenInput2);
            form.appendChild(idValue);

            document.body.appendChild(form);

            form.submit();
        }
    }
</script>
