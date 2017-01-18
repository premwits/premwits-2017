<?
  $file = "json_dat/account.json";
  $json = json_decode(file_get_contents($file), true);
  $num_of_row=count($json['account']);
  echo 'Num of row: '.$num_of_row;
  echo '<br />';
  echo $json['account'][0]['hash'];
  $json['account'][$num_of_row]=array("name" => "RiFFY_SW3GTEAM","hash" => "123456789","group_num" => 99);
  file_put_contents($file, json_encode($json));
?>
