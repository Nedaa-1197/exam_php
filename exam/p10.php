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

<form action="submit.php" method="post" style="width:800px; height: 300px; margin-top: 150px; margin-left: 330px; background-color: #e31102;">
	<label style="font-size: 50px; margin-left: 180px;">What is your fav animal?</label><br>
	<input type="radio" name="q1" value="0" style=" margin-left: 290px; margin-top: 20px;"><label style="font-size: 25px;">Lion</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Cat</label>
	<input type="radio" name="q1" value="1"><label style="font-size: 25px;">Fish</label><br>
	<input type="submit" name="btn" value="Next"  style=" margin-left: 350px; margin-top: 100px;">
</form>