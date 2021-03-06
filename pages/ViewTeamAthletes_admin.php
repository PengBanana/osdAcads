<?php
session_start();
require_once('../osd_connect.php');
					$idx=$_SESSION['idnumber'];
					$typex=$_SESSION["typex"];
					if($idx===0){
					header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
					}
					if(empty($idx)){
						header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
					}
					else if($typex>2){
						$query="SELECT * FROM acadsosd.studentmanager";
						$result=mysqli_query($dbc,$query);
						$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
						$teamCode=$row['teamCode'];
					}
					else if(empty($typex)){
						header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
					}
					else{
						$name=$_SESSION["name"];
						$teamCode=$_POST['teamCode'];
						if(empty($teamCode)){
							header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
						}
					}


$selectAllAchievements = "SELECT accomplishmentDate, accomplishmentEvent, accomplishmentStanding FROM achievmenthistory;";

?>
<!DOCTYPE html>
<html>
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

        <link rel="stylesheet" type="text/css" href="../dist/css/tabs.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
 															<li><a href="MidtermUpdateList.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Midterm Updates </a></li>
 															<li><a href="FinalsUpdateList.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Final Updates </a></li>
 															<li><a href="FinalReport.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Generate Final Report </a></li>
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
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Team Profile </h1>
                </div>
            </div>

            <!--New course
            <div class="alert alert-success">
                <strong>New Course has been added.</strong>
            </div>
            -->

						<div class="breadCrumb1" style="padding-bottom:20px;">
							<a class="breadCrumb1" href="index[admin].php">Home</a> >>>
							<a class="breadCrumb1" href="ViewTeam.php">View Team</a> >>>
							<a class="breadCrumb1" href="#">View Athletes</a>

						</div>

            <div class="row">
                <div class="col-lg-5">
                    <form>
					<?php
					$query="SELECT * FROM acadsosd.team WHERE sportCode='".$teamCode."';";
					$result=mysqli_query($dbc,$query);
					$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
					$teamName=$row['teamName'];
					$sport=$row['sport'];
                    echo'   <div class="form-group">
                            <div>Team Name:
                            <label>'.$teamName.'</label>
                            </div>
                            <div>Team Code:
                            <label>'.$teamCode.'</label>
                            </div>
                            <div>Sport:
                            <label>'.$sport.'</label>
                            </div>

                        </div>


					';



				?>
				</form>
                </div>
                 <div class="col-lg-3"></div>

                 <div class="col-lg-7"></div>

            </div>


            <div class="row">
                </div>
                    <div class="col-lg-12">
                        <div class="tab">
                          <button class="tablinks" onclick="openTab(event, 'athletes')">Athletes</button>
                          <button class="tablinks" onclick="openTab(event, 'studentManager')">Student Manager</button>
                        </div>

                        <div id="athletes" class="tabcontent">
                          <!-- /.row -->
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <?php echo $teamName; ?>
                                      </div>
                                      <!-- /.panel-heading -->
                                      <div class="panel-body">
                                          <div class="dataTable_wrapper" >
                                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                  <thead>
                                                      <tr>
                                                          <th class="text-center">Name</th>
                                                          <th class="text-center">College</th>
                                                          <th class="text-center">Degree Program</th>
                                                          <th class="text-center">Academic Status</th>
                                                          <th class="text-center">Action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
												  <?php
												  $query="SELECT s.studentIDNumber, concat(s.studentFirstName, \" \", s.studentLastName) AS studentname, p.degreeTable_degreeCode AS degreeCode, de.college_collegeCode AS collegeCode, a.statusName, a.statusID FROM acadsosd.studentathleteprofile s JOIN academicclassification a ON s.statusID = a.statusID JOIN plannedenrollmentchart p ON s.studentIDNumber = p.studentIDNumber JOIN degree d ON p.degreeTable_degreeCode = d.degreeCode JOIN department de ON d.departmentCode = de.departmentCode WHERE s.teamCode='".$teamCode."' AND s.statusID<'4';";
												  $result=mysqli_query($dbc,$query);
												  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
													  $studentID=$row['studentIDNumber'];
													  $studentname=$row['studentname'];
													  $degreeCode=$row['degreeCode'];
													  $collegeCode=$row['collegeCode'];
													  $statusName=$row['statusName'];
													  $color=$row['statusID'];
													  if($color==1){
														 $color="statusSuperCritical";
													  }
													  else if($color==2){
														  $color="statusCritical";
													  }
													  else if($color==3){
														  $color="statusNotCritical";
													  }
													  echo '<tr class="odd gradeX">
                                                          <td class="text-center" ><label>'.$studentname.'</label></td>
                                                          <td class="text-center">'.$collegeCode.'</td>
                                                          <td class="text-center">'.$degreeCode.'</td>
                                                          <td class="text-center '.$color.'">'.$statusName.'</td>
                                                          <td class="text-center" >
														  <form action="AthleteProfile_admin.php" method="post">
														  <input type="hidden" value="'.$studentID.'" name="athleteID">
														  <input type=submit class="btn btn-default" value="View" name="viewAthlete">
														  </form>
														  </td>
													</tr>';
												  }
												  ?>
                                                    <!--<tr class="odd gradeX">
                                                          <td class="text-center" ><a href="Athlete's Profile.html"><u style="color: black;">Ureta,Miguel</u></a></td>
                                                          <td class="text-center"> CCS</td>
                                                          <td class="text-center"> BS-IT</td>
                                                          <td class="text-center statusCritical">CRITICAL</td>
													</tr>-->
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                      <!-- /.panel-body -->
                                  </div>
                                  <!-- /.panel -->
                              </div>
                              <!-- /.col-lg-12 -->
                          </div>


                        </div>



                        <div id="studentManager" class="tabcontent">
                          <h3>Student Manager Details</h3>
                          <br>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                   The Student Manager
                                </div>
                                <div class="row">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-8">

										<?php
										$query="SELECT CONCAT(u.firstName, \" \", u.lastName) AS managername, m.idnumber, m.email FROM acadsosd.studentmanager m JOIN user u ON m.idnumber=u.idnumber WHERE teamCode='XASDR';";
										$result=mysqli_query($dbc,$query);
										while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
											$managername=$row['managername'];
											$managerID=$row['idnumber'];
											$managerEmail=$row['email'];
											echo'
											<form>
										   <div class="form-group" style="padding-top: 20px;">
                                                <div>Name:
                                                  <label>'.$managername.'</label>
                                                </div>
                                                <div>ID No:
                                                  <label>'.$managerID.'</label>
                                                </div>
                                                <div>E-mail:
                                                  <label>'.$managerEmail.'</label>
                                                </div>
                                            </div>
											</form>
											<br>
											';
										}
										?>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
    </div>
        <!-- /#page-wrapper -->
         <!-- jQuery -->
    <script src="../dist/js/tab.js"></script>
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
    </div>
    </body>

</html>
