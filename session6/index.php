<?php

include("config.php");

?>
<?php
$fetch_record = $con->query("SELECT * FROM `record`");

if(isset($_POST['btn'])){

$name=$_POST['name'];
$id=$_POST['id'];

$Math=$_POST['Math'];
$Islamiat=$_POST['Islamiat'];
$Physics=$_POST['Physics'];
$Urdu=$_POST['Urdu'];
$English=$_POST['English'];

$sum = $Math+$Islamiat+$Physics+$Urdu+$English;

$calculate = $sum / 500 * 100;

$insert = $con->query("INSERT INTO `record`(`name`, `stdid`, `Math`, `Islamiat`, `Physics`, `Urdu`, `English`, `ObtainedMarks`, `Percentage`) VALUES ('$name','$id','$Math','$Islamiat','$Physics','$Urdu','$English','$sum','$calculate')");



?>

<script>
    alert(" <?php echo $name."
        your percentage is ".$calculate ?>")
</script>
<?php
$fetch_record = $con->query("SELECT * FROM `record`");

}



?>
<!doctype html>
<html lang="en">

<head>
    <title>
        Percentage Calculator
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1 class="display-3 mb-5 text-center">Percentage<small class="text-info"> (Calculator) </small> </h1>




        <form action="index.php" method="POST">


            <div class="row">

                <div class="col col-md-6">
                    <div class="form-group">
                        <label for="">Student Name :</label>
                        <input type="text" name="name" class="form-control">

                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="form-group">
                        <label for="">Student ID :</label>
                        <input type="text" name="id" class="form-control">

                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="form-group">
                        <label for="">Math<small>(Marks Obtained)</small>:</label>
                        <input type="number" name="Math" class="form-control">

                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="form-group">
                        <label for="">Islamiat<small>(Marks Obtained)</small>:</label>
                        <input type="number" name="Islamiat" class="form-control">

                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="form-group">
                        <label for="">Physics<small>(Marks Obtained)</small>:</label>
                        <input type="number" name="Physics" class="form-control">

                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="form-group">
                        <label for="">Urdu<small>(Marks Obtained)</small>:</label>
                        <input type="number" name="Urdu" class="form-control">

                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="form-group">
                        <label for="">English<small>(Marks Obtained)</small>:</label>
                        <input type="number" name="English" class="form-control">

                    </div>
                </div>

            </div>







            <input type="submit" name="btn" value="Submit" class="btn btn-primary float-right">


        </form>



        <h1 class="display-3 mt-5">Percentage Record of student </h1>


        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Maths</th>
                    <th>Islamiat</th>
                    <th>Physics</th>
                    <th>Urdu</th>
                    <th>English</th>

                    <th>Total Marks</th>
                    <th>Obtained Marks</th>
                    <th>Percentage</th>
                    <th>Status</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php  
    
    
    
    foreach($fetch_record as $row) {?>

                <tr>
                    <td scope="row"><?php echo $row['stdid'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['Math'] ?></td>
                    <td><?php echo $row['Islamiat'] ?></td>
                    <td><?php echo $row['Physics'] ?></td>
                    <td><?php echo $row['Urdu'] ?></td>
                    <td><?php echo $row['English'] ?></td>
                    <td><?php echo $row['TotalMarks'] ?></td>
                    <td><?php echo $row['ObtainedMarks'] ?></td>
                    <td><?php echo $row['Percentage'] ?></td>

                    <?php

            if($row['Percentage'] >= 45 ){
                ?>

                    <td style="background-color:greenyellow;">
                        Pass
                    </td>
                    <?php
                        }else{
                            ?>

                    <td style="background-color:red;">
                        Failed
                    </td>
                    <?php
                        }


            ?>





                    <?php

                if($row['Percentage'] <= 45 ){
                    ?>

                    <td style="background-color:red;">
                        F
                    </td>
                    <?php
                }elseif($row['Percentage'] <= 60 ){
                    ?>

                    <td style="background-color:orange;">
                        C
                    </td>
                    <?php
                }elseif($row['Percentage'] <= 70 ){
                    ?>

                    <td style="background-color:Blue;">
                        B
                    </td>
                    <?php
                }
                elseif($row['Percentage'] <= 80 ){
                    ?>

                    <td style="background-color:pink;">
                        A
                    </td>
                    <?php
                }elseif($row['Percentage'] <= 100 ){
                    ?>

                    <td style="background-color:greenyellow;">
                        A+
                    </td>
                    <?php
                }
 

                ?>




                    <td>

                        <a href="edit.php?id=<?php echo $row['id'] ?>" target="_blank" class="btn btn-primary">Edit
                            Record</a>

                    </td>


                </tr>
                <?php } ?>
            </tbody>
        </table>





    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>