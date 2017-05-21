<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     modifier.relativedate.php
 * Type:     modifier
 * Name:     relativedate
 * Purpose:  relative date time modifier
 * -------------------------------------------------------------
 */
function smarty_modifier_relativedate($string)
{
	$time=time();
	$diff_state = '';
	if(!empty($string)){
		$diff = $time - $string;
		if($diff < 60){
			if($diff < 3)
				$diff_state = 'A moment ago';
			else
				$diff_state = $diff.' seconds ago';
		}
		else if($diff >= 60 && $diff < 3600){
			$diff = floor($diff/60);
			if($diff == 1)
				$diff_state = $diff.' minute ago';
			else
				$diff_state = $diff.' minutes ago';
		}
		else if($diff >= 3600 && $diff < 86400){
			$diff = floor($diff/3600);
			if($diff == 1)
				$diff_state = $diff.' hour ago';
			else
				$diff_state = $diff.' hours ago';
		}
		else if($diff >= 86400){
			$diff_state = date('d M, Y  h:i a', $string); 
		}
	}
	return $diff_state;
}
?>