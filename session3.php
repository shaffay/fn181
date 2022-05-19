<!doctype html>
<html lang="en">
  <head>
    <title>Calaulator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark">


  <div class="container text-light">

  <h1 class="display-3 text-center mt-3"> <u>Calculator</u> </h1>
  
  <form action="session3.php" method="post" >



  <div class="form-group">
    <label for="">First Number</label>
    <input type="number" class="form-control" name="num1" >
  </div>

  <div class="form-group">
    <label for="">Second Number</label>
    <input type="number" class="form-control" name="num2" >
  </div>


  <input type="submit" value="+" name="btn" class="btn btn-info float-right" >
  <input type="submit" value="*" name="multple" class="btn btn-info float-right mr-3" >

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

if(isset($_POST['btn'])){

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    
    $add = $n1 + $n2;
    ?>
    <script>alert("The Addition of "+<?php echo $n1 ?>+" + "+<?php echo $n2 ?>+" = "+<?php echo $add ?>)</script>

<?php
}




?>
<?php

if(isset($_POST['multple'])){

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    
    $add = $n1 * $n2;
    ?>
    <script>alert("The Multiplication of "+<?php echo $n1 ?>+" x "+<?php echo $n2 ?>+" = "+<?php echo $add ?>)</script>

<?php
}




?>