<?
$file = "script/conf.json";

$json = json_decode(file_get_contents($file), true);

$json['mysql_setup'][21] = array("mysql_json_user" => $my_usr, "mysql_json_password" => $my_pas);
file_put_contents($file, json_encode($json));

$json['env'] = array("is_first_setup_finish" => 1,"site_name" => $_REQUEST['system_name'],"site_subtitle" => $_REQUEST['system_subtitle'], "footer_name" => $_REQUEST['footer_name'], "footer_subtitle" => $_REQUEST['footer_subtitle']);
file_put_contents($file, json_encode($json));

$conn=mysql_connect('localhost',$json['mysql_setup']['mysql_json_user'],$json['mysql_setup']['mysql_json_password']);
?>
