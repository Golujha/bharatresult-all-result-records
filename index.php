<?php include "db.php";
 //$pass = sha1("123456789");
 //mysqli_query($con, "insert into admin (email, password) value ('golu@gmail.com','$pass')");
checkAuth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php include "header.php"; ?>

    <br><br>

    <div class="container">
            <a href="" class="btn btn-outline-danger " style="font-size: 20px;"><u>All Result Records</u> [<?php 
                 if(isset($_GET['find'])){
                    $search = $_GET['search'];
                    $view  = mysqli_query($con, "select * from results where name LIKE '%$search%'");
                }
               
                else{
                    $view  = mysqli_query($con, "select * from results");
                }
                
                

                $count = mysqli_num_rows($view);
                echo $count;
            ?>]
        
        </a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="insert.php" class="btn btn-square btn-primary ">Insert Result</a>
        </div>
        <div class="text-center"><h1>Student details</h1></div><br>
        <table class="table table-striped table-hover table-bordered border-primary text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">father_name</th>
                    <th scope="col">Email</th>
                    <th scope="col">maths</th>
                    <th scope="col">Sci</th>
                    <th scope="col">sst</th>
                    <th scope="col">hindi</th>
                    <th scope="col">eng</th>
                    <th scope="col">Total marks</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <?php 
            $view = mysqli_query($con, "select * from results");
            while($data = mysqli_fetch_array($view)){
                $id = $data['id'];
                $name = $data['name'];
                $contact = $data['contact'];
                $father_name = $data['father_name'];
                $email = $data['email'];
                $maths = $data['maths'];
                $sci = $data['sci'];
                $sst = $data['sst'];
                $hindi = $data['hindi'];
                $eng = $data['eng'];

                $total = $maths + $sci + $sst + $hindi + $eng;

                

            ?>
            <tr>
                <td><?php echo $id ; ?></td>
                <td><?php echo $name ; ?></td>
                <td><?php echo $contact ; ?></td>
                <td><?php echo $father_name ; ?></td>
                <td><?php echo $email ; ?></td>
                <td><?php echo $maths ; ?></td>
                <td><?php echo $sci ; ?></td>
                <td><?php echo $sst ; ?></td>
                <td><?php echo $hindi ; ?></td>
                <td><?php echo $eng ; ?></td>
                <td><?php echo $total ; ?></td>
                <td>
                    <?php
                    if($data['status']==1) {
                        echo '<p> <a href="active.php?id='.$data['id'].'&status=0" class="btn btn-danger">Active</a></p>';
                    }
                    else
                    {
                        echo '<p> <a href="active.php?id='.$data['id'].'&status=1" class="btn btn-success">DisActive</a></p>';
                    }
                    ?>
                </td>
            </tr>
            <?php }  ?>
             
        </table>
    </div>
</body>

</html>