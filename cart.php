<table border="1">
<tr>
   <td>功能</td><td>編號</td><td>名稱</td>
   <td>價格</td><td>數量</td>
</tr>

<?php
$flag=false;
$total=0;
while (list($arr, $value) = each($_COOKIE))
{
  if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) 
  {
    if ($flag) {
        $flag = false;
        $color="#FBFD5C";
     } else {
        $flag = true;
        $color="#FDD4C6";
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "Delete</a></td>";
     $price = 0;
     $number = 0;
     while (list($name, $value)=each($_COOKIE[$arr])) 
     {
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "number") $number = $value;
     }
     $total += $price * $number;
     echo "</tr>";
  }
}
if ($total != 0)
{
   echo "<tr bgcolor=><td colspan=5 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
