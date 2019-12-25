<?php
session_start();
if(empty($_SESSION['id'])){
?>
<script language='javascript'>
    // alert('請先登入!!!');
    // history.go(-1);
    <?php $count = 1; ?>
</script>
<?php } ?> 
<?php
@$id = $_SESSION['id'];
@$pw = $_SESSION['pw'];
include 'db_config.php';
// include 'check.php';
$str = "SELECT ed,ing,will FROM class where room='".$pw."'";
$list = mysqli_query($link,$str);
list($ed,$ing,$will) = mysqli_fetch_array($list);
?>

<!DOCTYPE html>
<html>
<head>
	<title>一樓</title>
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
	<h1 align="center">這是一樓</h1>
    <h1 align="center"><?php if(@$count == 1){
        echo '未登入';
        }else{echo '使用者'.$id;} ?></h1>
	<div class="row" align="center">
		<div class="col-lg-12">
			<p>
				
<!--  這是註解         --><!--  這是註解         --><!--  這是註解         --><!--  這是註解         --><!--  這是註解         -->
					


                    
           				<div class="portfolio-item btn-group" role="group" aria-label="...">
                            <a href="#test" class="btn btn-primary" role="button" data-toggle="modal">test</a>
                            <a href="#102" class="btn btn-primary" role="button" data-toggle="modal">102</a>
                            <a href="#103" class="btn btn-primary" role="button" data-toggle="modal">103</a>
                            <a href="#104" class="btn btn-primary" role="button" data-toggle="modal">104</a>
                            <a href="#105" class="btn btn-primary" role="button" data-toggle="modal">105</a>
                            <a href="#107" class="btn btn-primary" role="button" data-toggle="modal">107</a>
                            <a href="#109" class="btn btn-primary" role="button" data-toggle="modal">109</a>
                            <a href="#111" class="btn btn-primary" role="button" data-toggle="modal">111</a>
                            <a href="#113" class="btn btn-primary" role="button" data-toggle="modal">113</a>
                            <a href="#116" class="btn btn-primary" role="button" data-toggle="modal">116</a>
                            <a href="#118" class="btn btn-primary" role="button" data-toggle="modal">118</a>
                		</div>
                	
<!--  這是註解         --><!--  這是註解         --><!--  這是註解         --><!--  這是註解         --><!--  這是註解         -->
                	<div class="scroll-top page-scroll hidden-lg hidden-md" style="display: block;">
        				<a class="btn btn-primary" href="#page-top">
            				<i class="fa fa-chevron-up"></i>
        				</a>
    				</div>

    				<div class="portfolio-modal modal fade" id="test" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        			<div class="modal-content">
					<div class="container">
                	<div class="row">
                    <div class="col-lg-8 col-lg-offset-2" align="center">
                        <div class="modal-body">
                            <h2>這是一隻皮卡丘</h2>
                            <hr class="star-primary">
                            <img src="pikachu.png" class="img-responsive img-centered" alt="">
                            <!--  --><!-- ddddd --><!-- ddddd --><!-- ddddd --><!-- ddddd -->
                            <div class="form-group">
                                <label for="dtp_input1" >DateTime Picking</label>
                                <form method="post" action="ttt.php">
                                <p><div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                    <input class="form-control" size="16" type="text" value="" readonly id="form_datetime" name="aaa">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                </div></p>
                                <button type="submit" class="btn btn-success">送出</button>
                                </form>
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
                            <!-- ddddd --><!-- ddddd --><!-- ddddd --><!-- ddddd --><!-- ddddd -->
                            <p>小智的皮卡丘已經100等了</p>
                            <p>小智還是當不了神奇寶貝大師</p>
                            <p>小智很廢</p>
                            <p>別學小智</p>

                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                	</div>
            		</div>
        			</div>
    				</div>

                    <div class="portfolio-modal modal fade" id="102" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=102";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2>主顧102</h2>
                    <!-- <h2><?php  $room; ?></h2> -->
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>

                            
                            
                            <hr class="star-primary">
                           <!--  <?php echo $ing; ?> -->
                           無正在進行的活動
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                          <!--   <?php echo $ed; ?> -->
                          2016/02/20 14:10~15:00 C語言程式設計
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                          <!--   <?php echo $will; ?> -->
                          2016/02/20 20:00~21:00 行雲者會議
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="103" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=103";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="104" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=104";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="105" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=105";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="107" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=107";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="109" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=109";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="111" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=111";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="113" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=113";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="116" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=116";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="118" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-content">
                    <div class="container">
                    <?php
                        $str = "SELECT room,ed,ing,will FROM class where room=118";
                        $list = mysqli_query($link,$str);
                        list($room,$ed,$ing,$will) = mysqli_fetch_array($list);
                    ?>
                    <h2><?php echo $room; ?></h2>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>進行中~</h2>
                            <hr class="star-primary">
                            <?php echo $ing; ?>
                            <h2>過去使用紀錄~</h2>
                            <hr class="star-primary">
                            <?php echo $ed; ?>
                        </div>
                        </div>

                        <div class="col-lg-5 col-lg-offset-1">
                        <div class="modal-body" align="center">
                            <h2>未來預約~</h2>
                            <hr class="star-primary">
                            <?php echo $will; ?>
                        </div>
                        </div>
                    </div>
                    <p align="center"><button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></p>
                    </div>
                    </div>
                    </div>


<!--  這是註解         --><!--  這是註解         --><!--  這是註解         --><!--  這是註解         --><!--  這是註解         -->
					<!-- <a href="" class="btn btn-primary" role="button">102</a>
					<a href="" class="btn btn-primary" role="button">103</a>
					<a href="" class="btn btn-primary" role="button">104</a>
					<a href="" class="btn btn-primary" role="button">105</a>
					<a href="" class="btn btn-primary" role="button">107</a>
					<a href="" class="btn btn-primary" role="button">109</a>
					<a href="" class="btn btn-primary" role="button">111</a>
					<a href="" class="btn btn-primary" role="button">113</a>
					<a href="" class="btn btn-primary" role="button">116</a>
					<a href="" class="btn btn-primary" role="button">118</a> -->
				
			</p>
		</div>
	</div>
</body>
</html>