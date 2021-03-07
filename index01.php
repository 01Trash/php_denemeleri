<?php


$durum = 5;
$sayi1 = 10;
$sayi2 = 5;

if($durum==1){
  echo 'sayi1 + sayi2: '.($sayi1 + sayi2);
}
else if($durum==2){
  echo 'sayi1 - sayi2: '.($sayi1 - $sayi2);
}
else if($durum==3){
  echo 'sayi1 * sayi2: '.($sayi1 * $sayi2);
}
else if($durum==4){
  echo 'sayi1 / sayi2: '.($sayi1 / $sayi2);
}
else{
  echo 'Girilen durum ile uyuşan durum yok!';
}



$a = 80;
if($a%2==0 && $a%5==0){
  echo '10\'a bölünür.';
}else{
  echo 'Bu bir tek sayıdır.';
}



$a = 80;
if($a%2==0 || $a%5==0){
  echo '2\'ye ya da 5\'e bölünebiliyor.';
}else{
  echo 'Bu bir tek sayıdır.';
}



$a = 40;
$b = 30;
if($a>$b || $a==$b){
  echo "$a sayısı $b sayısından büyük ve ya eşittir.";
}
else{
  echo 'Error';
}



$sayi = null;
if(isset($sayi) && !empty($sayi)){
  echo "\$sayi değişkeninin değeri: $sayi.";
}else{
  echo "\$sayi değişkeni boş veya tanımlı değil.";
}



$sayi=6;
if(isset($sayi) && !empty($sayi))
    echo "\$sayi değişkeni değeri: $sayi.";

else
    echo "\$sayi değişkeni boş.";



$sayi = 6;
echo isset($sayi) && !empty($sayi) ? "\$sayi değişkeinin değeri: $sayi.":"\$sayi değişkeni boş veya tanımlı değil.";



$gun = 5;
switch ($gun){
  case 1:
  echo "Pazartesi.";
  break;
  case 2:
  echo "Salı.";
  break;
  case 3:
  echo "Çarşamba.";
  break;
  case 4:
  echo "Perşembe.";
  break;
  case 5:
  echo "Cuma.";
  break;
  case 6:
  echo "Cumartesi.";
  break;
  case 7:
  echo "Pazar.";
  break;
  default:
  echo "Hata!";
  break;
}



?>
