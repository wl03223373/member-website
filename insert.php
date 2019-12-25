<?php
	if(empty($_POST['id']) or empty($_POST['pw'])){
		echo '資料未確實填寫.';
		exit;
	}

	include 'db_config.php';
	 $str = "SELECT COUNT('id') FROM member where id = '".$_POST['id']."'";
	 $list = mysqli_query($link, $str);
	 list($row) = mysqli_fetch_array($list);

	if($row == 1 ){
		echo '此帳號註冊過.';
		exit;
	}

	$str = "INSERT INTO member (id,pw,email,reg_date)
			VALUES ('".$_POST['id']."','".$_POST['pw']."','".$_POST['email']."',now())";
	mysqli_query($link,$str);
	header("location:regist_ok.php")
?>