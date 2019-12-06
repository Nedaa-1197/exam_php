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

<form action="p10.php" method="post" style="width:800px; height: 300px; margin-top: 150px; margin-left: 330px; background-color: #f22d1f;">
	<label style="font-size: 50px; margin-left: 180px;">What is your fav phone?</label><br>
	<input type="radio" name="q1" value="1" style=" margin-left: 270px; margin-top: 20px;"><label style="font-size: 25px;">Nokia</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Iphone</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Samsung</label><br>
	<input type="submit" name="btn" value="Next"  style=" margin-left: 350px; margin-top: 100px;">
</form>