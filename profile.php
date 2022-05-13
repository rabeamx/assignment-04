<?php

include_once "./autoload.php";

// get profile data
if( isset($_GET['student_id']) ){
    $id = $_GET['student_id'];
    $data = connect() -> query("SELECT * FROM students WHERE id='$id' ");
    $student_data = $data -> fetch_object();
} else{
    header("location:./");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $student_data -> name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="profile">
                        <img src="./assets/image/<?php echo $student_data -> photo; ?>" alt="">
                        <h2><?php echo $student_data -> name; ?></h2>
                        <p><?php echo $student_data -> email; ?></p>
                        <a class="btn btn-info btn-sm" href="./">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>