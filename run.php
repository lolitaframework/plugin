<?php
/*
Plugin Name: Lolita Framework
Plugin URI: live editor
Description: Lolita framework is a tool to help you develop websites, plugins and web applications faster using WordPress. Using an elegant and simple code syntax, Lolita framework helps you structure and organize your code and allows you to better manage and scale your WordPress websites, plugins and applications.
Version: 1.0
Author: Guriev Eugen
Author URI: https://lolitaframework.com/
License: MIT
Text Domain: lolita
*/

// ==============================================================
// Bootstraping
// ==============================================================
if (! class_exists('\lolita\LolitaFramework')) {
    require_once 'LolitaFramework' . DIRECTORY_SEPARATOR . 'LolitaFramework.php';
}

