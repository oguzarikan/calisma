<?php
include("baglanti.php");
?>
<html lang="en">
<head>
    <title>Oğuzhan </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div>
    <?php

    $where='';
    if(isset($_GET['tag']))
    {
        $tag=$_GET['tag'];
        $where=" where id in(select blog_id from blog_etiket b join etiket e on b.etiket_id=e.id where etiket='$tag')";
    }

    $alan= mysql_query("Select * from blog".$where);
    while($veri= mysql_fetch_array($alan)) {

        echo"<div class='col-xs-2 col-sm-4 col-md-6 col-lg-12 well ' style='border-bottom-color: blue'>";
        echo "<div class='col-xs-2 col-sm-4 col-md-6 col-lg-4 ' style='border-bottom-color: #9cff64'>";
        echo "<img src='".$veri["fotograf"]."' class='img-responsive'>";
        echo $veri["tarih"];
        echo "</div>";
        echo "<div class='col-xs-2 col-sm-4 col-md-6 col-lg-8'>";
        echo "<b> <h4>".$veri["baslik"]."</b> </h3> <br>";

        echo $veri["icerik"]." <br>";
        echo "</div>";
        echo "<div class='col-xs-2 col-sm-4 col-md-6 col-lg-8 text-right'>";
        echo "<a href='yazi.php?id=".$veri["id"]."'>Habere git</a>";
        echo "</div>";
        echo "</div>";

    }
    ?>
</div>
</body>
</html>
