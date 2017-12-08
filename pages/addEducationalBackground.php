<?php
session_start();
require_once('../osd_connect.php');
if(isset($_POST['registerAthlete'])){
	//for deletion
	//not required in form
	$middlename=$_POST['middlename'];
	$religion=$_POST['religion'];
	$alternateemail=$_POST['alternateemail'];
	$address2=$_POST['address2'];
	$fathername=$_POST['fathername'];
	$mothername=$_POST['mothername'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$motheroccupation=$_POST['motheroccupation'];
	//required
	$idnum=$_POST['idnum'];
	$lastname=$_POST['lastname'];
	$degree=$_POST['degree'];
	$firstname=$_POST['firstname'];
	$birthday=$_POST['birthday'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$bloodtype=$_POST['bloodtype'];
	$nationality=$_POST['nationality'];
	$email=$_POST['email'];
	$emergencyname=$_POST['emergencyname'];
	$emergencynumber=$_POST['emergencynumber'];
	$emergencyrelationship=$_POST['emergencyrelationship'];
	$sport=$_POST['sport'];
	$address1=$_POST['address1'];

	//sql required for profile
	$part1="INSERT INTO `acadsosd`.`studentathleteprofile` (`studentIDNumber`, `studentLastName`, `studentFirstName`, `studentDateOfBirth`, `studentWeight`, `studentHeight`, `studentBloodType`, `studentNationality`, `studentDlsuEmail`, `studentAddressLine1`, `studentEmergencyContact`, `EmergencyContactNumber`, `EmergencyContactRelationship`, `teamCode`, `statusID`, `reconsiderationReference_reconsiderationCode`";

	$part2="VALUES ('".$idnum."', '".$lastname."', '".$firstname."', '".$birthday."', '".$weight."', '".$height."', '".$bloodtype."', '".$nationality."', '".$email."', '".$address1."', '".$emergencyname."', '".$emergencynumber."', '".$emergencyrelationship."', '".$sport."', '3', 'REG'";
	if(isset($middlename)){
		$part1.=", studentMiddleName";
		$part2.=", '".$middlename."'";
	}
	if(isset($religion)){
		$part1.=", studentReligion";
		$part2.=", '".$religion."'";
	}
	if(isset($alternateemail)){
		$part1.=", studentAlternateEmail";
		$part2.=", '".$alternateemail."'";
	}
	if(isset($address2)){
		$part1.=", studentAddressLine2";
		$part2.=", '".$address2."'";
	}
	if(isset($fathername)){
		$part1.=", studentFatherFullName";
		$part2.=", '".$fathername."'";
	}
	if(isset($fatheroccupation)){
		$part1.=", studentFatherOccupation";
		$part2.=", '".$fatheroccupation."'";
	}
	if(isset($mothername)){
		$part1.=", studentMotherFullName";
		$part2.=", '".$mothername."'";
	}
	if(isset($motheroccupation)){
		$part1.=", studentMotherOccupation";
		$part2.=", '".$motheroccupation."'";
	}
	$part1.=")";
	$part2.=");";
	$sql1=$part1." ".$part2;
	$sql2="INSERT INTO `acadsosd`.`plannedenrollmentchart` (`degreeTable_degreeCode`, `termStarted`, `studentIDNumber`) VALUES ('".$degree."', 'T1', '".$idnum."');
";
}
else if(isset($_POST['addEducationalBackground'])){
	//insert INSERT INTO `acadsosd`.`educationalbackground` (`schoolLevel`, `SchoolName`, `yearStarted`, `yearEnded`, `studentIDNumber`) VALUES ('level', 'name', 2017, 2018, '113');
	$sql1=$_POST['sql1'];
	$sql2=$_POST['sql2'];

	if(!mysqli_query($dbc, $sql1)){
		header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/error.php");
	}
	if(!mysqli_query($dbc, $sql2)){
        header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/error.php");
	}

	$id=$_POST['id'];
	$schoolname=$_POST['name'];
	$schooladdress=$_POST['address'];
	$schoolyear=$_POST['academicYear'];
	$schoolLevel=$_POST['schoollevel'];
	$count=0;
	$sql="INSERT INTO `acadsosd`.`classificationhistory` (`classificationID`, `athleteID`, `dateClassified`) VALUES ('3', '".$id."', curDate());";
	if(!mysqli_query($dbc, $sql)){
		header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/error.php");
	}

	while(isset($schoolname[$count])){
		$a=$schoolname[$count];
		$b=$schooladdress[$count];
		$c=$schoolyear[$count];
		$d=$schoolLevel[$count];
		$part1="INSERT INTO `acadsosd`.`educationalbackground` (`schoolLevel`, `SchoolName`, `schoolYear`, `studentIDNumber`";
		$part2="VALUES ('".$d."', '".$a."', '".$c."', '".$id."'";
		if(isset($b)){
			$part1.=", `schoolAddress`";
			$part2.=", '".$b."'";
		}
		$part1.=")";
		$part2.=");";
		$sql=$part1." ".$part2;
		echo '<div class="alert alert-danger">ERROR:
        '.$sql.'
        </div>';
		mysqli_query($dbc, $sql);
		$count++;
	}

	$univlevel=$_POST['collegelevel'];
	$univname=$_POST['university'];
	$univaddress=$_POST['univAddress'];
	$univschoolyear=$_POST['academicYear'];
	$univdegree=$_POST['collegedegree'];
	$count=0;
	while(isset($univname[$count])){
		$a=$univname[$count];
		$b=$univaddress[$count];
		$c=$univschoolyear[$count];
		$e=$univdegree[$count];
		$d=$univlevel[$count]; $count++;
		$part1="INSERT INTO `acadsosd`.`educationalbackground` (`schoolLevel`, `SchoolName`, `schoolYear`, `studentIDNumber`";
		$part2="VALUES ('".$d."', '".$a."', '".$c."', '".$id."'";
		if(isset($b)){
			$part1.=", `schoolAddress`";
			$part2.=", '".$b."'";
		}
		if(isset($e)){
			$part1.=", `degree`";
			$part2.=", '".$e."'";
		}
		$part1.=")";
		$part2.=");";
		$sql=$part1." ".$part2;

		mysqli_query($dbc, $sql);
	}

    $tourname=$_POST['tournament'];
    $tourdate=$_POST['tourDate'];
    $tourvenue=$_POST['venue'];
    $tourevent=$_POST['eventName'];
    $tourstanding=$_POST['standing'];
    $tourtype=$_POST['type'];
    $count=0;
    while(isset($tourname[$count])){
        $a=$tourname[$count]; //name
        $b=$tourdate[$count]; //date
        $c=$tourvenue[$count]; //venue
        $e=$tourevent[$count]; //event
        $d=$tourstanding[$count]; //standing
        $f=$tourtype[$count]; //type
        $part1="INSERT INTO `acadsosd`.`achievmenthistory` (`accomplishmentName`, `accomplishmentDate`, `accomplishmentEvent`, `accomplishmentStanding`, `accomplishmentType`, `studentIDNumber`";
        $part2="VALUES ('".$a."', '".$b."', '".$e."','".$d."', '".$f."', '".$id."'";
        if(isset($c)){
            $part1.=", `accomplishmentVenue`";
            $part2.=", '".$c."'";
        }
        $part1.=")";
        $part2.=");";
        $sql=$part1." ".$part2;

        mysqli_query($dbc, $sql);
		$count++;
    }
		$_SESSION['message'] = '<div class="alert alert-success">
					 New Student-Athlete was registered!
					</div>';
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index[admin].php");


}
else{
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
}
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/jquery.min.js"></script>

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

                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"> Student Athlete Registration </h2>
                    </div>
                </div>
                <div>
                <form action="addEducationalBackground.php" method="post">
                <div class="dataTable_wrapper">
                    <div><h4 class="page-header"> School History</h4></div>
                                <table class="table table-striped table-bordered table-hover" id="schoolHistoryTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Level</th>
                                            <th class="text-center"> Name School</th>
                                            <th class="text-center"> Address</th>
                                            <th class="text-center" colspan="2"> School Year Attended </th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="odd gradeX">
                                          <td class="text-center">
																						<select class="form-control name" name="schoollevel[]">
																					   <option value="Grade 1">Grade 1</option>
																					   <option value="Grade 2">Grade 2</option>
																					   <option value="Grade 3">Grade 3</option>
																						 <option value="Grade 4">Grade 4</option>
																						 <option value="Grade 5">Grade 5</option>
																						 <option value="Grade 6">Grade 6</option>
																						 <option value="Grade 7">Grade 7</option>
																						 <option value="Grade 8">Grade 8</option>
																						 <option value="Grade 9">Grade 9</option>
																						 <option value="Grade 10">Grade 10</option>
																						 <option value="Grade 11">Grade 11</option>
																						 <option value="Grade 12">Grade 12</option>
																					 </select> </td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="name[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="address[]"></td>
                                          <td class="text-center" colspan="2"><input type="number" class="form-control inputs" name="academicYear[]"></td>
                                           <td class="text-center bg-success-light" style="border-color:#999999">
                                              <div class="btn-group" style="vertical-align: middle;">
                                                  <span data-toggle="tooltip" title="Edit Equipment Details"><button class="btn btn-xs btn-default" type="button" style="background:none;border:none" id="add_input"><i class="glyphicon glyphicon-plus"></i></button></span>
                                              </div>
                                          </td>
                                      </tr>
                                    </tbody>
                                </table>

                                <div><h4 class="page-header"> Collegiate</h4></div>
                                <table class="table table-striped table-bordered table-hover" id="collegeTable">
                                    <thead>
											<th class="text-center">Year Level</th>
                                            <th class="text-center">Degree</th>
                                            <th class="text-center"> Name University</th>
                                            <th class="text-center"> Address University</th>
                                            <th class="text-center" colspan="2"> School Year Attended </th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="odd gradeX">
										<td class="text-center"><input type="number" class="form-control inputs" name="collegelevel[]"></td>
                                        <td class="text-center"><input type="text" class="form-control inputs" name="collegedegree[]"></td>
                                        <td class="text-center"><input type="text" class="form-control inputs" name="university[]"></td>
                                        <td class="text-center"><input type="text" class="form-control inputs" name="univAddress[]"></td>
                                        <td class="text-center" colspan="2"><input type="number" class="form-control inputs" name="academicYear[]"></td>
                                        <td class="text-center bg-success-light" style="border-color:#999999">
                                        <div class="btn-group" style="vertical-align: middle;">
										<span data-toggle="tooltip" title="Edit Equipment Details"><button class="btn btn-xs btn-default"  type="button" style="background:none;border:none" id="add_input2"><i class="glyphicon glyphicon-plus"></i></button></span>
										</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>

                                <div>
                                <div><h4 class="page-header"> Athletic Achievements Background</h4></div>
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="achievementsTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Tournament Name</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Venue</th>
                                                <th class="text-center">Event</th>
                                                <th class="text-center">Standing</th>
                                                <th class="text-center">Type</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <tr class="odd gradeX">
                                            <td class="text-center"><input type="text" class="form-control inputs" name="tournament[]"></td>
                                            <td class="text-center"><input type="date" class="form-control inputs" name="tourDate[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="venue[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="eventName[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="standing[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="type[]"></td>
                                            <td class="text-center bg-success-light" style="border-color:#999999">
                                              <div class="btn-group" style="vertical-align: middle;">
                                              <span data-toggle="tooltip" title="Edit Equipment Details"><button class="btn btn-xs btn-default" id="add_input3" data-toggle="modal" data-target="#modal-b" type="button" style="background:none;border:none"><i class="glyphicon glyphicon-plus"></i></button></span>
                                              </div>
                                            </td>
                                          </tr>

                                          </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-10"></div>
                                  <div class="col-lg-2">
								<input type="hidden" name="sql1" value=<?php echo '"'.$sql1.'"'; ?> />
								<input type="hidden" name="sql2" value=<?php echo '"'.$sql2.'"'; ?> />
								<input type="hidden" name="id" value="<?php echo $idnum ?>" />
                                <button type="submit" class="btn btn-default"  name="addEducationalBackground">Submit</button>
                                <button class="btn btn-default" id="submit" >Skip Step</button>
                              </div>
                              </div>
                            </div>
                </form>
                </div>
            </div>
            <div>
            </div>
    </div>
        <!-- /#page-wrapper -->
         <!-- jQuery -->

    <script src="../dist/js/addInputField.js"></script>
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
