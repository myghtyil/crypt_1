<?php
$key = $_POST['key'];
$cstr = iconv('utf-8', 'windows-1251', $_POST['str']);
$newstr = "";
for($i = 0; $i < strlen($cstr); $i++)
{
  $nsymb = ord($cstr[$i]) - $key;
  if($nsymb < $key)
  {
    $nsymb = $nsymb + 255 ;
  }
  $newstr = $newstr.chr($nsymb);
}
echo "расшифрованная строка: ",iconv('windows-1251', 'utf-8', $newstr),"<br>";
?>
