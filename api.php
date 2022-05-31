<?php

$db= mysqli_connect("localhost","root","","madrsa");


$fecth_std = $db->query("SELECT * FROM `student`");


$res = mysqli_fetch_array($fecth_std);


$data =json_encode($res);

echo $data;


?>