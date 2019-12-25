<!DOCTYPE html>
<html>
<head>
	<title>註冊頁面</title>
	<meta charset="utf8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="formcheck.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">查詢系統</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			</div><!--/.navbar-collapse -->
		</div>
	</nav>

	<div class="jumbotron" style="background-image:url(cloud.jpg)">
		<div class="container" >
			<a href="index.php"><h1>查詢系統</h1></a>
			<p>你今天過得好嗎? 離夢想又更遠了,對吧?</p>
		</div>
	</div>

	<form method="post" action="insert.php" name="regist" onsubmit="return formcheck();">
		<table border="0" align="center">
			<tr>
				<td colspan="2">加入會員請輸入以下資料（＊為）必填：</td>
			</tr>
			<tr>
				<td>＊帳號：</td>
				<td><input type="text" name="id" size="20"></td>
			</tr>
			<tr>
				<td>＊密碼：</td>
				<td><input type="password" name="pw" size="20"></td>
			</tr>
			<tr>
				<td>E-mail：</td>
				<td><input type="text" name="email" size="30"></td>
			</tr>
		</table>
		<p align="center"><input type="submit" value="送出"></p>
	</form>
</body>
</html>