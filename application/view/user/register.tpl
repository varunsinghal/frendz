{extends file="_templates/layout.tpl"}

{block name=title}Register{/block}
{block name=body}

<b>Register</b>

<form action="{URL}user/register" method="POST">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" value="{$first_name|default:null}" required /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" value="{$last_name|default:null}" required /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="text" name="email" value="{$email|default:null}" required /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" value="" required /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="terms" value="Y" required>I agree to the Terms &amp; conditions.</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="register_user" value="Register" /></td>
        </tr>
    </table>
</form>
{/block}
