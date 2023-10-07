<!DOCTYPE html>
<html lang="en">
    {block name="bright-admin-head"}
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin - Bright v1.0.0.1a</title>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="{$templatePath}/assets/css/bright.css">
        </head>
    {/block}
    <body>
        {block name="bright-admin-header"}
            {include file="./header.tpl"}
        {/block}
        {block name="bright-admin-main-content"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mh-100 border-end bg-dark text-white">
                        {assign var="list" value=['Dashboard' => 'dashboard.tpl','Template' => 'template.tpl']}
                        {include file="../snippets/sidebar.tpl" list=$list}
                    </div>
                    <div class="col-10">
                        {if isset($list) && !empty($list)}
                            <div class="tab-content" id="nav-tabContent">
                                {foreach $list as $key => $item}
                                    <div class="tab-pane fade show" id="list-{$key}" role="tabpanel" aria-labelledby="list-{$key}-list">{include file="../areas/"|cat:$item}</div>
                                {/foreach}
                            </div>
                        {/if}                    
                    </div>
                </div>
            </div>
        {/block}
        {block name="bright-admin-footer"}
            {include file="./footer.tpl"}
        {/block}
    </body>
</html>