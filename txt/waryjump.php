<?
include "WaryJump/bd.php";

$tt="";
$ra=600;//500
$sql="SELECT user,record,time,pers FROM $base ORDER BY record DESC, time ASC LIMIT 100";
        $result = @mysql_query($sql,$db);
        $k=@mysql_num_rows($result);
		$txt.="<table border=0 width=".($ra-20)."px cellpadding=0 cellspacing=0 style='border:0px solid #FFFFFF;font-size:12pt;'>\n";
		$txt.="<tr height=35px>
		<td width=70px align='center'>#</td>
		<td width=5px></td>
		<td width=15px></td>
		<td width=5px></td>
		<td width=200px>Player</td>
		<td width=5px></td>
		<td width=200px>Best</td>
		<td width=5px></td>
		<td>Time (sec)</td>
		</tr>\n
		<tr height=1px><td colspan='9' class='dot'></td></tr>\n";
for($i=0;$i<$k;$i++){
	$txt.="<tr height=30px>\n";
	
	$user=@mysql_result($result, $i, "user");
	$record = @mysql_result($result, $i, "record");
	$time=@mysql_result($result, $i, "time");
	$pers=@mysql_result($result, $i, "pers");
	$txt.="<td align='center'>".($i+1)."</td>
	<td width=5px></td>
	<td><img src='WaryJump/pers/".$pers.".png' width=16px></td>
	<td width=5px></td>
	<td>$user</td>
	<td width=5px></td>
	<td>$record</td>
	<td width=5px></td>
	<td>$time</td>
	</tr>
	<tr height=1px><td class='dot' colspan='9'></td></tr>\n";
}
$txt.="</table>";

if ($k>0){
}else{$txt.="Return later...";}


$txt="<p><center>".$txt."</center></p>";

$tt.="<table border=0><tr><td><img src='res/icons/ico0.png' width='64px' style='margin:10px;'></td>
<td>
<h3>Wary Jump<br>Top 100</h3>
</td>
<td align='center'><a href='https://play.google.com/store/apps/details?id=com.Boewic.WaryJump' target='_blank'><img src='res/google_play.png' width=64px style='margin:10px;' border=0 title='Download Wary Jump on Play Market' alt='Download Wary Jump'/>
<strong><span style='font-size:7pt;'><br>download</span></strong>
</a></td></tr></table>".$txt;
//include "begin.php";
//include "men.php";

//include "content.php";
//$tt.="</div></center>
//</body>
//</html>";

echo $tt;

?>
<br>
<div style='text-align:left;width:600px;'>
<h3>
English version:
</h3>
<p>
Help the characters to reach the top, avoiding water. Jump higher and higher to achieve new records. Compete with other players, become one of the best, but be careful, insidious monsters may prevent you from reaching your aim! 
</p>
<p>
Key features: <br>
- Easy one-touch control; <br>
- Inbuilt table with your's and other players scores; <br>
- Possibility of sharing your achievements with your friends through social web and messengers; <br>
- Variety of funny characters; <br>
- Gradually increasing game difficulty; <br>
- Daily bonuses; <br>
- English and russian language support; <br>
- For all ages. 
<p>
Premium subscription features: <br>
- No advertisement; <br>
- Daily bonuses are doubled; <br>
- Amount of obtained coins is increased in five times; <br>
- Unlimited time of premium subscription; <br>
- Premium subscription doesn't impact to game complexity; <br>
- Premium subscription encourages developers ;) 
</p>
<p>
The game may contain: <br>
- Direct web links, that may lead player away to any web pages; <br>
- Direct references to social web, designed for people above thirteen; <br>
- Possibility of purchasing through the application.
</p>

<br>
<h3>
Русская версия:
</h3>
<p>
Помоги персонажам забраться на вершину, спасаясь от воды. Прыгай все выше и выше, достигая новых рекордов. Соревнуйся с другими игроками, войди в топ лучших игроков мира. Но будь осторожен, коварные монстры будут мешать тебе достичь цели!
</p>
<p>
Особенности игры:<br>
- простое управление в одно нажатие;<br>
- встроенная таблица рейтинга игроков, доступная как в приложении, так и на сайте разработчика boewic.com;<br>
- возможность делиться своими достижениями с друзьями в социальных сетях или мессенджерах;<br>
- разнообразие забавных персонажей;<br>
- плавно нарастающая сложность игры;<br>
- ежедневные игровые бонусы;<br>
- поддержка русского и английского языков;<br>
- игра предназначена для всех возрастных категорий.
</p>
<p>
Особенности платной (премиальной) версии игры:<br>
- премиальную версию можно получить, нажав на кнопку "премиальная версия" в самой игре;<br>
- отсутствие рекламы;<br>
- получение игровых монет увеличено в 5 раз;<br>
- удвоенный ежедневный бонус;<br>
- срок действия премиальной версии не ограничен;<br>
- премиальная версия не влияет на сложность прохождения игры;<br>
- покупая премиальную версию, вы поддерживаете разработчиков;)
</p>
<p>
Игра может содержать:<br>
— прямые интернет-ссылки, которые могут увести игроков из игры на любую веб-страницу;<br>
— прямые ссылки на сайты социальных сетей, предназначенные для лиц старше 13 лет;<br>
— возможность совершать покупки внутри приложения.
</p>
</div>