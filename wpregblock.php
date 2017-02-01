<?
/*
Plugin Name: wpRegBlock
Plugin URI: https://github.com/Nodws/WpRegBlock/
Description: This plugin prevents spammers from registering with any TLD you list.
Version: 1.0.4
Author: Nodws
Author URI: http://nodws.com/
*/

function wpRegBlock( $sanitized_user_login, $user_email, $errors ) {
    
// Get TLDs from email  
$tld = explode(".", $user_email);
unset($tld[0]); //holds user@domain 
 
// Blocked TLDs  
 $bad = array('ru','nu','in','cn','ir','il','info','cc','tl','tk');

// Check the mofo
 $block = array_intersect($as, $b);
 if(!empty($block))
    exit('<h1>Error 403</h1>'); //Show an error or just blank

//clear? proceed mlady 
 }
add_action( 'register_post', 'wpRegBlock', 10, 3 );
?>
