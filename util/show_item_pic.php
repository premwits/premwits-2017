<?
function show_item_pic_percent($item_code_spe,$size_percent)
{
 $spec_html_item_out="<img src='../img/item/".$item_code_spe.".png' style='width: ".$size_percent."%;' />";
 return $spec_html_item_out;
}
function show_item_pic_pixel($item_code_spe,$size_pixel)
{
 $spec_html_item_out="<img src='../img/item/".$item_code_spe.".png' style='width: ".$size_pixel."px;' />";
 return $spec_html_item_out;
}
?>
