<?php

$file = "file.html";
$data = $_POST['candidate'];
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
header("Location: http://scalableprojects.000webhostapp.com/lraelection");

?>