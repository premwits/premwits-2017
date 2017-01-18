<?
$conn=mysql_connect('localhost','root','12554664');
$sql="SELECT * FROM `coupon_db`";
mysql_select_db("vletpaoh_premwit2");
$query=mysql_query($sql);
?>
[
<br />
<?
while($row=mysql_fetch_row($query))
{
?>
{"coupon_code":"<? echo $row[0]; ?>","item_id":"<? echo $row[1]; ?>","name":"<? echo $row[2]; ?>","amount":<? echo $row[3] ?>,"card_type":"<? echo $row[4]; ?>"},
<?
echo "<br />";
}
?>
]
