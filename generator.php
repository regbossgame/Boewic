<?
header("Content-Type: text/html;charset=utf-8");
$str = array();

include "mas.php";


if (file_exists("index.php")){
	unlink("index.php");
}

$tt="AddDefaultCharset cp1251
AddType 'text/html; charset=cp1251' .html .htm .shtml";

file_put_contents(".htaccess",$tt);


/*
$ra=300;
$zag="Information";
$txt="<p>Сайт в стадии разработки!<br>
Зайдите позже</p>
<p><a href='WaryJump_list.php'>WaryJump List Records<a/></p>";
*/

for ($h=0;$h<count($str);$h++){
	include "gen.php";
	echo $str[$h]." - OK<br>";
}


?>

