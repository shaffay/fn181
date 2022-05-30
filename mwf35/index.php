<?php
session_start();

if(isset($_SESSION['uid']))
{
   
?>

<h2>Hello <?php echo $_SESSION['uname'] ?></h2>
<br>
<a href="logout.php">Logout</a>


<?php
}else{
    header("location:login.php");
}

?>