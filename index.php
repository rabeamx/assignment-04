<?php

include_once "./autoload.php";

// student data delete
if( isset($_GET['delete_id']) ){

    $id = $_GET['delete_id'];

    connect() -> query("DELETE FROM students WHERE id='$id' ");
    header("location:index.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-13">
        <a class="btn btn-primary btn-sm my-3" href="./create.php">Add New Student</a>
        <hr>
        <form class="form-inline" action="" method="POST">
            <div class="my-3">
                <select name="ls" id="" class="form-control form-inline">
                    <option value="">Select</option>
                    <option value="mirpur">Mirpur</option>
                    <option value="uttara">Uttara</option>
                    <option value="badda">Badda</option>
                    <option value="banani">Banani</option>
                </select>
            </div>
            <div class="my-3">
                <input name="search" type="submit" value="search"  class="btn btn-sm btn-primary form-inline">
            </div>
        </form>
        <hr>
            <div class="card shadow">
                <div class="card-body">
                    <h3>All Student Info</h3>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Education</th>
                                <th>Location</th>
                                <th>Payment</th>
                                <th>Result</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                $data = connect() -> query("SELECT * FROM students");
                                // if( isset($_POST['search']) ){
                                //     $location = $_POST['ls'];

                                //     $data = connect() -> query("SELECT * FROM students WHERE location='$location' ");
                                // }
                                $i = 1;
                                while( $students =  $data -> fetch_object() ) :            

                             ?>
                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $students -> name; ?></td>
                                <td><?php echo $students -> email; ?></td>
                                <td><?php echo $students -> phone; ?></td>
                                <td><?php echo $students -> gender; ?></td>
                                <td><?php echo $students -> education; ?></td>
                                <td><?php echo $students -> location; ?></td>
                                <td><?php echo $students -> payment; ?></td>
                                <td><a class="btn btn-info btn-sm" href="./marks.php?student_id=<?php echo $students -> id; ?>">set mark</a></td>
                                <td><img style="width: 110px;" src="./assets/image/<?php echo $students -> photo; ?>" alt=""></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="./profile.php?student_id=<?php echo $students -> id; ?>">View</a>
                                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $students -> id;
                                    ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>