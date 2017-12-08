<!DOCTYPE html>
<html lang="en">

<?php 
  session_start();
  require_once('../osd_connect.php');
  $fname = $_SESSION["name"];
  $idNum = $_SESSION["idnumber"];
  $userType = $_SESSION["typex"];

  if(empty($idNum)){
    header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
  }
  else if(empty($fname)){
    header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
  }
  if($userType<3){
	 header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index[admin].php"); 
  }

//if student manager
  
//if admin
if(isset($_POST['viewMU'])){
	$teamCodeFinal=$_POST['sportCode'];
}
//if student manager
else if($userType==3){
	$teamCodeQuery = "SELECT teamCode FROM studentManager WHERE idnumber = '".$idNum."'";
	$teamCodeResult = mysqli_query($dbc, $teamCodeQuery);
	$teamCodeRow = mysqli_fetch_array($teamCodeResult, MYSQLI_ASSOC);
	$teamCodeFinal = $teamCodeRow['teamCode'];
}
else{
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
}

?>

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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Navigation -->
 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="up">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" style="padding: 10px 0px 0px 30px" href="index[studentManager].php">
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
                        <li><a href="changePassword2.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
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
                                <a href="index[studentManager].php"><i class="glyphicon glyphicon-home" style="color: white"></i> Home</a>
                            </li>

                             <li>
                              <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="    glyphicon glyphicon-folder-open" style="color: white"></i>    Academic Performance</i></a>
                              <ul id="demo1" class="collapse" style="list-style: none;">
                                <li><a href="updateList2.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Midterm Updates </a></li>
                                <li><a href="fupdateList2.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Final Updates </a></li>
                              </ul>
                              </li>
                              <li>
                                  <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-certificate" style="color: white"></i>    Team </a>
                                  <ul id="demo4" class="collapse" style="list-style: none;">
                                     <li><a href="ViewTeamAthletes.php" style="font-size: 11px;"><i class="glyphicon glyphicon-menu-right"  style="color: white"></i> View Varsity Teams </a></li>

                                  </ul>
                              </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <div id="wrapper" >


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php 

                      $teamNameQuery = "SELECT teamName FROM team WHERE sportCode = '".$teamCodeFinal."'";
                      $teamNameResult = mysqli_query($dbc, $teamNameQuery);
                      $teamNameRow = mysqli_fetch_array($teamNameResult,MYSQLI_ASSOC);
                      $teamNameFinal = $teamNameRow['teamName'];

                    ?>
                    <h1 class="page-header">Midterm Updates</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="breadCrumb1" style="padding-bottom:20px;">
                  <a class="breadCrumb1" href="index[studentManager].php">Home</a> >>>
                  <a class="breadCrumb1" href="">Midterm Updates</a>

                </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label><b><?php echo $teamNameFinal ?></b><label>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Student Athlete</th>
                                            <th class="text-center">Course</th>
                                            <th class="text-center">Midterm Grade</th>
                                            <th class="text-center">Midterm Update</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                          <?php

                                            $allQuery = "SELECT CONCAT(sap.studentLastName, ', ', sap.studentFirstName) as saFullName, sd.courseCode as 	courseCode, sd.midtermAcademicReport as MAR, sd.midtermGrade as midtermGrade
														FROM studentathleteprofile sap JOIN plannedenrollmentchart pec ON sap.studentidnumber = pec.studentidnumber
													JOIN subjectdetails sd ON pec.pecID = sd.PlannedEnrollmentChart_pecID WHERE sd.midtermGrade IS NOT NULL and sap.teamCode = '".$teamCodeFinal."';";
                                            $saNameQuery = "SELECT CONCAT(studentLastName, ', ', studentFirstName) as saFullName FROM studentathleteprofile";
                                            $allQueryResult = mysqli_query($dbc, $allQuery);

                                          ?>

                                          <?php
                                            foreach ($allQueryResult as $row) {
                                            ?>
                                            <tr class="odd gradeA">
                                            <td class="text-center">
                                              <?php echo $row['saFullName'];?>
                                            </td>
                                            <td class="text-center">
                                              <?php echo $row['courseCode'];?>
                                            </td>
                                            <td class="text-center">
                                              <?php echo $row['midtermGrade'];?>
                                            </td>
                                            <td class="text-center"><p>
                                              <?php echo $row['MAR'];?>
                                            </p></td>
                                          </tr>
                                            
                                        <?php }?>
											                      

                                    </tbody>
                                </table>


                                </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>
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
