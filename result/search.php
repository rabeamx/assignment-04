<?php

include_once "./autoload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>
	
<?php

if( isset($_POST['result']) ){
	// get values
	$exam = $_POST['exam'];
	$year = $_POST['year'];
	$board = $_POST['board'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];

	if( empty($exam) || empty($year) || empty($board) || empty($roll) || empty($reg) ){
		$msg = 'all fields are required!';
	} else{
		$result = connect() -> query("SELECT * FROM students WHERE education='$exam' AND year='$year' AND board='$board' AND roll='$roll' AND reg='$reg' ");

		$search_data = $result -> fetch_object();
	}
}

?>

	<div class="wraper">
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


				<div class="student-info">
					<div class="student-photo">
						<img src="../assets/image/<?php echo $search_data -> photo; ?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $search_data -> name; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $search_data -> roll; ?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $search_data -> reg; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $search_data -> board; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><span style="color:green;font-weight:bold;">Passed<span></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td><?php echo $search_data -> bn; ?></td>
							<td>5</td>
							<td>4.8</td>
							<td rowspan="6">4.8</td>
						</tr>
						<tr>
							<td>English</td>
							<td><?php echo $search_data -> eng; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Math</td>
							<td><?php echo $search_data -> math; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Science</td>
							<td><?php echo $search_data -> sci; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>S Sci</td>
							<td><?php echo $search_data -> ssci; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Religion</td>
							<td><?php echo $search_data -> rel; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
					</table>
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

	

	
</body>
</html>