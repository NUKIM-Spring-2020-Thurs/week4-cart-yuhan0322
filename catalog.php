<?php
session_start();

if (isset($_POST["product"])) 
{
   $_SESSION["number"] = $_POST["number"];
   $id = $_POST["product"];
   $_SESSION["ID"] = $id;
   switch (strtoupper($id)) {
      case "01":
         $_SESSION["Name"] = "手機";
         $_SESSION["Price"] =20000;
         break;
      case "02":
         $_SESSION["Name"] = "電腦";
         $_SESSION["Price"] = 45000;
         break;
      case "03":
         $_SESSION["Name"] = "音響";
         $_SESSION["Price"] = 10000;
         break;   
   }  
   header("Location: addcart.php");
}
?>

<form action="catalog.php" method="POST">
選擇商品：<select name="product" required>
         <option name="手機" value="01">手機-$20,000</option>
         <option name="電腦" value="02">電腦-$45,000</option>
         <option name="音響" value="03">音響-$10,000</option>
</select>
<input type="text" size="5" name="number" value="1" requried>
<input type="submit" value="訂購"><br/>
</form>
<a href="catalog.php">商品目錄</a>
<a href="cart.php">購物車</a>