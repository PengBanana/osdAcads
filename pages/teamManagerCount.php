<?php
//SELECT TM.sportCode, TM.teamName, COUNT(SM.teamCode) AS NOM FROM acadsosd.studentmanager SM RIGHT JOIN team TM ON SM.teamCode=TM.sportCode GROUP BY TM.sportCode;
require_once('../osd_connect.php');
$query= "SELECT TM.sportCode, TM.teamName, COUNT(SM.teamCode) AS NOM FROM acadsosd.studentmanager SM RIGHT JOIN team TM ON SM.teamCode=TM.sportCode GROUP BY TM.sportCode;";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$a=$row['sportCode'];
	$b=$row['teamName'];
	$c$row['NOM'];
}
?>