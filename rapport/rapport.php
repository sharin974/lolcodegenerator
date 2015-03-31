<?php 
date_default_timezone_set('America/Montreal'); 
$data = file_get_contents("php://input"); 
$datas = json_decode(file_get_contents("php://input"));

file_put_contents(time() . '.xml', $data); 
file_put_contents(time() . '.txt', $datas);
?>