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
 /*if(!$money)
 {
   //Reject
   return();
 }*/

 //CALCULATE PRICE
 $item_ino_file_path="../json_dat/item_inno.json";
 $item_ino=json_decode(file_get_contents($item_ino_file_path),true);
 $price=0;
 $item_ino_row=count($item_ino['item_inno']);
 for($j=0;$j<$item_ino_row;$j++)
 {
   if($_REQUEST['item_id']==$item_ino['item_inno'][$j]['item_ino_id'])
   {
     $price=$item_ino['item_inno'][$j]['price']*$_REQUEST['item_amount'];
   }
 }

 //SCANING
 if($price>$money)
 {
   //Reject
   header('Location: index.php?inno_stat=700');
   echo 'Reject!';
   return;
 }
 else
 {
   $new_money=$money-$price; //PAID
   $bank_json['bank'][$row_pos]=array("group_num" => $_REQUEST['group'],"balance" => $new_money);
   file_put_contents($bank_file_path, json_encode($bank_json));
   //Sucuess
   header('Location: index.php?inno_stat=100');
   return;
 }
?>
