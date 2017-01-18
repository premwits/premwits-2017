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
  <title>Main Interface</title>

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
<div class="container">
  <h5 class="center">PRE-MWITS<sup><font color="red">BETA</font></sup> <b>system</b></h5>
</div>
<div class="container">
  <div class="row">
    <? if($_REQUEST['coup_code']==100) { ?>
    <div class="chip green lighten-1 col s12">
      <font color="white"><center>Item added to inventory! XD</font>
      <i class="close material-icons">close</i></center>
    </div>
    <? } else if($_REQUEST['coup_code']==700) {  ?>
    <div class="chip red lighten-1 col s12">
      <font color="white"><center>ERROR: Invalid Code</font>
      <i class="close material-icons">close</i></center>
    </div>
    <? } else if($_REQUEST['coup_code']==500) { ?>
    <div class="chip red lighten-1 col s12">
      <font color="white"><center>ERROR: Invalid Input</font>
      <i class="close material-icons">close</i></center>
    </div>
    <? } ?>
  </div>
	<div class="row">
		<div class="card-panel col s12">
    <h5><i>Welcome!</i></h5>
      <div class="col s2">
        <h2 class="center-align"><? echo $_COOKIE['login_group_number']; ?></h2>
      </div>
      <div class="col s9 offset-s1">
        <br />
        <b>NAME: </b><? echo $_COOKIE['login_stat_name']; ?>
        <br />
        <b>PERMISSION LEVEL: </b>1
        <br />
        <b>GROUP: </b><? echo $_COOKIE['login_group_number']; ?>
        <br />
        <br />
      </div>
		</div>
	</div>
	<div class="row">
		<div class="card-panel s12">
			<h5><i>IDENTITY</i></h5>
			<br />
			<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=<? echo $_COOKIE['premw_phone_id']; ?>&choe=UTF-8" style="width: 100%;" />
		</div>
	</div>
	<div class="row">
		<div class="card-panel s12">
			<h5><i>INVENTORY</i></h5>
			<br />
			<table class="highlight">
        <thead>
          <tr>
            <th data-field="item_pic"></th>
            <th data-field="item_name">Item</th>
            <th data-field="quantity">Quantity</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $inventory_file_path="../json_dat/inventory_item.json";
          $inventory_json=json_decode(file_get_contents($inventory_file_path),true);
          $group_num=$_COOKIE['login_group_number'];
          $inventory_row=count($inventory_json[$group_num]);
          include('idtoitem.php');
          include('../util/show_item_pic.php');
          for($k=0;$k<$inventory_row;$k++)
          {
            if($inventory_json[$group_num][$k]['amount']==0)
            {

            }
            else
            {
        ?>
          <tr>
            <td width="10%"><? echo show_item_pic_percent($inventory_json[$group_num][$k]['item_id'],100); ?></td>
            <td><? echo idtoitem($inventory_json[$group_num][$k]['item_id']); ?></td>
            <td><? echo $inventory_json[$group_num][$k]['amount']; ?></td>
          </tr>
        <?
            }
          }
        ?>
      </tbody>
      </table>
		</div>
	</div>
  <div class="row">
    <div class="card-panel s12">
      <h5><i>MONSTER</i></h5>
			<table class="highlight">
        <thead>
          <tr>
            <th data-field="poke_pic"></th>
            <th data-field="poke_name">Name</th>
            <th data-field="poke_hp">HP</th>
            <th data-field="poke_stat">Status</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $inventorym_file_path="../json_dat/inventory_monster.json";
          $inventorym_json=json_decode(file_get_contents($inventorym_file_path),true);
          $group_num=$_COOKIE['login_group_number'];
          $inventorym_row=count($inventorym_json[$group_num]);
          include('idtomonster.php');
          include('../util/show_mons_pic.php');
          for($k=0;$k<$inventorym_row;$k++)
          {

        ?>
          <tr>
            <td width="10%"><? echo show_mons_pic_percent($inventorym_json[$group_num][$k]['mons_code'],100); ?></td>
            <td><? echo idtomonster($inventorym_json[$group_num][$k]['mons_code']); ?></td>
            <td><? echo $inventorym_json[$group_num][$k]['hp']; ?>/<? echo $inventorym_json[$group_num][$k]['hp_max']; ?></td>
          </tr>
        <?
          }
        ?>
      </tbody>

      </table>
    </div>
  </div>
  <div class="row">
    <div class="card-panel s12">
      <h5><i>COUPON CODE</i></h5>
      <br />
      <div class="row">
        <form action="coupon.php" method="POST">
        <div class="input-field col s8">
          <input id="coupon_code" name="coupon_code" type="text" class="validate">
          <label for="coupon_code">Enter your code here</label>
        </div>
        <div class="col s2">
          <button class="btn-large waves-effect waves-light blue" type="submit" name="action"><i class="material-icons right">send</i></button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="card-panel s12">
      <h5><i>OPTIONS</i></h5>
      <br />
      <div class="row">
        <a class="btn waves-effect waves-light blue s12">TAKE A BUG REPORT</a>
      </div>
      <div class="row">
        <a class="btn waves-effect waves-light blue s12">ABOUT</a>
      </div>
      <div cass="row">
        <a class="btn waves-effect waves-light red">LOGOUT</a>
      </div>
    </div>
  </div>
</div>

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
