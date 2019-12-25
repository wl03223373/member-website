<?php
session_start();
if(empty($_SESSION['id'])){
?>
<script language='javascript'>
	alert('請先登入!!!');
	history.go(-1);
</script>
<?php } ?> 
<?php
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
include 'db_config.php';
// include 'check.php';
$str = "SELECT email,reg_date FROM member where id='".$id."' and pw='".$pw."'";
$list = mysqli_query($link,$str);
list($email,$reg_date) = mysqli_fetch_array($list);
?>


<!DOCTYPE html>
<html>
<head>
	<title>會員資訊</title>
</head>
<body>
	<h1 align="center">會員資訊</h1>
	<table align="center">
		<tr>
			<td>會員帳號:</td>
			<td><?php echo $id ?></td>
		</tr>
		<tr>
			<td>電子信箱:</td>
			<td><?php if(empty($email)){echo '未輸入';}else{echo $email;} ?></td>
		</tr>
		<tr>
			<td>註冊日期:</td>
			<td><?php echo $reg_date ?></td>
		</tr>
	</table>
</body>
</html>