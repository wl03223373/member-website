<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>查詢系統</title>
	<meta charset="UTF-8">
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
				<a class="navbar-brand" href="index.php">主顧樓層資訊查詢系統</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<?php if(empty($_SESSION['id'])){ ?>
				<form class="navbar-form navbar-right" method="post" action="login_check.php" name="regist" onsubmit="return formcheck();">
					<div class="form-group">
						<input type="text" placeholder="帳號" class="form-control" name="id">
					</div>
					<div class="form-group">
						<input type="password" placeholder="密碼" class="form-control" name="pw">
					</div>
					<button type="submit" class="btn btn-success">登入</button>
					<a href="regist.php"><font color='white'>沒有帳號?</font></a>
				</form>
			<?php } else{ ?>
				<p class="navbar-brand navbar-right"><font color='white'>歡迎使用者 <?php echo $_SESSION['id'] ?></font></p>
			<?php } ?>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>

	<div class="jumbotron" style="background-image:url(cloud.jpg)">
		<div class="container" >
			<a href="index.php"><h1>查詢系統</h1></a>
			<p>測試</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-1">
			<div class="container">
				<div class="btn-group-vertical" role="group" aria-label="...">
					<div class="btn-group" role="group">
					<button class="btn btn-primary dropdown-toggle" type="button" id="btnGroupVerticalDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						查詢
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="p1.php" target="aaa">一樓</a></li>
						<li><a href="p2.php" target="aaa">二樓</a></li>
						<li><a href="p3.php" target="aaa">三樓</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="pt.php" target="aaa">測試</a></li>
					</ul>
					</div>
					
					<?php if(!empty($_SESSION['id'])){ ?>	

					<a href="member.php" target="aaa"class="btn btn-primary" role="button">會員資料</a>
					<a href="enroll.php" target="aaa"class="btn btn-primary" role="button">登記預約</a>
					<a class="btn btn-primary" href='logout.php'>登出</a>					
					
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="col-lg-11">
			<div class="embed-responsive embed-responsive-16by9">
  				<iframe name="aaa" class="embed-responsive-item" src="main.php">
  					
  				</iframe>
			</div>
		</div>
	</div>


</body>
</html>