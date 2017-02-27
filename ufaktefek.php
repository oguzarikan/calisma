<link rel="stylesheet" type="text/css" href="style.css" />

</head>
    <?php
if($_POST){
    $kitap=$_POST["kitap"];
    $sayi=$_POST["sayi"];
    $adsoyad=$_POST["adsoyad"];

    if (empty($kitap) || empty($sayi) || empty($adsoyad)) {
    echo "Bu alanlar boş geçilemez";


                    }
        else
        {
         $deger= $kitap . "\t" . $sayi. "\t" . $adsoyad ."\n" ;
          $ac=fopen("prototurk.txt", "a");
        fwrite($ac,$deger);

        }
}
else
{
    ?>



<h1>Ürün Satın Al</h1>
  <form action="" method="post" class="form">

<table cellspacing="5" cellpadding="5">
<tr>
<td>Kitaplar</td>
<td><input type="text" name="kitap"/></td>
</tr>
<tr>
<td class="renklendir boldekle"> Kitap Sayisi</td>
<td> <select name="sayi"><option value="Bir">1</option>
<option value="2"> İki</option>
<option value="3">Üç</option></select>
</td>
</tr>
<tr>
<td>Ad-Soyad</td>
<td><input type="text" name="adsoyad"/></td>
</tr>
<tr>
<td><input type="submit" value="gönder"/></td>
</tr>
</table>
</form>
<?php } ?>
