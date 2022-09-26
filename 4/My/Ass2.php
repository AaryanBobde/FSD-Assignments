<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Username </th>
 <th> Password </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from crudtable ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete2.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>
<p style = "font-family = Bold;">
    Hi,        
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="insert.php" class="btn btn-warning">Insert</a>


        </p>

  <meta charset="UTF-8" />
  <!-- Responsive Meta Tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Apollo App.</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,900" rel="stylesheet">
  <!-- Adding Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Adding Bootstrap CDN and external CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


  
</head>
<body>




  <!-- Main Section -->
  <section id="main">

    <div class="container">
      <!-- Navbar Here -->
      <nav class="navbar navbar-expand-md navbar-dark bg-transparent pt-5">
        <a href="#" class="navbar-brand logo">Apollo App.</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#main" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#overview" class="nav-link">Features</a>
            </li>
            <li class="nav-item">
              <a href="#testimonials" class="nav-link">Testimonials</a>
            </li>
            <li class="nav-item">
              <a href="#pricing" class="nav-link">Pricing</a>
            </li>
          </ul>
        </div>

      </nav>
    </div>

    <div class="container">
      <div class="row header-main">

        <div class="col-md-6">
          <h1 class="header-info">Build your business with our Dream Team of Developers</h1>
          <button class="btn btn-dark btn-lg btn-space"><i class="fab fa-google-play"></i> Download</button>
          <button class="btn btn-outline-light btn-lg btn-space"><i class="fab fa-apple"></i> Download</button>
        </div>

        <div class="col-md-6 text-center">
          <img src="https://www.freeiconspng.com/uploads/apple-iphone-x-pictures-5.png" class="ml-5 iphone-mock" width="300" alt="iPhone Image">

        </div>

      </div>
    </div>

  </section>

  <!-- Overview Section -->
  <section id="overview">
    <h2 class="text-center section-title">Overview</h2>

    <div class="container-fluid">
      <div class="row overview-row">

        <div class="col-md-4 text-center">
          <i class="far fa-object-group overview-icon"></i>
          <h3 class="overview-header">Creative Design</h3>
          <p class="info-width mx-auto">We stay on top of the current trend and always stay ahead of modern design implement</p>
        </div>

        <div class="col-md-4 text-center">
          <i class="fas fa-cogs overview-icon"></i>
          <h3 class="overview-header">Fully Customizable</h3>
          <p class="info-width mx-auto">Apps are fully Customizable to your needs and Our Talented Developer will be with you in every step of the way</p>
        </div>

        <div class="col-md-4 text-center">
          <i class="fas fa-phone overview-icon"></i>
          <h3 class="overview-header">24/7 Support</h3>
          <p class="info-width mx-auto">We provide 24/7 support with our Amazing Customer Service Team</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section id="pricing">
    <h2 class="text-center section-title pricing-title">Pricing</h2>

    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="card">
            <div style="background-color: rgb(27, 206, 219);" class="card-body text-center">
              <h2 class="card-title text-muted">Basic Plan</h2>
              <h1 class="card-title pricing-text">$19.99/month</h1>
              <p class="card-text">5 Projects</p>
              <p class="card-text">20 Images</p>
              <p class="card-text">3 Design Template</p>
              <button class="btn btn-dark btn-block">Sign Up</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div style="background-color: rgb(50, 218, 101);" class="card-body text-center">
              <h2 class="card-title text-muted">Advance Plan</h2>
              <h1 class="card-title pricing-text">$29.99/month</h1>
              <p class="card-text">10 Projects</p>
              <p class="card-text">30 Images</p>
              <p class="card-text">5 Design Template</p>
              <button class="btn btn-dark btn-block">Sign Up</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div style="background-color: rgb(223, 133, 30);" class="card-body text-center">
              <h2 class="card-title text-muted">Pro Plan</h2>
              <h1 class="card-title pricing-text">$39.99/month</h1>
              <p class="card-text">Unlimited Projects</p>
              <p class="card-text">Unlimited Images</p>
              <p class="card-text">Unlimited Design Template</p>
              <button class="btn btn-dark btn-block">Sign Up</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="cta">
    <h1 class="text-center cta-text">Built the App of your Dream and Manage your Business</h1>
    <div class="btn-section text-center">
      <button class="btn btn-dark btn-lg btn-space"><i class="fab fa-google-play"></i> Download</button>
      <button class="btn btn-outline-light btn-lg btn-space"><i class="fab fa-apple"></i> Download</button>
    </div>
  </section>

</body>
</html>

<style>

body {
	font-family: 'Montserrat', sans-serif;
	font-size: 1.2rem;
}

/* For all section's title */
.section-title {
	font-size: 3rem;
}

/* Navigation */
.logo {
	font-weight: 900;
	font-size: 1.5rem;
}
.nav-item {
	margin: 0 20px;
}

/* Main Section */
#main {
	background-color: black;
	background-size: cover;
	height: 100vh;
}
.header-main {
	margin-top: 20px;
}
.header-info {
	font-weight: 900;
	font-size: 3rem;
	color: #fff;
}
.btn-outline-light {
	margin-left: 20px;
}
.btn-space {
	margin-top: 20px;
}

/* Overview */
.info-width {
	width: 60%;
	font-size: 1.3rem;
}
.overview-icon {
	font-size: 3rem;
	color: #5a34fc;
}
.overview-row {
	margin-top: 5rem;
}
.overview-header {
	font-weight: 900;
}
.overview-icon, .overview-header, .info-width {
	padding: 1rem 0;
}

#pricing {
	margin-top: 20px;
	padding: 100px 0;
}
.pricing-title {
	margin-bottom: 100px;
}
.card {
	box-shadow: 0px 3px 63px -12px rgba(0, 0, 0, 0.75);
	border-color: #5a34fc;
	border-radius: 10px;
}
.card-body {
	padding: 7% 0;
}

.cta-text{
  font-family:'Times New Roman', Times, serif;
}
.pricing-text {
	color: #5a34fc;
	font-size: 2rem;
	font-weight: bold;
	padding: 5% 0%;
}
.btn-block {
	font-size: 1.5rem;
}

/* Call To Action */
#cta {
	background-color: #5a34fc;
	padding: 7% 15%;
}
.cta-text {
	font-weight: bold;
	font-size: 3rem;
	color: #fff;
}



/* Media Queries */
@media only screen and (max-width: 768px) {

	.iphone-mock {
		display: none;
	}
	.card {
		margin: 20px 0;
	}
	.header-info {
		font-size: 2rem;
	}
	.btn-outline-light {
		margin-left: 0px;
	}
	#footer {
		height: 70px;
	}

}
container{
  margin-bottom: 60px;
}


</style>