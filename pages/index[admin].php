<?php
session_start();
require_once('../osd_connect.php');
$idx=$_SESSION['idnumber'];
$typex=$_SESSION["typex"];
$name=$_SESSION["name"];
$message=$_SESSION['message'];
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
			$query="SELECT COUNT(*) AS numAthletes FROM acadsosd.studentathleteprofile WHERE statusID<4;";
			$result=mysqli_query($dbc,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$numAthletes=$row['numAthletes'];
			if(empty($numAthletes)){
				$numAthletes="No Active Athletes";
			}
			else{
				$numAthletes.=" Athletes";
			}
			$query="SELECT COUNT(*) AS numAthletes FROM acadsosd.studentathleteprofile WHERE statusID=3;";
			$result=mysqli_query($dbc,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$notCritical=$row['numAthletes'];
			if(empty($notCritical)){
				$notCritical="0";
			}
			$query="SELECT COUNT(*) AS numAthletes FROM acadsosd.studentathleteprofile WHERE statusID=2;";
			$result=mysqli_query($dbc,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$critical=$row['numAthletes'];
			if(empty($critical)){
				$critical="0";
			}
			$query="SELECT COUNT(*) AS numAthletes FROM acadsosd.studentathleteprofile WHERE statusID=1;";
			$result=mysqli_query($dbc,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$superCritical=$row['numAthletes'];
			if(empty($superCritical)){
				$superCritical="0";
			}
			$query="SELECT COUNT(*) AS numManagers FROM acadsosd.studentmanager WHERE managerCode=1;;";
			$result=mysqli_query($dbc,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$numManagers=$row['numManagers'];
			if(empty($numManagers)){
				$numManagers="No Active Managers";
			}
			else{
				$numManagers.=" Managers";
			}
			$query="SELECT count(*) as mid FROM acadsosd.subjectdetails WHERE midtermGrade=0 GROUP BY PlannedEnrollmentChart_pecID;";
			$result=mysqli_query($dbc,$query);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$midFStudents=$row['mid'];
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

    <title>SAMS</title>

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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Classification', 'Number of Student'],
          ['Not Critical',     <?php echo $notCritical; ?>],
          ['Super Critical', <?php echo $superCritical; ?>],
          ['Critical',<?php echo $critical; ?>]
        ]);

        var options = {
		pieHole: 0.4,
		pieStartAngle: 100,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
                                     <li><a href="registerStudentAthlete.php" style="font-size: 11px;"><i class="glyphicon glyphicon-menu-right"  style="color: white" ></i> Register an Athlete </a></li>
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
		<?php
		if(isset($message)){
			echo $message;
			unset($_SESSION["message"])
		}
		?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome Admin <?php echo $name; ?>!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
              </div>
                <div class="col-lg-2">
                  <b><?php echo "Today is ".date("m/d/Y") . "<br>";?></b>
            </div>
          </div>

	<div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
			<div class="panel panel-default">
                        <div class="panel-heading">
						<h3 class="panel-title"><i class="glyphicon glyphicon-stats"></i> Academic Summary:</h3>
							<div id="piechart"></div>
                        </div>

			</div>


        </div>
		<div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">People</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                                <a href="viewTeam.php" class="list-group-item" style="font-size: 24px;">
                                    <i class="glyphicon glyphicon-user"></i><?php echo " ".$numAthletes; ?>

                                </a>
                                <a href="viewStudentManagers.php" class="list-group-item" style="font-size: 24px;">
                                    <i class="glyphicon glyphicon-user"></i><?php echo " ".$numManagers; ?>

                                </a>
                        </div>

                    </div>
                    <div class="panel-footer text-right">

                    </div>
                </div>
            </div>
			<div class="row">
			</div>
		<div class="row">
			<div class="col-lg-1">
			</div>
			<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
                <b>Academic Status Summary</b>
                </div>
								<div class="panel-body">
										<div class="list-group">
														<a class="list-group-item" style="font-size: 14px;">
																<b><font color="red">Super Critical</font> Athletes:</b><?php echo $superCritical; ?>

														</a>
														<a class="list-group-item" style="font-size: 14px;">
																<b><font color="orange">Critical</font> Athletes:</b><?php echo $critical; ?>

														</a>
														<a class="list-group-item" style="font-size: 14px;">
															<b><font color="green">Not Critical</font> Athletes:</b><?php echo $notCritical; ?>
														</a>

														<a  class="list-group-item" style="font-size: 14px;">
															<b>Projected Student's with Failures:</b><?php echo $midFStudents; ?>
														</a>
										</div>

								</div>
			</div>
			</div>
		</div>


<!--
        <div class="row">

                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>List of Teams</b>
                        </div>
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                                <table class="table table-striped t table-hover" id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th class="text-center ">Name of Team</th>
                                            <th class="text-center">Number of Active Athletes</th>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"> <a href class="list-group-item" style="font-size: 24px;">Baseball</a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 15</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"> <a href class="list-group-item" style="font-size: 24px;">Basketball Men</a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 10</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"> <a href class="list-group-item" style="font-size: 24px;">Judo </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 8</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Taekwondo </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 7</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Animo Squad </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 7</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Softball </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 6</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Table Tennis Women </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;">3</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Table Tennis Men </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 3</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Basketball Women </a></td>
                                            <td class="text-center"><a class="list-group-item" style="font-size: 24px;"> 3</a></td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href class="list-group-item" style="font-size: 24px;"> Chess </a></td>
                                            <td class="text-center"> <a class="list-group-item" style="font-size: 24px;">0</a></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>


        </div>
 -->


        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Donut chart -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Donut chart -->
    <script src="../dist/js/index.js"></script>
    <!--Donut Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


</body>

</html>
