<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php
$fp = fopen("databasephp.txt","r");
if(!$fp){
    echo "Ошибка открытия файла";}
else{
    $counter = 0;
    $photo_array = array();
    while(!feof($fp)){
        $string = fgets($fp,50);
        $array = explode(" ", $string);
        if ($array[0] == 'Moscow'){
            array_push($photo_array, $array[1]);
        }
    }
    for($i = 0; $i < 3; $i++){
        $file_name = $photo_array[$i] . ".png";
        echo "<img src=\"$file_name\"<br>";
    }
}
?>

</body>
</html>
