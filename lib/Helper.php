<?php 
namespace Abit\Lib;
/**
 * Helper Related Class
 */

class Helper{
	
	public static function pri( $data, $hide_adminbar = true ) {
		echo '<pre>';
		if( is_object( $data ) || is_array( $data ) ) {
			print_r( $data );
		}
		else {
			var_dump( $data );
		}
		echo '</pre>';		
	}
}