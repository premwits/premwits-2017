<?
  function idtomonster($mons_reqid)
  {
    $file_path_special2="../json_dat/monster_db.json";
    $idit2_json=json_decode(file_get_contents($file_path_special2),true);
    $idit2_row=count($idit2_json['monster_db']);
    for($idi2=0;$idi2<$idit2_row;$idi2++)
    {
      if($mons_reqid==$idit2_json['monster_db'][$idi2]['mons_id'])
      {
        return $idit2_json['monster_db'][$idi2]['mons_name'];
      }
    }
    return 'N/A';
  }
?>
