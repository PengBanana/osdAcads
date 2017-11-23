
<?php
/*if(isset($_POST['tri'])){
	$food=$_POST['food'];
	$count=0;
	while(isset($food[$count])){
		echo $food[$count];
		$count++;
	}
}
?>
<form action="tri.php" method="post">
<input type="text" name="food[]" />
<input type="text" name="food[]" />
<input type="text" name="food[]" />
<input type="submit" name="tri">
</form> */

while(isset($schoolname[$count])){
		//INSERT INTO `acadsosd`.`educationalbackground` (`schoolLevel`, `SchoolName`, `yearStarted`, `yearEnded`, `studentIDNumber`) VALUES ('level', 'name', 1, 2, '113');
		//$z="yr";
		$a=$schoolname[$count];
		$b=$schooladdress[$count];
		$c=$schoolyear[$count];
		$part1="INSERT INTO `acadsosd`.`educationalbackground` (`schoolLevel`, `SchoolName`, `schoolYear`, `studentIDNumber`";
		$part2="VALUES ('level', '".$a."', ".$c.", '".$id."';";
		
		$part1.=")";
		$part2.=")";
		$sql=$part1." ".$part2;
		$count++;
	}
	//if(isset($)){
	//}	
	
	
	$part1.=")";
	$part2.=");";
	$sql3=$part1." ".$part2;