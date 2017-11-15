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
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>

                    <div class="panel-body">
                        <form action="login.php" method="post">
						<?php
session_start();
if(isset($_POST['login'])){
	require_once('../osd_connect.php');
	$idnumberin=$_POST['username'];
	$passwordin=$_POST['password'];
	$query="SELECT * FROM acadsosd.user WHERE idnumber='".$idnumberin."';";
	$result=mysqli_query($dbc, $query);
	$check=mysqli_num_rows($result);
	if($check>0){
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$username=$row['username'];
		$password=$row['password'];
		$first=$row['firstName'];
		$last=$row['lastName'];
		$name="".$first." ".$last.".";
		$_SESSION["name"]=$name;
		$_SESSION["idnumber"]=$idnumberin;
		$usertype=$row['usertypeID'];
		
		if(empty($password)){
			header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/newUser.php");
		}
		else{
			//checking
			if($passwordin==$password){
				//correct password
				if($usertype=='1'){
					//godAccount
				}
				else if($usertype=='2'){
					//admin
					header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/adminHome.php");
				}
				else if(usertype=='3'){
					//studentManager
					header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/studentManagerHome.php");
				}
			}
			else{
				//wrong password
				echo '<div class="alert alert-danger">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				</div>';
			}
		}
	}
	else{
		//no such user found
		echo '<div class="alert alert-danger">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>';
	}
}
else{
	session_destroy();
}
?>
                            <fieldset>
                                <div class="form-group">
                                    <img src="Images/OSD.png" height="100px" width='auto' />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="name" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                               <div class="row">
                               		<div class="col-md-6">
                               			 <input type="submit" name="login"  value="Login "class="btn btn-success btn-block">
                               		</div>
                               		<div class="col-md-6">
                               			<a href="registerStudentManager.php" class="btn btn-success btn-block">Register</a>
                               		</div>
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