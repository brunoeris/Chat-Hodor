<?php 
	session_start();

	include "classes.php";
	if(isset($_POST['ChatText'])){
		$chat = new chats();
		$chat->setChatUserId($_SESSION['UserId']);
		$chat->setChatText($_POST['ChatText']);
		$chat->InsertChatMessage();
	}
 ?>