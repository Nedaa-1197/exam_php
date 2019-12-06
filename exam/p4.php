<?php
session_start();
	if ($_POST['q1']==1) {
	
	if (empty($_SESSION['counter'])) {
				$_SESSION['counter']=1;
			}else{
				$_SESSION['counter']++;
			}		
}
?>

<form action="p5.php" method="post" style="width:800px; height: 300px; margin-top: 150px; margin-left: 330px; background-color: #f7867e;">
	<label style="font-size: 50px; margin-left: 100px;">How many sisters you have?</label><br>
	<input type="radio" name="q1" value="1" style=" margin-left: 250px; margin-top: 20px;"><label style="font-size: 25px;">Four</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Five</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Ten</label><br>
	<input type="submit" name="btn" value="Next"  style=" margin-left: 350px; margin-top: 100px;">
</form>