<?php

$file = "feedback.csv";
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$data = $name . ',' . $email . ',' . $rating . ',' . $rating;
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
header("Location: index.html");

?>