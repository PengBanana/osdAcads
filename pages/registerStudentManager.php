<?php
session_start();
//INSERT INTO `acadsosd`.`team` (`sportCode`, `teamName`, `teamSport`) VALUES ('BBM', 'Green Archers', 'Basketball Men');
if(isset($_POST['registerManager'])){
	require_once('../osd_connect.php');
	$idNumber=$_POST['idNumber'];
	$firstName=$_POST['firstName'];
	$middleName=$_POST['middleName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$query="INSERT INTO `acadsosd`.`user` (`idnumber`, `usertypeID`, `firstName`, `lastName`, `middleName`) VALUES ('".$idNumber."', '3', '".$firstName."', '".$lastName."', '".$middleName."');";
	mysqli_query($dbc,$query);	
	$query="INSERT INTO `acadsosd`.`studentmanager` (`idnumber`, `email`, `managerStatus_managerCode`) VALUES ('".$idNumber."', '".$email."', '3');";
	mysqli_query($dbc,$query);	
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/studentManagerForApproval.php");
}
?>
<!--
<html>
<head>
</head>
<body>
<form action="registerStudentManager.php" method="post">
ID Number: <input type="text" name="idNumber" maxlength="45" />
First Name: <input type="text" name="firstName" maxlength="45" />
Middle Name: <input type="text" name="middleName" maxlength="45" />
Last Name: <input type="text" name="lastName" maxlength="45" />
Email: <input type="text" name="email" maxlength="45" />
</form>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HR</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="custom.css" rel="stylesheet">

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>

                    <div class="panel-body">
						<form action="registerStudentManager.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label>ID Number</label>
                                    <input class="form-control" placeholder="ID No" Name="idNumber" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" placeholder="First Name" name="firstName" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input class="form-control" placeholder="Middle Name" name="middleName" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" placeholder="Last Name" name="lastName" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>E-mail Address</label>
                                    <input class="form-control" placeholder="email" name="email" type="text" autofocus>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                               	    <input class="btn btn-success btn-block" type="submit" name="registerManager" value="submit"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

