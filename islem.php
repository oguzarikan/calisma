
<?php


print_r($_POST);
$keys=array_keys($_POST);
print_r($keys);
echo "<hr>";
for($i=0;$i<4;$i++)
{
	echo $keys[$i]." = ".$_POST[$keys[$i]]."<br/>";
}


foreach($_POST as $key=>$value)
{
	echo $key."  = ".$value."<br/>";
}


?>

<?php


print_r($_POST);
$keys=array_keys($_POST);
print_r($keys);
echo "<hr>";
for($i=0;$i<4;$i++)
{
	echo $keys[$i]." = ".$_POST[$keys[$i]]."<br/>";
}


foreach($_POST as $key=>$value)
{
	echo $key."  = ".$value."<br/>";
}


?>