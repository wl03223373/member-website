<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>enroll</title>
	<meta charset="utf8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="js/bootstrap-datetimepicker.zh-TW.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
	<script type="text/javascript" src="/js/jquery-2.0.0.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.zh-TW.js" charset="UTF-8"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
<body>
							<div class="container">
							<div class="row">
							<div class="input-group">

                                
                                <table>

                                <form method="post" action="ttt.php">
                                <tr><td colspan="3">
                                <p align="center">輸入要登記之教室<input type="text" class="form-control" placeholder="搜尋" name="search"></p>
                                </td></tr>
                                <tr>
                                <td>
                                <p>
                                <div class="input-group date form_datetime col-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                    起始時間<input class="form-control" size="16" type="text" value="" readonly id="form_datetime" name="aaa">
                                </div>
                                </p>
                                </td>
                                <td><p>至</p></td>
                                <td>
                                	<div class="input-group date form_datetime col-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                    結束時間<input class="form-control" size="16" type="text" value="" readonly id="1" name="bbb">
                                </div>
                                </td>
                                </tr>
                                <tr><td><p><button type="submit" class="btn btn-success">送出</button></p></td></tr>
                                
                                </form>
                                </table>

                              <!--   <form class="navbar-search pull-left" method="post">
  								<input type="text" class="form-control" placeholder="搜尋" name="search">
								</form> -->

                            </div>
                            </div>
                            </div>
                            <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-TW.js" charset="UTF-8"></script>
                            <script type="text/javascript">
                                $('#form_datetime').datetimepicker({
                                weekStart: 1,
                                todayBtn:  1,
                                autoclose: 1,
                                todayHighlight: 1,
                                startView: 2,
                                forceParse: 0,
                                showMeridian: 1,
                                language:"zh-TW",
                                });
                            </script>
                            <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-TW.js" charset="UTF-8"></script>
                            <script type="text/javascript">
                                $('#1').datetimepicker({
                                weekStart: 1,
                                todayBtn:  1,
                                autoclose: 1,
                                todayHighlight: 1,
                                startView: 2,
                                forceParse: 0,
                                showMeridian: 1,
                                language:"zh-TW",
                                });
                            </script>
   

	<?php
@$id = $_SESSION['id'];
@$pw = $_SESSION['pw'];
include 'db_config.php';
include 'check.php';
@$search = $_POST['search'];
$str = "SELECT room FROM class where room='".$search."'";
$list = mysqli_query($link,$str);
list($room) = mysqli_fetch_array($list);



?>

</body>
</html>