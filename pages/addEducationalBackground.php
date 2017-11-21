<?php
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

	$part2="VALUES ('".$idnum."', '".$lastname."', '".$firstname."', '".$birthday."', '".$weight."', '".$height."', '".$bloodtype."', '".$nationality."', '".$email."', '".$email."', '".$emergencyname."', '".$emergencynumber."', '".$emergencyrelationship."', '".$sport."', '3', 'REG'";
	if(isset($middlename)){
		$part1.=", studentMiddleName";
		$part2.=", ".$middlename;
	}
	if(isset($religion)){
		$part1.=", studentReligion";
		$part2.=", ".$religion;
	}
	if(isset($alternateemail)){
		$part1.=", studentAlternateEmail";
		$part2.=", ".$alternateemail;
	}
	if(isset($address2)){
		$part1.=", studentAddressLine2";
		$part2.=", ".$address2;
	}
	if(isset($fathername)){
		$part1.=", studentFatherFullName";
		$part2.=", ".$fathername;
	}
	if(isset($fatheroccupation)){
		$part1.=", studentFatherOccupation";
		$part2.=", ".$fatheroccupation;
	}
	if(isset($mothername)){
		$part1.=", studentMotherFullName";
		$part2.=", ".$mothername;
	}
	if(isset($motheroccupation)){
		$part1.=", studentMotherOccupation";
		$part2.=", ".$motheroccupation;
	}
	$part1.=")";
	$part2.=")";
	$sql=$part1." ".$part2;
	$sql2="INSERT INTO `acadsosd`.`plannedenrollmentchart` (`degreeTable_degreeCode`, `termStarted`, `studentIDNumber`) VALUES ('".$degree."', 'T1', '".$idnum."');
";
}
else{
	//header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
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
                <a class="navbar-brand logo" style="padding: 10px 0px 0px 30px" href="index.html">
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Grace Alhambra</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> FAQS</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                <a href="index.html"><i class="glyphicon glyphicon-home" style="color: white"></i> Home</a>
                            </li>

                             <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="    glyphicon glyphicon-user" style="color: white"></i> Student Athletes </i></a>
                            <ul id="demo1" class="collapse" style="list-style: none;">
                                <li>
                                    <a href="SAR.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Student Athlete </a>
                                </li>

                                <li>
                                    <a href="EditSAR1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Edit Student Athlete Profile </a>
                                </li>

                                <li>
                                    <a href="AthletesAll.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> View Student Athletes </a>
                                </li>


                            </ul>
                            </li>

                            <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-certificate" style="color: white"></i> Student Managers </a>
                            <ul id="demo2" class="collapse" style="list-style: none;">
                                <li>
                                    <a href="AddSM.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Student Manager </a>
                                </li>
                                <li>
                                    <a href="EditSM1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Edit Student Manager Profile</a>
                                </li>

                                <li>
                                    <a href="ManageSM.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Manage Student Managers </a>
                                </li>

                            </ul>
                        </li>



                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-education" style="color: white"></i> Scholarships </a>
                            <ul id="demo3" class="collapse" style="list-style: none;">
                                <li>
                                    <a href="AddScholarship1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style></i> Add Scholarship</a>
                                </li>
                                <li>
                                    <a href="EditScholarship1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style></i> Edit Scholarship</a>
                                </li>
                                <li>
                                    <a href="Scholarships.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style></i> Scholarship Summary</a>
                                </li>



                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-folder-open" style="color: white"></i> View Reports </a>
                            <ul id="demo4" class="collapse" style="list-style: none;">
                                <li>
                                    <a href="ManagePEC.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white"></i>Planned Enrollment Chart</a>
                                </li>
                               <li>
                                    <a href="ASSR.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white"></i> Academic Standing Summary Report </a>
                                </li>
                                <li>
                                    <a href="AMSL.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white" ></i> Academic Monitoring Summary List</a>
                                </li>
                                <li>
                                    <a href="MAR.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white" ></i> Midterm Academic Report</a>
                                </li>
                                <li>
                                    <a href="APFR.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white" ></i> Academic Projected Failure Report</a>
                                </li>
                                <li>
                                    <a href="AAPFR.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white" ></i> Aftermath of Academic Projected Failure Report</a>
                                </li>
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
                <form name="add_me" id="add_me">
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
                                          <td class="text-center">Grade 1</td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="name[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="address[]"></td>
                                          <td class="text-center" colspan="2"><input type="text" class="form-control inputs" name="schoolYear[]"></td>
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
                                            <th class="text-center">Degree</th>
                                            <th class="text-center"> Name University</th>
                                            <th class="text-center"> Address University</th>
                                            <th class="text-center" colspan="2"> School Year Attended </th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="odd gradeX">
                                          <td class="text-center"><input type="text" class="form-control inputs" name="degree[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="university[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="univAddress[]"></td>
                                          <td class="text-center" colspan="2"><input type="text" class="form-control inputs" name="academicYear[]"></td>
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
                                                <th class="text-center">Tournament</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Venue</th>
                                                <th class="text-center">Event</th>
                                                <th class="text-center">Standing</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <tr class="odd gradeX">
                                          <td class="text-center"></td>
                                          </tr>

                                          <tr class="odd gradeX">
                                            <td class="text-center"><input type="text" class="form-control inputs" name="tournament[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="tourDate[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="venue[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="eventName[]"></td>
                                            <td class="text-center"><input type="text" class="form-control inputs" name="standing[]"></td>
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

                                <form>
                                <div class="row">
                                  <div class="col-lg-10"></div>
                                  <div class="col-lg-2">
                                <button class="btn btn-default" id="submit">Submit</button>
                                <button class="btn btn-default" id="submit" >Skip Step</button>
                              </div>
                              </div>
                            </form>
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
