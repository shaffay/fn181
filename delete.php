<?php
include('config.php');

if(isset($_GET['id'])){

    $id= $_GET['id'];



    $delete=$con->query("DELETE FROM `feedaback` WHERE `id`='$id'");

    if($delete){

        header("location:session5.php");
    }




}


?>