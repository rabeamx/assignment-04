<?php

include_once "./autoload.php";

// get student id
if( isset($_GET['student_id']) ){
    $id = $_GET['student_id'];

    $data = connect() -> query("SELECT * FROM students WHERE id='$id' LIMIT 1 ");
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php

if( isset($_POST['result_add']) ){
    // result form submit
    $student_id = $student_data -> id;

    // get form data
    $bn = $_POST['bn'];
    $en = $_POST['en'];
    $math = $_POST['math'];
    $sci = $_POST['sci'];
    $ssci = $_POST['ssci'];
    $reli = $_POST['reli'];

    if(empty($bn) || empty($en)|| empty($math)|| empty($sci)|| empty($ssci)|| empty($reli)) {
        $msg = validate("all fields are required!", "warning");
    } else{
        connect() -> query("UPDATE students SET bn='$bn', eng='$en', math='$math', sci='$sci', ssci='$ssci', rel='$reli' WHERE id='$student_id' ");
        $msg = validate("result updated", "success");
    }
}

?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
        <a class="btn btn-info btn-sm my-3" href="./">back</a>
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="profile">
                        <img src="./assets/image/<?php echo $student_data -> photo; ?>" alt="">
                        <h5 class="my-3">Roll : <?php echo $student_data -> roll; ?> Reg : <?php echo $student_data -> reg; ?></h5>
                    </div>
                    <hr>
				    <?php echo $msg ?? ''; ?>
				    <form action="" method="POST">

                        <div class="my-3">
                            <label for="">Bangla</label>
                            <input name="bn" value="<?php echo $student_data -> bn; ?>" class="form-control" type="text">
                        </div>  
                        <div class="my-3">
                            <label for="">English</label>
                            <input name="en" value="<?php echo $student_data -> eng; ?>" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Math</label>
                            <input name="math" value="<?php echo $student_data -> math; ?>" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Science</label>
                            <input name="sci" class="form-control" value="<?php echo $student_data -> sci; ?>" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Social Science</label>
                            <input name="ssci" class="form-control" value="<?php echo $student_data -> ssci; ?>" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Religion</label>
                            <input name="reli" class="form-control" value="<?php echo $student_data -> rel; ?>" type="text">
                        </div>
                        
                        <div class="my-3">
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