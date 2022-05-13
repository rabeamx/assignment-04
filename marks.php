<?php

include_once "./autoload.php";

// get student id
if( isset($_GET['student_id']) ){
    $id = $_GET['student_id'];

    $data = connect() -> query("SELECT * FROM students WHERE id='$id' LIMIT 1 ");
    $student_data = $data -> fetch_object();
} else {
    header("location:./");
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php 
    
        // result form submit 
        if( isset($_POST['result_add']) ){
            // get student id value 
            $student_id = $student_data -> id;

            // get form data 
            $bn = $_POST['bn'];
            $en = $_POST['en'];
            $math = $_POST['math'];
            $sci = $_POST['sci'];
            $ssci = $_POST['ssci'];
            $reli = $_POST['reli'];


            if( empty($bn) || empty($en) || empty($math) || empty($sci) || empty($ssci) || empty($reli) ){
                $msg = validate('All fields are required');
            }else {
                connect() -> query("UPDATE students SET bn='$bn', en='$en', math='$math', sci='$sci', ssci='$ssci', reli='$reli' WHERE id='$student_id'");
                header("location:./");
            }


        }
    
    
    ?>

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
                    <hr>
				    <?php echo $msg ?? ''; ?>
				    <form action="" method="POST">

                        <div class="form-group">
                            <label for="">Bangla</label>
                            <input name="bn" value="<?php echo $student_data -> bn; ?>" class="form-control" type="text">
                        </div>  
                        <div class="form-group">
                            <label for="">English</label>
                            <input name="en" value="<?php echo $student_data -> en; ?>" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Math</label>
                            <input name="math" value="<?php echo $student_data -> math; ?>" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Science</label>
                            <input name="sci" class="form-control" value="<?php echo $student_data -> sci; ?>" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Social Science</label>
                            <input name="ssci" class="form-control" value="<?php echo $student_data -> ssci; ?>" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Religion</label>
                            <input name="reli" class="form-control" value="<?php echo $student_data -> reli; ?>" type="text">
                        </div>
                        
                        <div class="form-group">
                            <input name="result_add" class="btn btn-primary" type="submit" value="Set Result">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>