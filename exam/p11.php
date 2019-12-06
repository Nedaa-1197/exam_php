
	<?php
	session_start();
	
    ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="background-color: #85f238; width: 800px; height: 300px; font-size: 30px; padding: 30px; margin-top: 100px; margin-left: 300px;">YOU ARE FINISH THE EXAM YOUR MARK IS :<b> <?php echo $_SESSION['counter']; ?> </b></div>
</body>
</html>