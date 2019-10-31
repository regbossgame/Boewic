<?
$ipt = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : getenv('REMOTE_ADDR')); 

$databasename = "boewic_games";
$databaseuser = "boewic_games";
$databasepasswd = "next2008next2008";
$sqllocal = "localhost";

$base="WaryJump";

   $db = @mysql_connect("$sqllocal", "$databaseuser", "$databasepasswd") or die("Ведутся технические работы, зайдите позже ;(");;
   @mysql_select_db("$databasename",$db);

$rr=@mysql_set_charset("cp1251",$db);
?>