<?php include "db.php";
// $pass = sha1("123456789");
// mysqli_query($con, "insert into admin (email, password) value ('golu@gmail.com','$pass')");
checkAuth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php include "header.php"; ?>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-8 shadow-lg mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="fw-bold text-center text-primary">Student Details</h2>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">father</label>
                                <input type="text" name="father_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="text-dark" style="font-size:18px;">email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">maths</label>
                                    <input type="text" name="maths" class="form-control">
                                </div>
                                
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">sci</label>
                                    <input type="text" name="sci" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">sst</label>
                                    <input type="text" name="sst" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">hindi</label>
                                    <input type="text" name="hindi" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="" class="text-dark" style="font-size:18px;">eng</label>
                                    <input type="text" name="eng" class="form-control">
                                </div>
                            </div>
                           
                            <div class="mb-3">
                                <input type="submit" value="create" name="create" class="btn btn-danger d-inline-block" style="margin-left:110px;font-size:20px;">
                            </div>
                        </form>

    
                         <?php
                        if(isset($_POST['create'])){
                             $id = $_POST['id'];
                             $name = $_POST['name'];
                             $contact = $_POST['contact'];
                             $father_name = $_POST['father_name'];
                             $email = $_POST['email'];
                             $maths = $_POST['maths'];
                             $sci = $_POST['sci'];
                             $sst = $_POST['sst'];
                             $hindi = $_POST['hindi'];
                            $eng = $_POST['eng'];
                             $query = mysqli_query($con,"insert into results (name,contact,father_name, email, maths, sci, sst,hindi,eng) value ('$name','$contact','$father_name','$email','$maths','$sci','$sst','$hindi','$eng')");

                            if($query){
                                echo "<script> window.open('index.php','_self')</script>";
                             }
                        }
                        ?>
                     </div>
                </div>
            </div>            
        </div>
    </div>

</body>

</html>