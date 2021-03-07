<?php

/*
$toplam = 0;
for($i=1;$i<=10;$i++){
  $toplam+=$i;
  echo "$i <br/>";
}
echo "1-10 toplam: $toplam";


/*$sayi = 1;
while($sayi<=15){
  $carpim=1;
  for($i=1;$i<=$sayi;$i++){
    $carpim*=$i;
  }
  echo "Faktoriyel: $carpim";
}*/

/*
$i=0;
while(1){
  echo "Değer: $i";
  if($i<=100){
    $i++;
  }else{
    break;
  }
}*/

$i=0;
for(;;){
  if($i==50){
    continue;
  }
  echo "Değer: $i";
  if($i<=99){
    $i++;
  }else{
    break;
  }
}


?>
