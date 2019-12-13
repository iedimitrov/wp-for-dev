<?php
if (!defined('ABSPATH')) exit;
/*
Plugin Name: Whoots
Plugin URI: http://cloudskyhigh.net
description: Whoots
Version: 0.0.1
Author: Ivan Dimitrov
*/

class WhootsPlugin
{
public function __construct()
{
add_action('admin_menu', array($this, 'adminMenu'));
add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
add_action('admin_post', array($this, 'save'));
add_shortcode('whoots-plugin', array($this, 'shortcodeAction'));
}

public function adminMenu()
{
add_options_page(
'Whoots Administration Page',
'Whoots',
'manage_options',
'whoots-admin-page',
array($this, 'renderPage')
);
}

public function renderPage()
{
include_once 'views/admin-page.php';
}

public function enqueueScripts()
{
wp_enqueue_style('whoots-plugin-styles', plugins_url('assets/style.css', __FILE__));
}

public function shortcodeAction()
{
ob_start();
include_once 'views/frontend-page.php';
$html = ob_get_contents();
ob_end_clean();
return $html;
}

public function save()
{
// First, validate the nonce and verify the user as permission to save.
if (!($this->has_valid_nonce() && current_user_can('manage_options'))) {
echo 'Not a valid nonce';
}

if (isset($_POST['whoots-admin-form'])) {
$data = array(
'giphy_code' => $_POST['giphy_code'],
);

update_option('whoots-data', json_encode($data));
}
$this->redirect();
}

public function getOption($name)
{
$data = get_option('whoots-data');
if (empty($data)) {
return false;
}
$data = json_decode($data);
if (isset($data->$name)) {
return stripslashes($data->$name);
}
return false;
}

private function has_valid_nonce()
{
// If the field isn't even in the $_POST, then it's invalid.
if (!isset($_POST['whoots-message'])) {
return false;
}
$field = wp_unslash($_POST['whoots-message']);
$action = 'whoots-save';
return wp_verify_nonce($field, $action);
}

private function redirect()
{
// To make the Coding Standards happy, we have to initialize this.
if (!isset($_POST['_wp_http_referer'])) {
$_POST['_wp_http_referer'] = wp_login_url();
}
// Sanitize the value of the $_POST collection for the Coding Standards.
$url = sanitize_text_field(
wp_unslash($_POST['_wp_http_referer'])
);
// Finally, redirect back to the admin page.
wp_safe_redirect($url);
exit;
}

}

$WhootsPlugin = new WhootsPlugin();

