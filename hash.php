<?
for($i=1;$i<=20;$i++)
{
echo 'Group'.$i;
echo '<br />';
$group_name='Group'.$i;
$md=md5(md5(md5(md5('Group'.$i))));
echo md5(md5(md5(md5('Group'.$i))));
echo '<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=https://pre.mwit.ac.th/activ/login/index.php?login_hash_id='.$md.'&choe=UTF-8" />';

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
}
?>
