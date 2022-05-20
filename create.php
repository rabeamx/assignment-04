<?php

include_once "./autoload.php";

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

<?php
// Student Form Submit
if(isset($_POST['add_student'])){
// student form value
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $edu = $_POST['edu'];
   $board = $_POST['board'];
   $year = $_POST['year'];
   $gender = $_POST['gender'];
   $location = $_POST['location'];

   // photo validation
   $file_name = time() . rand() . $_FILES['photo']['name'];
   $file_tmp_name = $_FILES['photo']['tmp_name'];
   move_uploaded_file($file_tmp_name, './assets/image/' . $file_name);

   // form validation
   connect() -> query("INSERT INTO students (name, email, phone, gender, education, board, year, location, photo) VALUES ('$name', '$email', '$phone', '$gender', '$edu', '$board', '$year', '$location', '$file_name')");
}

?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
        <a class="btn btn-primary btn-sm my-3" href="./index.php">Student Info</a>
            <div class="card shadow">
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                  <div class="my-3">
                        <label for="">Name</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Phone</label>
                        <input name="phone" type="number" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Gender</label>
                        <input name="gender" type="radio" value="male" id="male"> <label for="male">Male</label>
                        <input name="gender" type="radio" value="female" id="female"> <label for="female">Female</label>
                    </div>
                    <div class="my-3">
                        <label for="">Education</label>
                        <select name="edu" id="" class="form-control">
                            <option value="">Select</option>
                            <option value="cse">CSE</option>
                            <option value="eee">EEE</option>
                            <option value="iso">ISO</option>
                            <option value="software">Software</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="">Board</label>
                        <select name="board" id="" class="form-control">
                                  <option value=""selected>Select</option>
								  <option value="barisal">Barisal</option>
								  <option value="chittagong">Chittagong</option>
								  <option value="comilla">Comilla</option>
		                          <option value="dhaka">Dhaka</option>
								  <option value="dinajpur">Dinajpur</option>
								  <option value="jessore">Jessore</option>
		                          <option value="rajshahi">Rajshahi</option>
		                          <option value="sylhet">Sylhet</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="">Year</label>
                        <select name="year" id="" class="form-control">
                            <option value="0000" selected>Select</option>
                            <option value="2022">2022</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                        </select>
                    </div>
                    <div class="my-3">
                    <label for="">Location</label>
                        <select name="location" id="" class="form-control">
                            <option value="">Select</option>
                            <option value="mirpur">Mirpur</option>
                            <option value="uttara">Uttara</option>
                            <option value="badda">Badda</option>
                            <option value="banani">Banani</option>
                        </select>
                    </div>
                    <div class="preview-image">
                        <img style="max-width: 100%;" id="preview" src="" alt="">
                    </div>
                    <div class="my-3">
                        <label for="">Photo</label>
                        <hr>
                        <input type="file" name="photo" class="d-none" id="image_upload">
                        <label for="image_upload"><img style="width: 110px;" src="https://winaero.com/blog/wp-content/uploads/2019/11/Photos-new-icon.png" alt=""></label>
                    </div>
                    <div class="my-3">
                        <input name="add_student" type="submit" value="Add Student" class="btn btn-primary">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#image_upload').change(function(e){
        let image = URL.createObjectURL(e.target.files[0]);
        $('#preview').attr('src', image);
    });
</script>

</body>
</html>