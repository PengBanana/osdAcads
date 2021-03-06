<?php
session_start();
$idx=$_SESSION['idnumber'];
$typex=$_SESSION["typex"];
if($idx===0){
header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
}
if(empty($idx)){
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
	$name="wth";
}
else if($typex>2||$typex<1){
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/invalidRequest.php");
}
else if(empty($typex)){
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
}
else{
	$name=$_SESSION["name"];
}
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

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
				<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="up">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand logo" style="padding: 10px 0px 0px 30px" href="index[admin].php">
                 <img src="Images/OSD-logo2.png" height="35px" width='auto' />
                 </a>
             </div>

             <!-- /.navbar-header -->

             <!-- NAV BAR -->

             <ul class="nav navbar-top-links navbar-right">

                 <!-- /.dropdown -->
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <i class="fa fa-user fa-fw" style="color: white"></i>  <i class="fa fa-caret-down" style="color: white"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-user" >
                         <li><a href="changePassword.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                         </li>
                         <li class="divider"></li>
                         <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                         </li>
                     </ul>
                     <!-- /.dropdown-user -->
                 </li>
                 <!-- /.dropdown -->
             </ul>
             <!-- /.navbar-top-links -->

             <div class="navbar-fixed sidebar"  role="navigation" >
                 <div class="sidebar-nav navbar-f" >
                     <ul class="nav" id="side-menu" >

                             <li >
                                 <a href="index[admin].php"><i class="glyphicon glyphicon-home" style="color: white"></i> Home</a>
                             </li>

                              <li>
                               <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="    glyphicon glyphicon-folder-open" style="color: white"></i>    Academic Performance</i></a>
                               <ul id="demo1" class="collapse" style="list-style: none;">
                                 <li><a href="MidtermUpdateList_admin.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Midterm Updates </a></li>
                                 <li><a href="FinalsUpdateList_admin.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Final Updates </a></li>
                                 <li><a href="FinalReport.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Generate Final Report </a></li>
                                 <li><a href="FinalReportHistory.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Final Report History</a></li>
                               </ul>
                               </li>
                               <li>
                                   <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-certificate" style="color: white"></i>    Team </a>
                                   <ul id="demo4" class="collapse" style="list-style: none;">
                                      <li><a href="ViewTeam.php" style="font-size: 11px;"><i class="glyphicon glyphicon-menu-right"  style="color: white"></i> View Varsity Teams </a></li>
                                      <li><a href="addTeam.php" style="font-size: 11px;"><i class="glyphicon glyphicon-menu-right"  style="color: white" ></i> Add New Team </a></li>
                                   </ul>
                               </li>
                             <li>
                               <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-user" style="color: white"></i>    Accounts </a>
                               <ul id="demo2" class="collapse" style="list-style: none;">
                                   <li><a href="activationRequest.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Activation Request </a></li>
                                   <li><a href="viewStudentManagers.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i>  Manage Accounts </a></li>
                               </ul>
                             </li>
                     </ul>
                 </div>
                 <!-- /.sidebar-collapse -->
             </div>
             <!-- /.navbar-static-side -->
         </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Account Activation Requests</h1>
                <div>
            </div>
						<div class="breadCrumb1" style="padding-bottom:20px;">
							<a class="breadCrumb1" href="index[admin].php">Home</a> >>>
							<a class="breadCrumb1" href="">Activation Requests</a>

							</div>

			<?php
				require_once('../osd_connect.php');
				if(isset($_POST['activateAccount'])){
				$idnumber=$_POST['idnumber'];
				$teamCode=$_POST['sportCode'];
				$fullname=$_POST['fullname'];
				$query="SELECT user.password, studentmanager.email FROM acadsosd.user JOIN studentmanager ON user.idnumber=studentmanager.idnumber WHERE user.idnumber='".$idnumber."';";
				$result=mysqli_query($dbc,$query);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				$password=$row['password'];
				$email=$row['email'];
				//add email code here
				$to = $email;
				$subject="Your Manager Account has been activated";
				$message = "Thank you for registering as a Student Manager, to activate your account. use the temporary password ".$password.".";
				$headers = "From: osddlsu@gmail.com\r\n";
				if (mail($to, $subject, $message, $headers)) {
					$query="UPDATE `acadsosd`.`studentmanager` SET `teamCode`='".$teamCode."', `managerCode`='1' WHERE `idnumber`='".$idnumber."';";
					mysqli_query($dbc,$query);
				   echo'<div class="alert alert-success">
					An email has been sent to '.$to.'
					</div>';

				} else {
				   echo '<div class="alert alert-danger">
					There was a problem sending the mail
					</div>';
				}
				}
				else if(isset($_POST['rejectAccount'])){
					$rejectID=$_POST['rejectID'];
					$sql="UPDATE `acadsosd`.`studentmanager` SET `managerCode`='4' WHERE `idnumber`='".$rejectID."';";
					mysqli_query($dbc,$sql);
					echo '<div class="alert alert-danger">
					The acitvation request has been declined
					</div>';
				}

				$query="SELECT CONCAT(user.lastName,', ', user.firstName,' ', user.middleName) AS fullname, user.idnumber, studentmanager.email FROM user JOIN studentmanager ON user.idnumber=studentmanager.idnumber WHERE studentmanager.managerCode='3';";
				$result=mysqli_query($dbc, $query);
				?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pending Requests
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Actions</th>


                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
									$idnumber=$row['idnumber'];
									if(empty($idnumber)){
									echo "";
									}
									else{
									$email=$row['email'];
									$fullname=$row['fullname'];
									echo '<tr class="odd gradeX"><td class="text-center" ><form action="athleteProfile" method="post"><input type="hidden" value="'.$idnumber.'"><label>'.$fullname.'</label></form></td><td class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$idnumber.'">View Request</button>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalDecline">Decline</button></td></tr>';


								//<!-- Modal Approve-->
                                echo '<div class="modal fade" id="'.$idnumber.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Request Details</h4>
								</div>
								<div class="modal-body">
                                <div class="row" id="main-panel">
								<label>Name</label>'.$fullname.'<br>
                                <label>DLSU Mail</label> '.$email.'<br>
                                <form action="activationRequest.php" method="post">
								<input type="hidden" name="idnumber" value="'.$idnumber.'">
								<input type="hidden" name="fullname" value="'.$fullname.'">
                                <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label>Team Code: </label>
                                <select class="form-control inputsSM" name="sportCode">';
                                $query='SELECT TM.sportCode, TM.teamName, COUNT(SM.teamCode) AS NOM FROM acadsosd.studentmanager SM RIGHT JOIN team TM ON SM.teamCode=TM.sportCode GROUP BY TM.sportCode;';
								$result2=mysqli_query($dbc, $query);
								while($row2=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
									$sportCode=$row2['sportCode'];
									$sport=$row2['teamName'];
									$NOM=$row2['NOM'];
									 echo '<option value="'.$sportCode.'">'.$sport.': '.$NOM.' managers</option>';
								}
                                echo'
								</select>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success" name="activateAccount" value="ACCEPT">
								</form>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal approve-->

								';

                                //<!-- Modal Decline-->
                                echo'<div class="modal fade" id="myModalDecline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Request Details</h4>
                                            </div>
                                            <div class="modal-body">
                                                    <p>Are you sure you want to decline this request?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="activationRequest.php" method="post">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<input type="hidden" value="'.$idnumber.'" name="rejectID">
												<input type="submit" class="btn btn-warning" name="rejectAccount" value="REJECT">
												</form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
									<!-- /.modal Decline-->';
									}
							}

							echo '</tbody>';
                            echo '</table>';
							?>
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>
</html>
