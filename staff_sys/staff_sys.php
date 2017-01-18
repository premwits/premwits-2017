<?
 ///////////////////
 //SHOP_INNOVATION//
 ///////////////////
 //CHECKING MONEY
 $bank_file_path="../json_dat/bank.json";
 $bank_json=json_decode(file_get_contents($bank_file_path),true);
 $bank_json_row_num=count($bank_json['bank']);
 for($i=0;$i<$bank_json_row_num;$i++)
 {
   if($_REQUEST['group']==$bank_json['bank'][$i]['group_num'])
   {
     $row_pos=$i;
     $money=$bank_json['bank'][$i]['balance'];
   }
 }
$new_money=$money+$_REQUEST['balance']; //PAID
$bank_json['bank'][$row_pos]=array("group_num" => $_REQUEST['group'],"balance" => $new_money);;
//Sucuess
file_put_contents($bank_file_path, json_encode($bank_json));
header('Location: index.php?st_stat=100');
return;
?>
