<?
	if($_COOKIE['login_stat_name_stat']==1)
	{
		header("Location: ../system");
	}
	setcookie("login_stat_name", $_REQUEST['user_name_pre'], time() + (86400), "/");
	setcookie("login_stat_name_stat", 1, time() + (86400), "/");
	$file = "../json_dat/devices.json";
	$json = json_decode(file_get_contents($file), true);
	$json_count_row=count($json['devices']);
	$dev_gnum=$_COOKIE['login_stat_group'];
	$dev_name=$_REQUEST['user_name_pre'];
	$dev_id=$_COOKIE['premw_phone_id'];
	$json['devices'][$json_count_row]=array("group_num" => $dev_gnum,"name" => $dev_name,"phone_id" => $dev_id);
	file_put_contents($file, json_encode($json));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript">
	function redirect()
	{
		window.location.href = "../system";
	}
	setTimeout(redirect, 5000);
  </script>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">PRE-MWITS<sup><font color="red">BETA</font></sup></a>
    </div>
  </nav> <? //cms_us2  DeGE3A4H5VTscKuy?><? //CREATE USER 'cms_us2'@'%' IDENTIFIED WITH mysql_native_password AS '***';GRANT ALL PRIVILEGES ON *.* TO 'cms_us2'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `cms_us2`;GRANT ALL PRIVILEGES ON `cms\_us2`.* TO 'cms_us2'@'%';GRANT ALL PRIVILEGES ON `cms_us2\_%`.* TO 'cms_us2'@'%'; ?>
<br />
<br />
<div class="container">
  <h5 class="center">PRE-MWITS<sup><font color="red">BETA</font></sup> <b>auto-login</b></h5>
  </div>
<div class="container" style="height: 100px">
    <div class="row">
		<br />
		<br />
		<center><b>STARTING GAME PLEASE WAIT...</i></b></center>
		<br />
    </div>
	<div class="row">
		<div class="progress">
			<div class="indeterminate"></div>
		</div>
	</div>
</div>


<br />
<br />
<br />
<br />
  <footer class="page-footer blue darken-1" id="tobottom">
    <div class="footer-copyright">
      <div class="container">
      System & Design by <a class="brown-text text-lighten-3" href="http://facebook.com/rayriffy">RayRiffy</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
