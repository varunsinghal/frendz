<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.getgravatar.php
 * Type:     function
 * Name:     getgravatar
 * Purpose:  outputs a random magic answer
 * -------------------------------------------------------------
 */
function smarty_function_getgravatar($params, Smarty_Internal_Template $template)
{
	$email = $params["email"];
	if(isset($params["size"])){
		$s = $params["size"];
	}
	else{
		$s = 54;
	}
	$d = 'identicon';
	$r = 'PG';
	$url = 'https://www.gravatar.com/avatar/';
	$url .= md5(strtolower( trim( $email ) ) ) ;
	$url .= "?s=$s&d=$d&r=$r";

	$image = '<img src="' . $url . '" />';

	return $image;

}
?>
