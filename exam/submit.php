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
<form action="p11.php" method="post">
	<input type="submit" name="submit" value="submit" style="margin-left: 680px; margin-top: 200px; font-size: 30px;">
</form>