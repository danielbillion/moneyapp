<?php
/*
 * Format Date
 */
function formatDate($date){
	$date = date("F j, Y, g:i a",strtotime($date));
	return $date;
}

/*
 * URL Format
 */
function urlFormat($str){
	//Strip out all whitespace
	$str = preg_replace('/\s*/', '', $str);
	//Convert the string to all lowercase
	$str = strtolower($str);
	//URL Encode
	$str = urlencode($str);
	return $str;
}

/*
 * Add classname active if category is active
 */
function is_active($page){
		if(isset($_GET['page'])){
			if($_GET['page'] == $page){
				return 'active';
			} else {
				return '';
			}
		} else {
			if($page == null){
				return 'active';
			}
		}
}

  function shortenText($text, $chars = 50){
	$text = $text." ";
	$text = substr($text, 0, $chars);
	$text = substr($text, 0, strrpos($text,' '));
	$text = $text."...";
	return $text;
  }