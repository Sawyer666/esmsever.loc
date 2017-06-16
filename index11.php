<?
spl_autoload_register(function($class){
    include_once "system/libs/".$class.".php";
});

define('BASE_URL','http://esmsever.loc/');
define('ROOT', dirname(__FILE__));

$main=new Main();
?>