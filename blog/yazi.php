<?php
include("baglanti.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$gelen_id=$_GET['id'];
$alan=mysql_query("SELECT * FROM blog  WHERE id=$gelen_id");
$etiket=mysql_query("select *  from blog_etiket b join etiket e on b.etiket_id=e.id where b.blog_id=$gelen_id");

while($veri= mysql_fetch_array($alan)) {?>
    <div class='col-xs-2 col-sm-4 col-md-6 col-lg-12 well ' >
        <div class='col-xs-2 col-sm-4 col-md-6 col-lg-4 '>
            <img src='<?php echo $veri["fotograf"]?>' class='img-responsive'>
            <?php echo $veri["tarih"];?>
        </div>
        <div class='col-xs-2 col-sm-4 col-md-6 col-lg-8'>
            <b> <h4><?php echo $veri["baslik"]?></b> </h4> <br>
            <?php
            $arr_etiket=array();
            while($etiket_veri=mysql_fetch_array($etiket)){
                $arr_etiket[]='<a href="index.php?tag='.$etiket_veri['etiket'].'">'.$etiket_veri['etiket'].'</a>';
            }?>
            <?php echo implode(' / ', $arr_etiket)?><br><br>
            <?php echo $veri["icerik"]?> <br>
        </div>
    </div>

<?php } ?>
</body>
</html>
