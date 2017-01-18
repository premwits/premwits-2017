<?
function show_mons_pic_percent($mons_code_spe,$size_percent)
{
 $spec_html_mon_out="<img src='../img/monster/".$mons_code_spe.".png' style='width: ".$size_percent."%;' />";
 return $spec_html_mon_out;
}
function show_mons_pic_pixel($mons_code_spe,$size_pixel)
{
 $spec_html_mon_out="<img src='../img/monster/".$mons_code_spe.".png' style='width: ".$size_pixel."px;' />";
 return $spec_html_mon_out;
}
?>
