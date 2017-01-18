<?
 ///////////////////
 //SHOP_item//
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
 //CALCULATE PRICE
 $item1_file_path="../json_dat/item.json";
 $item1=json_decode(file_get_contents($item1_file_path),true);
 $price=0;
 $item1_row=count($item1['item']);
 for($j=0;$j<$item1_row;$j++)
 {
   if($_REQUEST['item_id']==$item1['item'][$j]['item_id'])
   {
     $price=$item1['item'][$j]['item_balance']*$_REQUEST['item_amount'];
   }
 }

 //SCANING
 if($price>$money)
 {
   //Reject
   header('Location: index.php?shop_stat=700');
   echo 'Reject!';
   return;
 }
 else
 {
   $file2 = "../json_dat/inventory_item.json";
   $json2 = json_decode(file_get_contents($file2), true);
   $group_number=$_REQUEST['group'];
   $num_row=count($json2[$group_number]);
   //SCAN
   for($i=0;$i<$num_row;$i++)
   {
     if($_REQUEST['item_id']==$json2[$group_number][$i]['item_id'])
     {
       $where_the_fuck_is_it=$i;
     }
   }
   //ADDING
   if($where_the_fuck_is_it!=NULL)
   {
     $new_amount=$json2[$group_number][$where_the_fuck_is_it]['amount']+$_REQUEST['item_amount'];
     $json2[$group_number][$where_the_fuck_is_it]=array("item_id" => $_REQUEST['item_id'],"amount" => $new_amount);
     file_put_contents($file2, json_encode($json2));
   }
   else
   {
     $json2[$group_number][$num_row]=array("item_id" => $_REQUEST['item_id'], "amount" => $_REQUEST['item_amount']);
     file_put_contents($file2, json_encode($json2));
   }

   $new_money=$money-$price; //PAID
   $bank_json['bank'][$row_pos]=array("group_num" => $_REQUEST['group'],"balance" => $new_money);
   file_put_contents($bank_file_path, json_encode($bank_json));
   //Sucuess
   header('Location: index.php?shop_stat=100');
   return;
 }
?>
