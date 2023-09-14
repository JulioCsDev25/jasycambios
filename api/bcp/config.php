<?php
// 192.168.95.218 181.123.12.3
$db = [
    'host' => '192.168.95.11',
    'port' => '5432',
    'username' => 'restqr',
    'password' => 'rest2020*/',
    'db' => 'bcp_dna',
];

$db2 = [
    'host' => '192.168.95.11',
    'port' => '5432',
    'username' => 'restqr',
    'password' => 'rest2020*/',
    'db' => 'cmb3038_matriz',
];

$_POST=addslashes__recursive($_POST);
$_GET=addslashes__recursive($_GET);
$_REQUEST=addslashes__recursive($_REQUEST);
$_SERVER=addslashes__recursive($_SERVER);
$_COOKIE=addslashes__recursive($_COOKIE);

function addslashes__recursive($var){
    if (!is_array($var))
        return addslashes($var);
    $new_var = array();
    foreach ($var as $k => $v)
        $new_var[addslashes($k)]=addslashes__recursive($v);
    return $new_var;
}
?>