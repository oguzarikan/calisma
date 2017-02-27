<?php
/*$dizi=array(
    'ad'=>"Tayfun",
    'soyad'=> "Şakir",
    'okul no'=> "1225",
    'sinif' => "12/C"

);
foreach ($dizi as $a=> $b)
    echo $a.": ".$b."<br/>";
*/


$dizi=array(
    array("Tayfun Erbilen","123654789","12/E"),
    array("Şakirr Tekin","23232","12/F"),
    array("Kenan Şambır","1213123","11/C")
);
for ($i=0; $i<3; $i++){
    for($x=0; $x<3; $x++){

        echo $dizi[$i][$x]."<br \>";
    }


}
//Dizi tanımlama
/*
$dizi= array("kAMİL","Şakir","Mehmet","Yanti");
echo $dizi[1];
*/


?>