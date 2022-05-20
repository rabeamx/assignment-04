<?php

include_once "./autoload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>

	
	<div class="wraper">
		<a class="btn btn-info btn-sm my-3" href="./">back</a>
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">
			<div class="search-result">
				<p style="color:red; font-weight:bold;"><?php echo $msg ??'';?></p>
				<form action="./search.php" method="POST">
					<table>
					<tr>
						<td>Examination</td>
						<td>
							<select name="exam">
								<option value="">Select</option>
								<option value="cse">CSE</option>
								<option value="eee">EEE</option>
								<option value="iso">ISO</option>
								<option value="software">Software</option>
                          	</select>
						</td>
					</tr>
					<tr>
						<td>Year</td>
						<td>
							<select name="year">
                            <option value="0000" selected>Select</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                          
                          </select>
						</td>
					</tr>
					<tr>
						<td>Board</td>
						<td>
						 	<select name="board">
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
						</td>
					</tr>
					<tr>
						<td> Roll</td>
						<td><input name="roll" type="text"></td>
					</tr>
					<tr>
						<td> Reg: No</td>
						<td><input name="reg" type="text"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="reset" value="reset"> <input name="result" type="submit" value="submit"></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-2019 Ministry of Education, All rights reserved.</p>
			</div>
			<div class="f-right">
				<span>Powered by</span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</body>
</html>