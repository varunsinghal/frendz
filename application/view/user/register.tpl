{extends file="_templates/layout.tpl"}

{block name=title}Register{/block}
{block name=body}
    <div class="box">
        <h3>Register</h3>
        <form action="<?php echo URL; ?>user/register" method="POST">
        <label>First Name</label>
        <input type="text" name="first_name" value="" required />
        <label>Last Name</label>
        <input type="text" name="last_name" value="" required />
            <label>E-mail</label>
            <input type="text" name="email" value="" required />
            <label>Password</label>
            <input type="password" name="pass" value="" required />

            <input type="checkbox" name="terms" value="Y" required>I agree to the Terms and conditions
            <input type="submit" name="register_user" value="Register" />
        </form>
    </div>
{/block}
