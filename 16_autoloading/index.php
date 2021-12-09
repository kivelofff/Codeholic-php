<?php
/*
 *
 *
*/

//require_once './app/Email.php';
//require_once './app/Person.php';
// with composer we don't need this imports anymore

require_once "./vendor/autoload.php"; // this imports all namespaces from composer
use app\Email;

$person = new app\Person();
echo '<br>';

$email = new app\Email();

echo '<br>';

$email2 = new Email(); // works with use operator

//composer does autoloading & package management
