{extends file="_templates/layout.tpl"}

{block name=title}Login{/block}
{block name=body}
<div class="sticky">
	<i class="fa fa-sign-in" aria-hidden="true"></i> <b>Login</b>
</div>
<br/>
<form action="{URL}user/login" method="POST">
	<table>
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
			<td><input type="submit" name="login_user" value="Submit" /></td>
		</tr>
	</table>
</form>


{/block}