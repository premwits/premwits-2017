<? /*
	if($_COOKIE['login_stat_name_stat']!=1 || $_COOKIE['login_stat']!=1)
	{
		header("Location: ../login");
	} */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Shop</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><font color="black">PRE-MWITS</font><sup><font color="red">BETA</font></sup></a>
    </div>
  </nav> <? //cms_us2  DeGE3A4H5VTscKuy?><? //CREATE USER 'cms_us2'@'%' IDENTIFIED WITH mysql_native_password AS '***';GRANT ALL PRIVILEGES ON *.* TO 'cms_us2'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `cms_us2`;GRANT ALL PRIVILEGES ON `cms\_us2`.* TO 'cms_us2'@'%';GRANT ALL PRIVILEGES ON `cms_us2\_%`.* TO 'cms_us2'@'%'; ?>
<br />
<br />
<div class="container">
  <h5 class="center">PRE-MWITS<sup><font color="red">BETA</font></sup> <b>shop</b></h5>
</div>
<form action="shop.php" method="POST">
<div class="container">
  <?
    error_reporting(0);
    if($_REQUEST['shop_stat']==100)
    {
  ?>
  <div class="row">
    <div class="card-panel s12 green">
      <b><h4><center><font color="white">SUCCUESS</font></center></h4></b>
    </div>
  </div>
  <?
    }
    else if($_REQUEST['shop_stat']==700)
    {
  ?>
  <div class="row">
    <div class="card-panel s12 red">
      <b><h4><center><font color="white">INSUFFICIENT BALANCE</font></center></h4></b>
    </div>
  </div>
  <?
    }
  ?>
  <div class="row">
    <div class="card-panel s12">
      <h5><i>GROUP_SELECT</i></h5>
      <div class="input-field col s12">
        <select name="group">
          <option value="" disabled selected>Choose group</option>
          <option value="1">Group 1</option>
          <option value="2">Group 2</option>
          <option value="3">Group 3</option>
          <option value="4">Group 4</option>
          <option value="5">Group 5</option>
          <option value="6">Group 5</option>
          <option value="7">Group 7</option>
          <option value="8">Group 8</option>
          <option value="9">Group 9</option>
          <option value="10">Group 10</option>
          <option value="11">Group 11</option>
          <option value="12">Group 12</option>
          <option value="13">Group 13</option>
          <option value="14">Group 14</option>
          <option value="15">Group 15</option>
          <option value="16">Group 16</option>
          <option value="17">Group 17</option>
          <option value="18">Group 18</option>
          <option value="19">Group 19</option>
          <option value="20">Group 20</option>
        </select>
        <label>Group</label>
      </div>
      &nbsp;
    </div>
  </div>
  <div class="row">
    <div class="card-panel s12">
      <h5><i>ITEMS</i></h5>
      <div class="row">
        <div class="input-field col s6">
          <select name="item_id">
            <option value="" disabled selected>Select item</option>
          <?
           $file_path="../json_dat/item.json";
           $item_list=json_decode(file_get_contents($file_path),true);
           $item_row=count($item_list['item']);
           for($i=0;$i<$item_row;$i++)
           {
          ?>
          <option value="<? echo $item_list['item'][$i]['item_id']; ?>"><? echo $item_list['item'][$i]['item_name']; ?></option>
          <?
           }
          ?>
          </select>
          <label>Item</label>
        </div>
        <div class="input-field col s6">
          <input name="item_amount" id="item_amount" type="number" class="validate">
          <label for="item_amount">AMOUNT</label>
        </div>
        <div class="input-field col s2">
            <button type="submit" class="btn waves-effect waves-light blue">SEND</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<br />
  <footer class="page-footer blue darken-1" id="tobottom">
    <div class="footer-copyright">
      <div class="container">
      System & Design by <a class="brown-text text-lighten-3" href="#">PRE-MWITS 2017 PROGRAMMER</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
