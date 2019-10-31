<?

if (($_GET['pas']=='wirt')||($ok==1)){

include "bd.php";

$bd=$base;//"WaryJump";

$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);

$sql = "CREATE TABLE ".$bd." (
	id varchar(20) not null,
	user varchar(20) not null,
	record int not null,
	time float(10,1) not null,
	ip varchar(16) not null,
	pers int not null,
	loser int not null,
	lang varchar(5) not null,
	start varchar(11) not null,
	coins int not null
	
)";

   $result = @mysql_query("$sql",$db);
	echo $bd."_rez=".$result."<br>";
	
	$sql="ALTER TABLE $bd ADD UNIQUE(id)";
	$result = @mysql_query("$sql",$db);
		echo "user unic=".$result."<br>";
for ($i=0;$i<20;$i++){
	$sql = "INSERT INTO $bd (id,user,record,time,ip,dop) VALUES('id_".$i."','name_".$i."','".(($i*2)+1)."','".Rand(10,1000).".".Rand(0,9)."','127.0.0.1','')";
	$result = @mysql_query($sql,$db);
}
	//$sql = "INSERT INTO $bd (id,user,record,time,ip,dop) VALUES('22222','Suslik','700','312.81','127.0.0.1','')";
	//$result = @mysql_query($sql,$db);



}

?>