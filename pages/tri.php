
<?php
if(isset($_POST['tri'])){
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
</form>