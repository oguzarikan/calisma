<?php
include("../hasan/kayitlar.php");
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <h1>Stajyerler</h1>
    <div class="row">
        <?php foreach($kayitlar as $kayit){ ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <img class="img-responsive" src="<?php echo $kayit['foto'] ?>"/>
                <h2><b><?php echo $kayit['ad']?></b></h2>
                <a><?php echo $kayit['user']?></a><br>
                <?php echo $kayit['email']?>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>