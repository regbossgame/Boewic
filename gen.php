<?

$tt="";

include "init.php";

include "header.php";


if ($tys[$h]==3){
	$tt.="\n <? include 'txt/".$str[$h].".php'; ?>\n";
}


if ($tys[$h]==1){
//include "content.php";
$tt.=file_get_contents("txt/".$str[$h].".html");
}

if ($tys[$h]==2){
//	echo "txt/".$str[$h].".php|";
include "txt/".$str[$h].".php";
}


// - maket
$tt.="</center></div>

<!-- Yandex.Metrika informer -->
<a href=\"https://metrika.yandex.ru/stat/?id=37456995&amp;from=informer\"
target=\"_blank\" rel=\"nofollow\"><img src=\"https://informer.yandex.ru/informer/37456995/3_1_FFFFFFFF_EFEFEFFF_0_pageviews\"
style=\"width:88px; height:31px; border:0;\" alt=\"Яндекс.Метрика\" title=\"Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)\" onclick=\"try{Ya.Metrika.informer({i:this,id:37456995,lang:'ru'});return false}catch(e){}\" /></a>
<!-- /Yandex.Metrika informer -->
</body>
</html>";

if ($tys[$h]==3){
	file_put_contents($str[$h].".php",$tt);
}else{
	file_put_contents($str[$h].".html",$tt);
}



?>