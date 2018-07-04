<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<style media="screen">
		.container{
			padding-top: 1rem;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-dark navbar-expand-md bg-dark">
		<div class="container-fluid">
			<a href="index.php" class=" navbar-brand">Yash classes</a>
		</div>
		<ul class="navbar-nav">
			<a href="index.php" type="button" class="btn btn-primary " >Log out</a> 
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="container">
					<div class="card">
						<div class="card-header">
							Links
						</div>
						<div class="card-body">
							<ul class="list-group">
								<a href="add_student.php " class="list-group-item disabled">Add student</a>
								<a href="add_result.php" class="list-group-item">Add result</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<h1 class="card-title">Add student</h1>
						    <div class="card">
						        <div class="card-body">
						            <form class="" action="index.html" method="post">
						                <div class="form-group row">
						                    <label for="student_name" class="col-sm-2 col-form-label">Student name</label>
						                    <div class="col-sm-10">
						                        <input type="text" class="form-control" name="student_name" value="" autofocus required>
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="father_name"  class="col-sm-2 col-form-label">Father name</label>
						                    <div class="col-sm-4">
						                        <input type="text" name="father_name" class="form-control" value="" required>
						                    </div>
						                    <label for="father_no"  class="col-sm-2 col-form-label">Phone no. </label>
						                    <div class="col-sm-4">
						                        <input type="text" name="father_no" class="form-control" value="" required>
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="mother_name"  class="col-sm-2 col-form-label">Mother name</label>
						                    <div class="col-sm-4">
						                        <input type="text" name="mother_name" class="form-control" value="" required>
						                    </div>
						                    <label for="mother_no"  class="col-sm-2 col-form-label">Phone no. </label>
						                    <div class="col-sm-4">
						                        <input type="text" name="mother_no" class="form-control" value="">
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="std" class="col-sm-2 col-form-label">Std.</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="std">
						                            <option>1</option>
						                            <option>2</option>
						                            <option>3</option>
						                            <option>4</option>
						                            <option>5</option>
						                            <option>6</option>
						                            <option>7</option>
						                            <option>8</option>
						                            <option>9</option>
						                            <option>10</option>
						                        </select>
						                    </div>
						                    <label for="medium" class="col-sm-2 col-form-label">Medium</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="medium">
						                            <option>Gujarati</option>
						                            <option>English(GSEB)</option>
						                            <option>English(CBSC)</option>
						                        </select>
						                    </div>
						                </div>
						                <div class="form-group row">
						                    <label for="address" class="col-sm-2 col-form-label">Address</label>
						                    <div class="col-sm-10">
						                        <textarea name="address" rows="4" class="form-control" required></textarea>
						                    </div>
						                </div>
						                <center><input type="submit" name="submit" value="Submit" class="btn btn-outline-primary btn-lg"></center>
						            </form>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>
