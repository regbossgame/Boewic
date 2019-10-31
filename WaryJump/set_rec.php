<?

function lohuser($us){
	$rez=1;
	$us=strtoupper($us);
	
	if ($us==""){$rez=0;}
	if ($us==" "){$rez=0;}
	if (strlen($us)<2){$rez=0;}
	
	for ($i=0;$i<strlen($us);$i++){
		$c=$us[$i];
		$k=ord($c);
		if (!((($k>=48)&&($k<=57))||
		(($k>=65)&&($k<=90))||
		($k==64)||
		($k==95)||
		($k==46)||
		($k==32)||
		($k==42)||
		($k==35)||
		($k==45)||
		($k==36))){$rez=0;break;}
		
		/*
		64 - @
		95 - _
		35 - #
		36 - $
		45 - -
		46 - .
		42 - *
		32 - ' '
		*/
	}
	
	if (strpos("A".$us,"  ")>0){$rez=0;}
	if (strpos("A".$us,"<")>0){$rez=0;}
	if (strpos("A".$us,">")>0){$rez=0;}
	if (strpos("A".$us,"?")>0){$rez=0;}
	if (strpos("A".$us,"!")>0){$rez=0;}
	if (strpos("A".$us,"FUCK")>0){$rez=0;}
	if (strpos("A".$us,"ASS")>0){$rez=0;}
	//if (strpos("A".$us,"DICK")>0){$rez=0;}
	if (strpos("A".$us,"SCRIPT")>0){$rez=0;}
	if (strpos("A".$us,"ADMIN")>0){$rez=0;}
	if (strpos("A".$us,"ADMINISTRATOR")>0){$rez=0;}
	if (strpos("A".$us,"BOEWIC")>0){$rez=0;}
	if (strpos("A".$us,"WARYJUMP")>0){$rez=0;}
	if (strpos("A".$us,"WARY JUMP")>0){$rez=0;}
	
	return $rez;
}

$key=$_POST["en"];
$id=$_POST["id"];

$txt="";

if (($key=="EN")&&($id!="")){

include "bd.php";


//$id=$_POST["id"];
$user=$_POST["user"];
$record=$_POST["record"];
$time=$_POST["time"];
$pers=$_POST["pers"];
$loser=$_POST["loser"];
$lang=$_POST["lang"];
$start=$_POST["start"];
$coins=$_POST["coins"];

$k=0;


$sql="SELECT id,record,user,time FROM $base WHERE (id LIKE '$id') LIMIT 1";
        $result = @mysql_query($sql,$db);
        $k=@mysql_num_rows($result);
if ($k>0){
	//$id = @mysql_result($result, 0, "id");
	$rec = @mysql_result($result, 0, "record");
	$nam = @mysql_result($result, 0, "user");	
	$timo = @mysql_result($result, 0, "time");
	
	if (($rec<=$record)||(($rec==$record)&&($time<$timo))){
	
	$sql = "UPDATE $base SET record='$record', time='$time', ip='$ipt', loser='$loser', pers='$pers', lang='$lang', coins='$coins' WHERE id LIKE '$id'";
		$result = @mysql_query("$sql",$db);
	}else{$record=$rec;}
	
$txt= "OK";
}else{
	if ($user==""){$txt="REG";}else{
	$txt="";
	if (lohuser($user)==0){$txt="NOT";}
	//if ($user!=""){
if ($txt==""){	
	$sql="SELECT user FROM $base WHERE (user LIKE '$user') LIMIT 1";
        $result = @mysql_query($sql,$db);
        $k=@mysql_num_rows($result);
		
	if ($k>0){$txt="USED";}
}
	if ($txt==""){
		$t=strtoupper($user[0]);
		$t2=strtolower($user);
		$t2=substr($t2,1,strlen($t2)-1);
		$user=$t.$t2;
		$sql = "INSERT INTO $base (id,user,record,time,ip,pers,loser,lang,start,coins) VALUES('$id','$user','$record','$time','$ipt','$pers','$loser','$lang','$start','$coins')";
		$result = @mysql_query($sql,$db);
		$txt= "OK";
	}
  }
}

//echo "OK";
if ($txt=="OK"){
	$j=0;
	$atxt="";
	$sql="SELECT user,record,time,id FROM $base ORDER BY record DESC, time ASC";
        $result = @mysql_query($sql,$db);
        $k=@mysql_num_rows($result);
		$txt="";
	
	
	
	for ($i=0;$i<$k;$i++){
	$ido = @mysql_result($result, $i, "id");	
	$rec = @mysql_result($result, $i, "record");	
	$time = @mysql_result($result, $i, "time");
	$name= @mysql_result($result, $i, "user");
	
	if ($i<10){
		$txt.=($i+1)."<".$name."<".$rec."<".$time."!";
	}else{
		if ($atxt!=""){break;}
	}
		if ($id==$ido){$j=$i+1;
			$atxt=($j)."<".$name."<".$rec."<".$time."!+";
			if ($i>=10){break;}
		}	
	}
	
	$txt.="".$atxt;
	
}


}

echo $txt;
//echo "LIST LEADER2";
?>