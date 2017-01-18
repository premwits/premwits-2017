<?
  if(!$_REQUEST['coupon_code'])
  {
    header('Location: index.php?coup_code=500');
    exit();
  }
  $file = "../json_dat/coupon_db.json";
  $json = json_decode(file_get_contents($file), true);
  $coup_code=$_REQUEST['coupon_code'];
  $stats_wtf=0;
  $num_of_row=count($json['coupon_db']);
  for($i=0;$i<$num_of_row;$i++)
  {
    if($json['coupon_db'][$i]['coupon_code']==NULL) {}
    else if($coup_code==$json['coupon_db'][$i]['coupon_code'])
    {
      $stats_wtf=1;
      $riffy_pos=$i;
      $item_id=$json['coupon_db'][$i]['item_id'];
      $item_amount=$json['coupon_db'][$i]['amount'];
      $amount=$item_amount;
    }
  }
  if($item_id=="" || $stats_wtf==0)
  {
    //Reject
    header('Location: index.php?coup_code=700');
    exit();
  }
  else
  {
    if($item_id[0]=="M")
    {
      //MONSTER
      //2 steps
      $mon_db_file="../json_dat/monster_db.json";
      $mon_db_json=json_decode(file_get_contents($mon_db_file), true);
      $mon_num_row=count($mon_db_json['monster_db']);
      for($w=0;$w<$mon_num_row;$w++)
      {
        if($item_id==$mon_db_json['monster_db'][$w]['mons_id'])
        {
          $dev_mon_name=$mon_db_json['monster_db'][$w]['mons_name'];
          $dev_mon_tier=$mon_db_json['monster_db'][$w]['tier'];
          $dev_mon_e1=$mon_db_json['monster_db'][$w]['element_1'];
          $dev_mon_e2=$mon_db_json['monster_db'][$w]['element_2'];
          $dev_hp_max=$mon_db_json['monster_db'][$w]['hp_max'];
          $dev_atk=$mon_db_json['monster_db'][$w]['atk'];
          $dev_def=$mon_db_json['monster_db'][$w]['def'];
          $dev_ma=$mon_db_json['monster_db'][$w]['ma'];
          $dev_md=$mon_db_json['monster_db'][$w]['md'];
          $dev_spd=$mon_db_json['monster_db'][$w]['spd'];
        }
      }
      $file72 = "../json_dat/inventory_monster.json";
      $json72 = json_decode(file_get_contents($file72), true);
      $group_number=$_COOKIE['login_group_number'];
      $num_row72=count($json72[$group_number]);
      $random=rand();
      $mon_id_gen=md5(md5(md5(md5($random))));
      $json72[$group_number][$num_row72]=array("mons_id" => $mon_id,"mons_name" => $dev_mon_name,"tier" => $dev_mon_tier,"element_1" => $dev_mon_e1,"element_2" => $dev_mon_e2,"hp" => $dev_hp_max,"hp_max" => $dev_hp_max,"atk" => $dev_atk,"def" => $dev_def,"ma" => $dev_ma,"md" => $dev_md,"spd" => $dev_spd,"mons_code" => $item_id);
      file_put_contents($file72, json_encode($json72));
    }
    else
    {
      //ITEM
      $file2 = "../json_dat/inventory_item.json";
      $json2 = json_decode(file_get_contents($file2), true);
      $group_number=$_COOKIE['login_group_number'];
      $num_row=count($json2[$group_number]);
      //SCAN
      for($i=0;$i<$num_row;$i++)
      {
        if($item_id==$json2[$group_number][$i]['item_id'])
        {
          $where_the_fuck_is_it=$i;
        }
      }
      //ADDING
      if($where_the_fuck_is_it!=NULL)
      {
        $new_amount=$json2[$group_number][$where_the_fuck_is_it]['amount']+$amount;
        $json2[$group_number][$where_the_fuck_is_it]=array("item_id" => $item_id,"amount" => $new_amount);
        file_put_contents($file2, json_encode($json2));
      }
      else
      {
        $json2[$group_number][$num_row]=array("item_id" => $item_id, "amount" => $amount);
        file_put_contents($file2, json_encode($json2));
      }
    }
  }
  echo $amount;
  $file = "../json_dat/coupon_db.json";
  $json = json_decode(file_get_contents($file), true);
  $json['coupon_db'][$riffy_pos]=array("coupon_code" => null,"item_id" => null,"name" => null,"amount" => null,"card_type" => null);
  file_put_contents($file, json_encode($json));

  header('Location: index.php?coup_code=100');
?>
