<?
  function idtoitem($item_reqid)
  {
    $file_path_special="../json_dat/item.json";
    $idit_json=json_decode(file_get_contents($file_path_special),true);
    $idit_row=count($idit_json['item']);
    for($idi=0;$idi<$idit_row;$idi++)
    {
      if($item_reqid==$idit_json['item'][$idi]['item_id'])
      {
        return $idit_json['item'][$idi]['item_name'];
      }
    }
    return 'N/A';
  }
?>
