<?
require_once("../core/generatePassword.php");
$length = $_GET['length'];

$pwd = new PasswordGenerator();
$pwd->setPasswordLength($length);
echo ($pwd->generatePassword());
?>