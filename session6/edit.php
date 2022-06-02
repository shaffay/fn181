<?php

include("config.php");

if(isset($_GET['id'])){


    $id = $_GET['id'];

    $fetch = $con->query("SELECT * FROM `record` WHERE `id`='$id'");

    $std = mysqli_fetch_array($fetch);


    // echo $std['name'];



    // echo $id;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Editing <?= $std['name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          
  <form action="edit.php" method="POST" >

  <input type="hidden" value="<?= $std['id'] ?>" name="id">

<div class="row">

<div class="col col-md-6">
<div class="form-group">
        <label for="">Student Name :</label>
        <input type="text" value=" <?= $std['name'] ?>" name="name" class="form-control" >
        
    </div>
</div>
<div class="col col-md-6">
<div class="form-group">
        <label for="">Student ID :</label>
        <input type="text" value="<?= $std['stdid'] ?>" name="stdid" class="form-control" >
        
    </div>
</div>
<div class="col col-md-2">
<div class="form-group">
        <label for="">Math<small>(Marks Obtained)</small>:</label>
        <input type="number" value="<?= $std['Math'] ?>" name="Math" class="form-control" >
        
    </div>
</div>
<div class="col col-md-2">
<div class="form-group">
        <label for="">Islamiat<small>(Marks Obtained)</small>:</label>
        <input type="number" value="<?= $std['Islamiat'] ?>" name="Islamiat" class="form-control" >
        
    </div>
</div>
<div class="col col-md-2">
<div class="form-group">
        <label for="">Physics<small>(Marks Obtained)</small>:</label>
        <input type="number" value="<?= $std['Physics'] ?>" name="Physics" class="form-control" >
        
    </div>
</div>
<div class="col col-md-2">
<div class="form-group">
        <label for="">Urdu<small>(Marks Obtained)</small>:</label>
        <input type="number" value="<?= $std['Urdu'] ?>" name="Urdu" class="form-control" >
        
    </div>
</div>
<div class="col col-md-2">
<div class="form-group">
        <label for="">English<small>(Marks Obtained)</small>:</label>
        <input type="number" value="<?= $std['English'] ?>" name="English" class="form-control" >
        
    </div>
</div>

</div>







    <input type="submit" name="btn" value="Save" class="btn btn-primary float-right" >


</form>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$fetch_record = $con->query("SELECT * FROM `record`");

if(isset($_POST['btn'])){

$name=$_POST['name'];
$stdid=$_POST['stdid'];
$id=$_POST['id'];

$Math=$_POST['Math'];
$Islamiat=$_POST['Islamiat'];
$Physics=$_POST['Physics'];
$Urdu=$_POST['Urdu'];
$English=$_POST['English'];

$sum = $Math+$Islamiat+$Physics+$Urdu+$English;

$calculate = $sum / 500 * 100;

$update = $con->query("UPDATE `record` SET `name`='$name',`stdid`='$stdid',`Math`='$Math',`Islamiat`='$Islamiat',`Physics`='$Physics',`Urdu`='$Urdu',`English`='$English',`ObtainedMarks`='$sum',`Percentage`='$calculate' WHERE `id`='$id'");

if($update)
{
    ?>

<script>
window.location.href = 'index.php';
</script>
    <?php

}

}



?>