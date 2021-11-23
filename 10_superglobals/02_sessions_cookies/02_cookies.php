<?php
/*
 * Cookies:
 * -manage session
 * -personalization
 * -monitor analytics
 *
 * max size 4 kB
 *
 * 1.set cookies
 * 2.
 */

$cookie_name = "user";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + 86400, '/');
echo $_COOKIE[$cookie_name]?? 'cookie is not set';
// Explain what is cookie

