<?php
	session_start();
	session_destroy();
	session_start();

?>

<form action="p2.php" method="post" style="width:800px; height: 300px; margin-top: 150px; margin-left: 330px; background-color: #f5e5e4;">
	<label style="font-size: 50px; margin-left: 200px;">What is your name?</label><br>
	<input type="radio" name="q1" value="1" style=" margin-left: 250px; margin-top: 20px;"><label style="font-size: 25px;">Nedaa</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Yasmeen</label>
	<input type="radio" name="q1" value="0"><label style="font-size: 25px;">Alaa</label><br>
	<input type="submit" name="btn" value="Next"  style=" margin-left: 350px; margin-top: 100px;">
</form>