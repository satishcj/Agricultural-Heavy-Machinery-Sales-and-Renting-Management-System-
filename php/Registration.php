<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="loginbox">
		<img src="user (1).png" class="user">
		<h2 style="color: #fff">Register Here</h2>
		<form>
			<div class="row form-group">
				<div class="col col-md-3">
					<p>Name:</p>
				</div>
				<div class="col col-md-9">
					<input style="width: 100%;" type="text" placeholder="Enter your Name" name: "">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-3">
					<p>E-Mail:</p>
				</div>
				<div class="col col-md-9">
					<input style="width: 100%;" type="email" placeholder="Enter your E-Mail" name: "">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-3">
					<p>Password:</p>
				</div>
				<div class="col col-md-9">
					<input style="width: 100%;" type="password" placeholder="Enter your Password" name: "">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-3">
					<p>Re-enter:</p>
				</div>
				<div class="col col-md-9">
					<input style="width: 100%;" type="password" placeholder="Enter your Password" name: "">
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col col-md-3">
					<p>Gender:</p>
				</div>
				<div class="col col-md-2">
					<input type="radio" name="">
				</div>
				<div class="col col-md-2">
					<h>Male</h>
				</div>
				<div class="col col-md-2">
					<input type="radio" name="">
				</div>
				<div class="col col-md-2">
					<h>Female</h>
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-3">
					<p>Phone:</p>
				</div>
				<div class="col col-md-3">
					<select>
						<option>+91</option>
						<option>+98</option>
						<option>+62</option>
						<option>+39</option>
						<option>+81</option>
						<option>+60</option>
						<option>+52</option>
						<option>+95</option>
					</select>
				</div>
				<div class="col col-md-6">
					<input style="width: 100%;" type="number" placeholder="Phone" name: "">
				</div>
			</div>


			<div class="row form-group">
				<div class="col col-md-3">
				</div>
				<div class="col col-md-6">
					<input style="width: 100%;" type="submit" value="Submit" name="">
				</div>
				<div class="col col-md-3">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-3">
				</div>
				<div class="col col-md-6" style="text-align: center;">
					<a href="index.php">Log in</a>
				</div>
				<div class="col col-md-3">
				</div>
			</div>
		</form>
	</div>	
</body>
</html>