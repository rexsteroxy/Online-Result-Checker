<?php
//For navigating through the links
function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
        }
    return WWW_ROOT . $script_path;
    }
//for escaping html special characters
function h($string=""){
	return htmlspecialchars($string);
    }

function redirect_to($location){
	header('location:' . $location);
    }
function is_post_request(){
	return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
function is_get_request(){
	return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

function u($string=""){
	return urlencode($string);
}
?>