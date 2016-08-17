<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include_once('includes/queryfunctions.php');
include_once('includes/functions.php');
$conn=  mysqli_connect('127.0.0.1', 'root', '303seminarian', 'taifa_jobs');

if (!$conn) {
    die('Could not connect: ' . mysql_error());
    
}
//mysqli_select_db($conn, 'taifa-jobs') or die(mysqli_error($conn));

if(isset($_POST["submit"]) && $_POST["submit"]=='Search'){

	if(isset($_POST["countryid"]) && trim($_POST["countryid"])!=='') $country = "job.countryid=$_POST[countryid] OR";
        
	if(isset($_POST["keyword"]) && trim($_POST["keyword"])!=='') $keyword="(job.jobtitle LIKE '%$_POST[keyword]%' OR job.summary LIKE '%$_POST[keyword]%' OR job.description LIKE '%$_POST[keyword]%' OR job.requirements LIKE '%$_POST[keyword]%' OR employer.organization LIKE '%$_POST[keyword]%')";
	//" AND job.dateclosing <= current_date()";
	$where = "WHERE $country $keyword";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <title>Rhapsody Hire</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <!--foundation-->
        <link rel="stylesheet" type="text/css" href="css/foundation.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <!--fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <!--font-awsome-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--foundation icons-->
    </head>
    <body>
        <nav class="nav ">
            <div class="nav-center">
                <a class="toggle-nav" href="#">&#9776;</a>
                <div class="nav-mobile">
                    <ul class="left">
                        <li><a href="">Home</a></li>
                        <li><a href="">Vacancies</a></li>
                    </ul>
                    <ul class="right">
                        <li>
                            <a href="#">Employer Login/Register</a>
                        </li>
                        <li>
                            <a href="#">Applicant Login/Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container bodycontent">
            <div class="row">
                <h4>The Rhapsody Hiring Portal</h4>
                <p>Keep Track of your job applications</p>
                <hr>
                <div class="large-6 columns">
                    <form action="index.php" method="post" name="index" id="index" enctype="multipart/form-data">
                        <fieldset>
                            <label>Job Keyword</label>
                            <input type="text" name="keyboard">
                        </fieldset>
                        <fieldset>
                            <select name="countryid" id="countryid">
                                <option value="default" selected disabled>select country</option>
                            </select>
                        </fieldset>
                        <button class="button success" type="submit" name="submit">Search</button>
                        <a href="">Advanced Search</a>
                    </form>
                </div>
                
            </div>
        </div>
        
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/app.js"></script>
        <script src="js/what-input.js"></script>
    </body>
</html>
  <?php
		if(isset($_GET["list"])) $_SESSION["list"]=$_GET["list"];
		switch($_SESSION["list"]){
		case 'vacancies':
			vacancies($where);
			break;
		default:
			vacancies($where);
			break;
		}		
   ?>