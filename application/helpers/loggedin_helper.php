<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('heading')) {
	function loggedin() {
		$CI =& get_instance();
		
		if($CI->session->userdata('loggedin') == TRUE) {
			return TRUE;
		}
		return FALSE;
	}
}
