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
					}
if(isset($_POST['updatePEC'])){
	$courseCode=$_POST['course'];
	$academicYear=$_POST['academicYear'];
	$academicTerm=$_POST['term'];
	$pecID=$_POST['pecID'];
	$count=0;
	$query="DELETE FROM acadsosd.subjectdetails WHERE pecID='".$pecID."';";
	mysqli_query($dbc, $query);
	while(isset($courseCode[$count])){
		$query="INSERT INTO `acadsosd`.`subjectdetails` (`PlannedEnrollmentChart_pecID`, `termTaken`, `YearTaken`, `courseCode`) 
                VALUES ('".$pecID."', '".$academicTerm[$count]."', '".$academicYear[$count]."', '".$courseCode[$count]."');";
		$count++;
		echo '<div class="alert alert-danger">ERROR:
        '.$query.'
        </div>';
		mysqli_query($dbc, $query);
	}
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/viewTeamAthletes.php");
}
else{
	$athleteID=$_POST['athleteID'];
	if(empty($athleteID)){
		header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
	}
				$query="SELECT * FROM acadsosd.studentathleteprofile s JOIN team t ON s.teamCode=t.sportCode JOIN academicclassification c ON s.statusID=c.statusID JOIN plannedenrollmentchart pec ON s.studentIDNumber=pec.studentIDNumber JOIN degree dg ON pec.degreeTable_degreeCode=dg.degreeCode JOIN department dpt ON dg.departmentCode=dpt.departmentCode JOIN college col ON dpt.college_collegeCode = col.collegeCode WHERE s.studentIDNumber='".$athleteID."';";
				$result=mysqli_query($dbc,$query);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				$lastname=$row['studentLastName'];
				$firstname=$row['studentFirstName'];
				$middleName=$row['studentMiddleName'];
				$sportCode=$row['sportCode'];
				$teamName=$row['teamName'];
				$sport=$row['sport'];
				$status=$row['statusName'];
				$degreeCode=$row['degreeTable_degreeCode'];
				$degree=$row['degreeName'];
				$department=$row['departmentCode'];
				$collegeCode=$row['college_collegeCode'];
				$college=$row['collegeName'];
				$pecID=$row['pecID'];
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

        <title>Planned Enrollment Chart</title>

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
                        <li><a href="SMprofile.html"><i class="fa fa-user fa-fw"></i><?php echo $name; ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> FAQS</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
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
                                    <a href="AthletesAll.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> View Student Athletes </a>
                                </li>


                                    <li>
                                        <a href="AddCourse1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Courses</a>
                                    </li>
                                    <li>
                                        <a href="EditCourse1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Edit Courses</a>
                                    </li>

                                    <li>
                                        <a href="AddGrades.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Edit Grades</a>
                                    </li>



                            </ul>
                        </li>


                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="    glyphicon glyphicon-inbox" style="color: white"></i> Manage Reports </i></a>
                            <ul id="demo1" class="collapse" style="list-style: none;">

                                 <li>
                                        <a href="AddASSR1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Academic Status</a>
                                    </li>

                                    <li>
                                        <a href="AddMAR1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Midterm Report</a>
                                    </li>

                                    <li>
                                        <a href="AddAPFR1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Projected to Fail Course</a>
                                    </li>

                                    <li>
                                        <a href="AddAAPFR1.html"><i class="glyphicon glyphicon-duplicate"  style="color: white" style ></i> Add Aftermath of the Projected to Fail Courses </a>
                                    </li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-folder-open" style="color: white"></i> View Reports </a>
                            <ul id="demo4" class="collapse" style="list-style: none;">
                                <li>
                                    <a href="ManagePEC.html" style="font-size: 11px;"><i class="glyphicon glyphicon-duplicate"  style="color: white" ></i> Planned Enrollment Chart</a>
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
                <div class="col-lg-12">
                    <h1 class="page-header">Planned Enrollment Chart</h1>
                </div>
            </div>

            <!--New course
            <div class="alert alert-success">
                <strong>New Course has been added.</strong>
            </div>
            -->

            <div class="row" id="breadPad">
                <div class="col-lg-12">
                     <form class="form-inline ">
                         <a href="AddCourse1.html" class="breadCrumb1">View Team</a>
                         <a class="breadCrumb1">>></a>
                         <a href="" class="breadCrumb1">Athlete's Profile</a>
                     </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-5">
                    <form>
                        <div class="form-group">
                            <div>Name:
                            <label><?php echo $lastname.', '.$firstname.' '.$middleName; ?></label>
                            </div>
                            <div>ID No:
                            <label><?php echo $athleteID; ?></label>
                            </div>
                            <div>Team:
                            <label><?php echo $teamName.': '.$sport.'('.$sportCode.')'; ?></label>
                            </div>
                            <div>College:
                            <label><?php echo $college.' ('.$collegeCode.')'; ?></label>
                            </div>
                            <div>Degree Program:
                            <label><?php echo $degree.' ('.$degreeCode.')'; ?></label>
                            </div>
                        </div>
                    </form>



                </div>
                 <div class="col-lg-3"></div>
                 <div class="col-lg-7"></div>
            </div>


            <div class="row">
                <div class="col-lg-1">
                </div>
                    <div class="col-lg-10"><form action="addPEC.php" method="post">

                          <div class="row">
                          <div class="col-lg-10">
                            <h3>Enrollment Chart</h3>
                          </div>

                          </div>
                          <div class="row">
                          <div class="col-lg-2">
                           </div>
                           <div class="col-lg-6" style="padding-top:50px;">
						   </div>
                             <div class="col-lg-4" style="padding-top:50px;padding-left:70px">
                                   <button type="submit" class="btn btn-default" name="updatePEC"> <i class="glyphicon glyphicon-ok"> Save</i></button>
                                   <button type ="submit" class="btn btn-default" ><i class="glyphicon glyphicon-remove">Cancel</i></button>
                             </div>
                           
                          </div>

                        <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                              <div class="dataTable_wrapper">
                                  <div>

                                  <div class="dataTable_wrapper">
                                      <table class="table table-striped table-bordered table-hover" id="pec">
                                          <thead>
                                              <tr>
                                                  <th class="text-center">Course</th>
                                                  <th class="text-center">Academic Year</th>
                                                  <th class="text-center">Term</th>
                                                  <th class="text-center">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd gradeX">
											<td><select class="form-control inputs" name="course[]"><option value="ANMODEL">ANMODEL : An Model</option><option value="APP-DEV">APP-DEV : Applications Development</option><option value="ARCH-OS">ARCH-OS : Architecture of Operating Systems</option><option value="ARCPLAN">ARCPLAN : Architecture Planning</option><option value="DASTAPP">DASTAPP : Data Structures in Applications</option><option value="DB-ADMI">DB-ADMI : Database Administration</option><option value="ENGLCOM">ENGLCOM : English Communications</option><option value="ENGLRES">ENGLRES : English Research</option><option value="FILDLAR">FILDLAR : Filipino DLAR</option><option value="FILKOMU">FILKOMU : Komunikasyon sa Filipino</option><option value="FIMODIT">FIMODIT : Finance and MODIT</option><option value="FITWELL">FITWELL : Fitness and Wellness</option><option value="FORMDEV">FORMDEV : Formation and Development</option><option value="FTDANCE">FTDANCE : Fitness in Dance</option><option value="FTSPORT">FTSPORT : Fitness in Sports</option><option value="FTTEAMS">FTTEAMS : Fitness in Team Sports</option><option value="GREATWK">GREATWK : Great Works</option><option value="HUMAART">HUMAART : Art Appreciation</option><option value="HUMALIT">HUMALIT : Literature Appreciation</option><option value="INTFILO">INTFILO : Introduction to Philosophy</option><option value="INTPRG1">INTPRG1 : Introduction to Programming 1</option><option value="INTPRG2">INTPRG2 : Introduction to Programming 2</option><option value="INTR-DB">INTR-DB : Intro to Databases</option><option value="INTR-IT">INTR-IT : Introduction to IT</option><option value="INTR-NW">INTR-NW : Introduction to Networks</option><option value="INTRSEC">INTRSEC : Introduction to Securities</option><option value="IPERSEF">IPERSEF : iPersonal Effectiveness</option><option value="ITELEC1">ITELEC1 : IT Elective 1</option><option value="ITELEC2">ITELEC2 : IT Elective 2</option><option value="ITELEC3">ITELEC3 : IT Elective 3</option><option value="ITELEC4">ITELEC4 : IT Elective 4</option><option value="ITETHIC">ITETHIC : Ethics in IT</option><option value="ITMATH1">ITMATH1 : IT Math 1</option><option value="ITMATH2">ITMATH2 : IT Math 2</option><option value="ITMATH3">ITMATH3 : IT Math 3</option><option value="ITMETHD">ITMETHD : IT Methodologies</option><option value="ITORMGT">ITORMGT : IT Organization and Management</option><option value="KASPIL1">KASPIL1 : Kasaysayan ng Pilipinas 1</option><option value="KASPIL2">KASPIL2 : Kasaysayan ng Pilipinas 2</option><option value="LASARE1">LASARE1 : La Sallian Recollection 1</option><option value="LASARE2">LASARE2 : La Sallian Recollection 2</option><option value="LASARE3">LASARE3 : La Sallian Recollection 3</option><option value="LBYENVC">LBYENVC : Chemsitry Lab</option><option value="LBYENVP">LBYENVP : Physics Lab</option><option value="LOGPROG">LOGPROG : Logic Formulation in Programming</option><option value="NET-DES">NET-DES : Network Designs</option><option value="NSTP-01">NSTP-01 : National Services Training Program 1</option><option value="NSTP-02">NSTP-02 : National Services Training Program 2</option><option value="NSTP101">NSTP101 : National Services Training Program 101</option><option value="PERSEF1">PERSEF1 : Personal Effetiveness</option><option value="PERSEF2">PERSEF2 : Personal Effectiveness 2</option><option value="PRCINFO">PRCINFO : Practicum</option><option value="PROBSTA">PROBSTA : Probability and Statistics</option><option value="SAS1000">SAS1000 : SAS 1000</option><option value="SCIENVB">SCIENVB : Science in Biologi</option><option value="SCIENVC">SCIENVC : Science in Chemistry</option><option value="SCIENVP">SCIENVP : Science in Physics</option><option value="SOCTEC1">SOCTEC1 : Social Technologies 1</option><option value="SOCTEC2">SOCTEC2 : Social Technologies 2</option><option value="SPECSYS">SPECSYS : Specialized Systems</option><option value="SPEECOM">SPEECOM : Speech Communications</option><option value="SPELEC1">SPELEC1 : Special Elective 1</option><option value="SPELEC2">SPELEC2 : Special Elective 2</option><option value="SPELEC3">SPELEC3 : Special Elective 3</option><option value="SWENGG">SWENGG : Software Engineering</option><option value="SYSINTG">SYSINTG : Systems Integration</option><option value="SYSMGMT">SYSMGMT : Systems Management</option><option value="SYSTANA">SYSTANA : Systems Analysis</option><option value="SYSTDES">SYSTDES : System Design</option><option value="SYSTIMP">SYSTIMP : Systems Implementation</option><option value="TECHMGT">TECHMGT : Technology Management</option><option value="THS-IT1">THS-IT1 : Thesis 1</option><option value="THS-IT2">THS-IT2 : Thesis 2</option><option value="TREDFOR">TREDFOR : Theology Four</option><option value="TREDONE">TREDONE : Theology One</option><option value="TREDTRI">TREDTRI : Theology Three</option><option value="TREDTWO">TREDTWO : Theology Two</option><option value="WEBTECH">WEBTECH : Web Technologies</option><option value="WIR-TEC">WIR-TEC : Wireless Technologies</option></select></td>
											<td class="text-center"><input type="number" class="form-control inputs" name="academicYear[]"></td>
											<td class="text-center"><select class="form-control inputs" name="term[]"><option value="T1">Term 1</option><option value="T2">Term 2</option><option value="T3">Term 3</option></select></td>
												<td>
                                                <div class="btn-group" style="vertical-align: middle;">
                                                <span data-toggle="tooltip" title="Edit Equipment Details"><button class="btn btn-xs btn-default" id="add_input4" data-toggle="modal" data-target="#modal-b" type="button" style="background:none;border:none"><i class="glyphicon glyphicon-plus"></i></button></span>
                                                </div>
                                              </td>
                                            </tr>

                                            </tbody>
                                          </table>
										
                                      </div>
                                  </div>
                                  </div>
								  <input type="hidden" name="pecID" value="<?php echo $pecID; ?>">
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>





			</form>
            </div>










    </div>
        <!-- /#page-wrapper -->
         <!-- jQuery -->
    <script src="../dist/js/tab.js"></script>
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