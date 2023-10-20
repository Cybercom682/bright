<table class="table table-hover border">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Plugin</th>
        <th scope="col">Description</th>
        <th scope="col">Version</th>
        <th scope="col">Folder</th>
        <th scope="col">Status</th>
        <th scope="col">Options</th>
    </tr>
    </thead>
    <tbody>
    {foreach $pluginList as $key => $plugin}
        <tr>
            <th scope="row">{$key}</th>
            <td>{$plugin["@attributes"]['title']}</td>
            <td>{$plugin["@attributes"]['description']}</td>
            <td>{$plugin["@attributes"]['version']}</td>
            <td>{$plugin["@attributes"]['validate']}</td>
            <td class="mx-auto"><i class="fa-solid fa-check text-success"></i></td>
            <td>Options at the Future...</td>
        </tr>
    {/foreach}
    </tbody>
</table>

