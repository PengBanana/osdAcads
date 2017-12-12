<?php
/*
session_start();
//INSERT INTO `acadsosd`.`team` (`sportCode`, `teamName`, `teamSport`) VALUES ('BBM', 'Green Archers', 'Basketball Men');
if(isset($_POST['registerManager'])){
	//get all the data from the form and prepare for sql insert
	require_once('../osd_connect.php');
	$idNumber=$_POST['idNumber'];
	$firstName=$_POST['firstName'];
	$middleName=$_POST['middleName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$password=substr(hash('sha512',rand()),0,6);;
	//checking if user exist already
	$query='SELECT * FROM acadsosd.studentmanager WHERE idnumber="'.$idNumber.'";';
	$result=mysqli_query($dbc, $query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$checker=$row['idnumber'];
	if(empty($checker)){
		//insert the new user sql
		$query="INSERT INTO `acadsosd`.`user` (`idnumber`, `usertypeID`, `firstName`, `lastName`, `middleName`, `password`) VALUES ('".$idNumber."', '3', '".$firstName."', '".$lastName."', '".$middleName."', '".$password."');";
		mysqli_query($dbc,$query);
		$query="INSERT INTO `acadsosd`.`studentmanager` (`idnumber`, `email`, `managerCode`) VALUES ('".$idNumber."', '".$email."', '3');";
		mysqli_query($dbc,$query);
		echo '<div class="alert alert-success">
					 You will recieve an email once your account is activated.
					</div>';

	}
	else{
		$checker=$row['managerCode'];
			if($checker==2){
				//proceeds with registration if the account was just deactivated
				$query="UPDATE `acadsosd`.`studentmanager` SET `managerCode`='3' WHERE `idnumber`='".$idNumber."';";
				mysqli_query($dbc,$query);
				header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/reactivation.php");
			}
			else if($checker==3){
				//if account is currently for activation
				echo '<div class="alert alert-danger">
					Please wait for your administrator to activate your account.
					</div>';
			}else if($checker==1){
				//if account is currently for activation
				echo '<div class="alert alert-danger">
					Your account is already active.
					</div>';
			}
			else if($checker==4){
				//if account was rejected but wants to retry registration
				$query="UPDATE `acadsosd`.`studentmanager` SET `managerCode`='3' WHERE `idnumber`='".$idNumber."';";
				mysqli_query($dbc,$query);
				header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/reactivation.php");
			}
			else{
				echo '<div class="alert alert-danger">
					There is a problem with your account. Please contact your administrator.
					</div>';
			}
	}


}
*/
?>
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

<body id="backgroundImage">

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-top:10%">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="Images/OSDLOZADA.png" height="100px" width='auto' />
                    </div>
										<div class="form-group">
											<h3>Step 2 out of 2: Personal Information</h3>
										</div>
                    <div class="panel-body">
						<form action="registerStudentManager.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label class="required">ID Number</label>
                                    <input class="form-control" placeholder="ID No" Name="idNumber" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <label <label class="required">First Name</label>
                                    <input class="form-control" placeholder="First Name" name="firstName" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label <label class="required">Middle Name</label>
                                    <input class="form-control" placeholder="Middle Name" name="middleName" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label <label class="required">Last Name</label>
                                    <input class="form-control" placeholder="Last Name" name="lastName" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label <label class="required">E-mail Address</label>
                                    <input class="form-control" placeholder="email" name="email" type="text" autofocus>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->

																		<div class="row">
																				<div class="col-md-9"></div>
		                                		<div class="col-md-3">
																					<button type="submit" class="btn btn-default" type="submit" name="registerManager">Cancel</button>
		                                			 <button type="submit" class="btn btn-success" type="submit" name="registerManager" id="registerBtn">Next Step<i class=" 	glyphicon glyphicon-chevron-right"></i></button>
		                                </div>
																		<div class="row">
		                                		<div class="col-md-12" style="padding-top:10px;">

		                                </div>
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
