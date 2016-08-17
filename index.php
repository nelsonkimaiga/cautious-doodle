<?php // error_reporting(E_ALL ^ E_DEPRECATED);
//session_start();
//include_once('includes/queryfunctions.php');
//include_once('includes/functions.php');
//$conn=@mysql_connect(HOST . ":" . PORT , USER, PASS);
//if (!$conn) {
//    die('Could not connect: ' . mysql_error());
//}
//mysql_select_db(DB);
//
//if(isset($_POST["submit"]) && $_POST["submit"]=='Search'){
//
//	if(isset($_POST["countryid"]) && trim($_POST["countryid"])!=='') $country = "job.countryid=$_POST[countryid] OR";
//
//	//criteria for searching
//	if(isset($_POST["keyword"]) && trim($_POST["keyword"])!=='') $keyword="(job.jobtitle LIKE '%$_POST[keyword]%' OR job.summary LIKE '%$_POST[keyword]%' OR job.description LIKE '%$_POST[keyword]%' OR job.requirements LIKE '%$_POST[keyword]%' OR employer.organization LIKE '%$_POST[keyword]%')";
//	$where = "WHERE $country $keyword";
//}
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
    </head>
    <body>
        <div>
            <?php
            echo 'Mjamaa';
            ?>
        </div>
        
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/app.js"></script>
        <script src="js/waypoint.js"></script>
    </body>
</html>
