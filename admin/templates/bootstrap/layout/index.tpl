<!DOCTYPE html>
<html lang="en">
    {block name="bright-admin-head"}
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/x-icon" href="{$templatePath}/assets/media/icon.ico">
            <title>Admin - Bright v1.0.0.1a</title>
            <meta charset="utf-8">
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="{$templatePath}/assets/css/bright.css">
            <script src="{$templatePath}/assets/js/bright.js"></script>
        </head>
    {/block}
    <body>
        {block name="bright-admin-header"}
            {include file="./header.tpl"}
        {/block}
        {block name="bright-admin-main-content"}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mh-90 border-end bg-dark text-white">
                        {include file="../snippets/sidebar.tpl" list=$sidebar pos='tab'}
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="nav-tabContent">
                            {include file="../snippets/sidebar.tpl" list=$sidebar pos='content'}
                        </div>
                    </div>
                </div>
            </div>
        {/block}
        {block name="bright-admin-footer"}
            {include file="./footer.tpl"}
        {/block}
    </body>
</html>