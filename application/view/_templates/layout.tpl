
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>{block name=title}Home{/block} | Frendz</title>
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

  
    <link href="{URL}css/font-awesome.min.css" rel="stylesheet">
    <link href="{URL}css/jquery-ui.min.css" rel="stylesheet">
    <link href="{URL}css/style.css" rel="stylesheet">
    
    <script src="{URL}js/jquery.js"></script>
    <script src="{URL}js/jquery-ui.min.js"></script>
    {block name=head}{/block}

</head>
<body>
<div id="container" style="margin: 0px auto; width: 760px;">

        <div id="header" style="background-image: url('{URL}img/header.jpg');">&nbsp;</div>

        <div id="menu">
            {if $smarty.session.user_id|default:FALSE}
            <a title="home" href="{URL}">home</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="my groups" href="{URL}group">my groups</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="my connections" href="{URL}connection">my connections</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="messages" href="{URL}message">messages</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="logout" href="{URL}home/logout">logout</a>
            {else}
            <a title="home" href="{URL}">home</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="about us" href="{URL}site/about">about us</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="register" href="{URL}user/register">register</a>&nbsp;&nbsp; |&nbsp;&nbsp; 
            <a title="login" href="{URL}user/login">login</a>
            {/if}
        </div>

        <div id="box">
            <div id="content">
                <div class="overflow">
                    <div id="textpadding">
                        <h2>frendz - {$module_name|default:home}</h2>
                        {if $message|default:FALSE}
                        <p>{$message}</p>
                        {/if}

                        {block name=body}{/block}
                    </div>

                </div>
            </div>
        </div>

        <div id="footer">created by varun singhal and gaurav sharma. copyrights &copy; 2012.</div>

    </div>

</body>


<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
    var url = "{URL}";
</script>

<!-- our JavaScript -->
<script src="{URL}js/application.js"></script>

</html>
