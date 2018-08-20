<?php
/**
 * @package MailTrap
 * @version 1.7
 */
/*
Plugin Name: MailTrap
Plugin URI: http://wearego.io/plugins/MailTrap/
Description: Mail Trap plugin
Author: Denzil Doyle
Version: 1.0
Author URI: http://www.denzildoyle.md
*/

function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '21113dc1557294f3a';
  $phpmailer->Password = '606ed33d48ab85';
}

add_action('phpmailer_init', 'mailtrap');

?>
