<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container main">
	<div class="row nvbar">
		<div class="col-2">
          <img src="img/logo.jpg" alt="">
		</div>
		<div class="col-10">
          <h3 class="maintitle">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h3>
		</div>
	</div>
  
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
       </li>
	   <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		People
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown3">
		<a class="dropdown-item" href="#">Faculty</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Post-Docs</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Students</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Research Staff</a>		
		</div>
	  </li>
     
		<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Academics
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
		<a class="dropdown-item" href="#">Programmes</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Courses Offered</a>
		</div>
	  </li>
	  <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Research
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
		<a class="dropdown-item" href="#">Areas of Research</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">ACSE Lab</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Computer Vision</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Computational Resources @ IITRPR</a>		
		</div>
	  </li>
    <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Join Us
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="#">Faculty</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">PhD/MS(R)</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">B-Tech</a>
    <div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">M-Tech</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">FAQ</a>				
		</div>
	  </li>
		<li class="navbar-item">
			<a class="nav-link" href="#">Contact Us</a>
		</li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>
	</div>
	<div class="container">
		<div class="row">
		  <div class="col-md-12">
			<br>
			<h2 class="text-danger">UG COURSES</h2>
		  </div>
		  <div class="col-md-12">
			  <div class="table-responsive-sm">
				<table class="table table-bordered">
				  <thead>
					<tr>
					  <th>Code</th>
					  <th>Course Name</th>
					  <th>Type</th>
					  <th>Last Modified on</th>
					  <th>Pre-requisites</th>
					</tr>
				  </thead>
				  <tbody class="bg">
					  <?php require("db.php");
						$result = mysqli_query($con,"SELECT * FROM cources ORDER BY id");
						while(($row = mysqli_fetch_array($result))){
							$date = strtotime($row['date']);
							echo '<tr><td>'.$row['code'].'</td>
								<td class="tdred">'.$row['name'].'</td>
								<td>'.$row['type'].'</td>
								<td>'.date('m/d/Y', $date).'</td>
								<td>'.$row['pre_req'].'</td></tr>';
						}
						mysqli_close($con);
					  ?>
				  </tbody>
				</table>
			  </div>
		  </div>
		</diV>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>