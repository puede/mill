<?php

echo "hello world!";
$youku=file_get_contents("https://music.163.com/");
// print($youku);

$file=fopen("./fwrite.php","w");

fwrite($file,$youku);

fclose($file);


?>