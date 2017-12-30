<?php
 $con=mysqli_connect("localhost","root","") or die("unable to connect!");
 mysqli_select_db($con,'manthan');

?>
<!DOCTYPE HTML>
<html lang="en-Us">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" Content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title> Placement </title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/demo.css"/>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
	<style type="text/css">
					.form-control{
						margin-bottom: 20px;
					}	
	</style>
</head>
<body>
<!--header-->
	<div class="container-fluid top_bar">
	<div class="container">
	<div class="row">
	<div class="col-sm-3">
	<a data-toggle="tooltip" data-placement="bottom" title="Facebook" class="social_icons"><i class="fa fa-facebook-square" style="font-size:20px; color:#fff"></i></a>
	<a data-toggle="tooltip" data-placement="bottom" title="Instagram" class="social_icons"><i class="fa fa-instagram" style="font-size:20px; color:#fff"></i></a>
	<a data-toggle="tooltip" data-placement="bottom" title="Snapchat" class="social_icons"><i class="fa fa-snapchat" style="font-size:20px; color:#fff"></i></a>
	</div>
	<div class="col-sm-9 text-right contact_info">
	<a data-toggle="tooltip" data-placement="bottom" title="Gmail"><span class="fa fa-envelope-square" style="font-size:20px; color:#fff"></span></a> manthanbvimit@gmail.com ,
	<span class="fa fa-phone-square" style="font-size:20px; color:#fff"></span> 8600509524 / 8451020143
	</div>
	</div><!--end of row-->
	</div><!--end of container-->
	</div><!--end of container fluid-->
	<!--logo and navigator-->
	
	<div class="container navigation">
		<div class="row">
			<div class="col-sm-7">
				<img src="images/logo.jpg" alt="" width="150" height="150">
			</div><!--end of col5-->
		<div class="col-sm-5 my_menu">
			<nav class="navbar navbar-default">
	
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				</div><!--end of navbar header-->
				
				<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav pull-right">
					<li ><a href="index.html" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
					<li><a href="Register.php">REGISTER</a></li>
					<li><a href="event.html">EVENT</a></li>
					<li><a href="#">GALLERY</a></li>
				</ul>
				</div><!--end of colapse-->
			</nav>
	
		</div><!--end of col7-->
	</div><!--end of row-->
	
	</div><!--end of container-->
	<!-- end of logo and navigator-->
	<!--start of registration form-->
		
	<div class="container">
		<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="row">
				<h1 style="text-shadow: 1px 2px 1px #000; text-align:center; font-family: 'lato',sans-serif;"> Registration </h1>
			</div>
			<div class="row panel-body">
				<div class="col-sm-6 col-md-6">
					<label>Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
				</div>
				
				<div class="col-sm-6 col-md-6">
					<label>College:</label>
					<input type="text" class="form-control" id="clg" placeholder="Enter clg name" name="clg" required>
				</div>

				<div class="col-sm-6 col-md-6">
					<label>City:</label>
					<input type="text" class="form-control" id="city" placeholder="Enter city name" name="city"> 
				</div>
				<br>

				<div class="col-sm-6 col-md-6">
					<label> Gender:</label><br>
						<select name="sex" class="form-control">
							<option> Select One </option>
							<option> Male </option>
							<option> Female </option>
						</select>
				</div>
				<div class="col-sm-6 col-md-6">
					<label>Mobile:</label>
					<input type="text" class="form-control" id="cnt" placeholder="Enter contact no" name="cnt" required> 
				</div>
				<div class="col-sm-6 col-md-6">
					<label>Email:</label>
					<input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required> 
				</div>
				
				<div class="col-sm-6 col-md-6">
					<label>Select event:</label>
					<?php
                                              $con=mysqli_connect("localhost","root","") or die("unable to connect!");
                                              mysqli_select_db($con,'manthan');
                    
                                              $sql = "SELECT enm FROM event";
                                              $result = mysqli_query($con,$sql);

                                             echo "<select class='form-control' name='eve'>";
                  
                                             while ($row = mysqli_fetch_array($result)) {
                                             echo "<option value='" . $row['enm'] ."'>" . $row['enm'] ."</option>";
                                             }
                                             echo "</select>";
					?>
				</div> 
				
				<div class="col-sm-6 col-md-6">
					<label>Select Sub event:</label>
					<?php
                                             
                                              $con=mysqli_connect("localhost","root","") or die("unable to connect!");
                                              mysqli_select_db($con,'manthan');
                    
                                              $sql = "SELECT snm FROM subevents";
                                              $result = mysqli_query($con,$sql);

                                             echo "<select class='form-control' name='subeve'>";
                  
                                             while ($row = mysqli_fetch_array($result)) {
                                             echo "<option value='" . $row['snm'] ."'>" . $row['snm'] ."</option>";
                                             }
                                             echo "</select>";
                              	
                    ?>
					
				</div>
				
				<div class="col-sm-12 col-md-12">
					<center>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button> 
					</center>
				</div> 
			</div>
		</form>
		<?php
			 if(isset($_POST['submit']))
				{
					$name = $_POST['name'];
					$clg = $_POST['clg'];
					$city = $_POST['city'];
					$gender = $_POST['sex'];
					$cont= $_POST['cnt'];
					$email= $_POST['email'];
					$event = $_POST['eve'];
					$subevent = $_POST['subeve'];
					
					$sql="insert into register(name,clg,city,gen,cnt,email,event,subevent) values ('$name','$clg','$city','$gender','$cont','$email','$event','$subevent')";
				
						if(!mysqli_query($con,$sql))
					{
						echo '<script type="text/javascript"> alert("Records not inserted") </script>';
					}

					else
					{
						echo '<script type="text/javascript"> alert("Records inserted successfully") </script>';
					}
				
				}
		?>
	</div>	
	<!-- end of form-->
<!--end of header-->
<footer id="footer">
        <div class="container">
            <div class="text-center">
                <p align="left"> Copyright  &copy;2018<a target="_blank" href="http://www.bvimit.co.in"> &nbsp BVIMIT </a>.</a></p>                
            </div>
        </div>
    </footer>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{ $('[data-toggle="tooltip"]').tooltip();
		});
		
		function ClearForm(form)
		{
			form.name.value =""
			form.clg.value = "";
			form.city.value = "";
			form.cnt.value = "";
			form.email.value = "";

		}	
	</script>
</body>
</html>