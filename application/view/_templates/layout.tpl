<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{block name=title}Home{/block} | Frendz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{URL}css/style.css" rel="stylesheet">
    {block name=head}{/block}

</head>
<body>
    <!-- logo -->
    <div class="logo">
        FRENDZ
    </div>

    <!-- navigation -->
    <div class="navigation">
        {if $smarty.session.user_id|default:FALSE}
        <a href="{URL}">home</a>
        <a href="{URL}group">My Groups</a>
        <a href="{URL}connection">My Connections</a>
        <a href="{URL}message">My Messages</a>
        <a href="{URL}home/logout">Logout</a>
        {else}
        <a href="{URL}">home</a>
        <a href="{URL}site/about">About</a>
        <a href="{URL}user/login">Login</a>
        <a href="{URL}user/register">Register</a>
        {/if}
    </div>

    
    {if $message|default:FALSE}
    {$message}
    {/if}

    <div class="container">
        {block name=body}{/block}
    </div>

    <!-- backlink to repo on GitHub, and affiliate link to Rackspace if you want to support the project -->
    <div class="footer">
        Find <a href="https://github.com/panique/mini">MINI on GitHub</a>.
        If you like the project, support it by <a href="http://tracking.rackspace.com/SH1ES">using Rackspace</a> as your hoster [affiliate link].
    </div>

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "{URL}";
    </script>

    <!-- our JavaScript -->
    <script src="{URL}js/application.js"></script>
</body>
</html>
