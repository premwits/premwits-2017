<?
	setcookie("premw_phone_id", md5(rand()), time() + (86400), "/");
	if($_COOKIE['login_stat_name_stat']==1 || $_COOKIE['login_stat']==1)
	{
		header("Location: ../system");
	}
	if($_REQUEST['login_hash_id']==NULL)
	{
		echo 'ERROR: Null input';
		return;
	}
	$login_id_hash=$_REQUEST['login_hash_id'];
	$file = "../json_dat/account.json";
	$json = json_decode(file_get_contents($file), true);
	for($i=0;$i<20;$i++)
	{
		if($login_id_hash==$json['account'][$i]['hash'])
		{
			$login_name_group=$json['account'][$i]['name'];
			$login_group_number=$json['account'][$i]['group_num'];
		}
	}
	if($login_group_number==NULL)
	{
		echo 'ERROR: Invaild login';
		return;
	}
	else
	{
		setcookie("login_stat", 1, time() + (86400), "/");
		setcookie("login_stat_group", $login_name_group, time() + (86400), "/");
		setcookie("login_group_number", $login_group_number, time() + (86400), "/");
	}
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
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">PRE-MWITS<sup><font color="red">BETA</font></sup></a>
    </div>
  </nav> <? //cms_us2  DeGE3A4H5VTscKuy?><? //CREATE USER 'cms_us2'@'%' IDENTIFIED WITH mysql_native_password AS '***';GRANT ALL PRIVILEGES ON *.* TO 'cms_us2'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `cms_us2`;GRANT ALL PRIVILEGES ON `cms\_us2`.* TO 'cms_us2'@'%';GRANT ALL PRIVILEGES ON `cms_us2\_%`.* TO 'cms_us2'@'%'; ?>
<br />
<br />
<form action="login.php" method="POST">
<div class="container">
  <h5 class="center">PRE-MWITS<sup><font color="red">BETA</font></sup> <b>auto-login</b></h5>
  </div>
<div class="container" style="height: 100px">
    <div class="row">
		<br />
		<br />
		<center><b>LOGGED IN AS <i><? echo $login_name_group; ?></i></b></center>
		<br />
	</div>
</div>

</div>
<div class="container">
  <div class="row">
	<div class="input-field col s12">
		<input id="user_name_pre" type="text" name="user_name_pre" class="validate">
		<label for="user_name_pre">Please type your name</label>
	</div>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn blue" type="submit">START GAME</button>
  </div>
</div>
</form>

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
