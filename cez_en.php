<?php

 $key = $_POST['key'];
 $str = iconv('utf-8', 'windows-1251', $_POST['str']);
 $cstr = "";
 for($i = 0; $i < strlen($str); $i++)
 {
   $symb = ord($str[$i]) + $key;
   if($symb > 255)
   {
     $symb = $symb - 255;
   }
   $cstr = $cstr.chr($symb);
 }
 echo "зашифрованная строка: ",iconv('windows-1251', 'utf-8', $cstr),"<br>";
 ?>
 <form action = "cez_de.php" method = "post">
   Ключ: <input  name="key"><br>
   Шифр: <input  name="str"><br>
   <input type="submit"  value = "расшифровать">
 </form>
