{extends file="_templates/layout.tpl"}

{block name=title}Login{/block}
{block name=body}
<div class="box">
    <h3>Login</h3>
    <form action="{URL}user/login" method="POST">
        <label>E-mail</label>
        <input type="text" name="email" value="" required />
        <label>Password</label>
        <input type="password" name="pass" value="" required />
        <input type="submit" name="login_user" value="Submit" />
    </form>
</div>

{/block}