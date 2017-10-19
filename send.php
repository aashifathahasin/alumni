<?php


if(isset($_GET['email']) && !empty($_GET['email'])) {
	echo "start";
	
}else {
	echo "<b>Select user</b>";
	$user_list = mysql_query("select `id`, `uname` from `alumni`");
	while($run_user = mysql_fetch_array($user_list)) {
		$user = $run_user['id'];
		$uname = $run_user['uname'];
		
		echo "<p><a href='send.php?user=$user'>$uname</a></p>";
	}
     
	}
?>