<?php

$toplam = 0;
for($i=1;$i<=10;$i++){
  $toplam+=$i;
  echo "$i <br/>";
}
echo "1-10 toplam: $toplam";



$i=0;
while(1){
  echo "Değer: $i";
  if($i<=100){
    $i++;
  }else{
    break;
  }
}


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



$dizi = array('elma', 'armut', 'domates', 'kiraz');
$dizi2 = array('elma'=>10, 'armut'=>5, 'domates'=>9, 'kiraz'=>14);

foreach($dizi as $key => $value){
  echo "Meyve: $key <br/>";
}

foreach($dizi as $key => $value){
  echo "Meyve: $key Fiyatı: ".$value." <br/>";
}


?>
