<?php
if ($_POST) {
    $urun = $_POST["urun"];
    $adet = $_POST["adet"];
    $As = $_POST["As"];
    $tel = $_POST["tel"];
    if (empty($adet) || empty($As) || empty($urun)) {
        echo "Lütfen bu alanları  boş geçmeyiniz";
    } else {
        $deger = $urun . "\t" . $adet . "\t" . $As . "\t" . $tel . "\n";
        $ac = fopen("prototurk.txt", "a");
        fwrite($ac, $deger);


    }
}

else {

    ?>
    <h1>Sipariş ver </h1>

<form action="" method="Post">
<table cellpadding="5" cellspacing="5">
<tr>
<td> Urunler</td>
<td><select name="urun"><option value="Bilgisayar">Bilgisayar</option>
 <option value="Telefon" > Telefon</option>
 </select>
</td>
</tr>
<tr>
<td>Adet </td>
<td> <input type="text" name="adet"/></td>
</tr>
<tr>
<td> Alıcı Adı-Soyadı</td>
<td><input type="text" name="As"\></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="gonder"\> </td>
</tr>
    <tr>
        <td>
            Alıcı Telefon Numarası
        </td>
        <td>
            <input type="text" name="tel"\>
        </td>
    </tr>

</table>
</form>
<?php
}
?>
