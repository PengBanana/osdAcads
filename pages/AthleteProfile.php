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
else if(empty($typex)){
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
}
else{
	$name=$_SESSION["name"];
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
                    <h1 class="page-header"> Athlete's Profile </h1>
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
                 <?php
				$athleteID=$_POST['athleteID'];
				$query="SELECT * FROM acadsosd.studentathleteprofile s JOIN team t ON s.teamCode=t.sportCode JOIN academicclassification c ON s.statusID=c.statusID JOIN plannedenrollmentchart pec ON s.studentIDNumber=pec.studentIDNumber JOIN degree dg ON pec.degreeTable_degreeCode=dg.degreeCode JOIN department dpt ON dg.departmentCode=dpt.departmentCode JOIN college col ON dpt.college_collegeCode = col.collegeCode WHERE s.studentIDNumber='".$athleteID."';";
				$result=mysqli_query($dbc,$query);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				$lastname=$row['studentLastName'];
				$firstname=$row['studentFirstName'];
				$middleName=$row['studentMiddleName'];
				$birthday=$row['studentDateOfBirth'];
				$weight=$row['studentWeight'];
				$height=$row['studentHeight'];
				$bloodtype=$row['studentBloodType'];
				$nationality=$row['studentNationality'];
				$religion=$row['studentReligion'];
				$email1=$row['studentDlsuEmail'];
				$email2=$row['studentAlternateEmail'];
				$address1=$row['studentAddressLine1'];
				$address2=$row['studentAddressLine2'];
				$father=$row['studentFatherFullName'];
				$mother=$row['studentMotherFullName'];
				$fatherOccupation=$row['studentFatherOccupation'];
				$motherOccupation=$row['studentMotherOccupation'];
				$emergencyName=$row['studentEmergencyContact'];
				$emergencyNumber=$row['EmergencyContactNumber'];
				$emergencyRelationship=$row['EmergencyContactRelationship'];
				$sportCode=$row['sportCode'];
				$teamName=$row['teamName'];
				$sport=$row['sport'];
				$status=$row['statusName'];
				$degreeCode=$row['degreeTable_degreeCode'];
				$degree=$row['degreeName'];
				$department=$row['departmentCode'];
				$collegeCode=$row['college_collegeCode'];
				$college=$row['collegeName'];
                $statusID=$row['statusID'];
				if(empty($middleName)){
					$middleName="";
				}
				if(empty($mother)){
					$mother="N/A";
					$motherOccupation="N/A";
				}
				if(empty($father)){
					$father="N/A";
					$fatherOccupation="N/A";
				}
				if(empty($email1)){
					$email2="N/A";
				}
				if(empty($email2)){
					$email2="N/A";
				}
				if(empty($address1)){
					$address1="N/A";
				}
				if(empty($address2)){
					$address2="N/A";
				}

                $color="black";

                if($statusID == '1'){
                    $color = "red";
                }
                else if($statusID == '2'){
                    $color = "orange";
                }
                else if($statusID == '3'){
                    $color = "green";
                }

                $classcolor="";

                if($statusID == '1'){
                    $classcolor = "statusSuperCritical";
                }
                else if($statusID == '2'){
                    $classcolor = "statusCritical";
                }
                else if($statusID == '3'){
                    $classcolor = "statusNotCritical";
                }

				echo
				'
				<form>

                        <div class="form-group">
                            <div>Name:
                            <label>'.$lastname.', '.$firstname.' '.$middleName.'</label>
                            </div>
                            <div>ID No:
                            <label>'.$athleteID.'</label>
                            </div>
                            <div>Team:
                            <label>'.$teamName.': '.$sport.'('.$sportCode.')</label>
                            </div>
                            <div>College:
                            <label>'.$college.' ('.$collegeCode.')</label>
                            </div>
                            <div>Degree Program:
                            <label>'.$degree.' ('.$degreeCode.')</label>
                            </div>

                        </div>



                    </form>



                </div>
                 <div class="col-lg-3"></div>
                <div class="col-lg-2">
                    <div style="color: '.$color.';"> <label>'.$status.'</label></div>
                    <div>
                        <label> Units Remaining: </label>

                    </div>
                    <label style="font-size: 24px;">150</label>

                </div>

                 <div class="col-lg-6" style="padding-left:320px;"><button class="btn btn-default btn-lg" data-toggle="modal" data-target="#editStatus" style="height:40px; width: auto;font-size:14px;">Edit Status
						 </button></div>

            </div>
				';

				?>



            <div class="row">
                <div class="col-lg-1">
                </div>
                    <div class="col-lg-10">
                        <div class="tab">
                          <button class="tablinks" onclick="openTab(event, 'profile')">Profile</button>
                          <button class="tablinks" onclick="openTab(event, 'academicHistory')">Academic History</button>
                          <button class="tablinks" onclick="openTab(event, 'pte')">Actual Term Enrollment</button>
                          <button class="tablinks" onclick="openTab(event, 'failureHistory')">Failure History</button>
                          <button class="tablinks" onclick="openTab(event, 'pec')">Planned Enrollment Chart  </button>
                        </div>

                        <div id="profile" class="tabcontent">
                          <div class="row" style="padding-left: 30px;">
                          <h3>Profile</h3>
                              <div class="col-lg-6">
                                  <div style="padding-top: 5px; font-size: 17px;">
                                      <div><label>Birthday</label></div>
                                      <div><label>Weight</label></div>
                                      <div><label>Height</label></div>
                                      <div><label>Blood Type</label></div>
                                      <div><label>Nationality</label></div>
                                      <div><label>Religion</label></div>
                                      <div><label>Primary Email</label></div>
                                      <div><label>Alternate Email</label></div>
                                      <div><label>Primary Address</label></div>
                                      <div><label>Secondary Address</label></div>
                                      <div><label>Father's Name</label></div>
                                      <div><label>Father's Occupation</label></div>
                                      <div><label>Mother's Name</label></div>
                                      <div><label>Mothers' Occupation</label></div>
									  </br>
                                      <div><label>Emergency Contact Name:</label></div>
                                      <div><label>Contact Number</label></div>
                                      <div><label>Relationship</label></div>
                                  </div>
                            </div>
                            <div class="col-lg-6" >
                                <?php
							echo
							'
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$birthday.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$weight.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$height.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$bloodtype.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$nationality.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$religion.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$email1.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$email2.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$address1.'</p>
								<p><span class="glyphicon glyphicon-minus"></span> 	'.$address2.'</p>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$father.'</p>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$fatherOccupation.'</p>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$mother.'</p>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$motherOccupation.'</p>
								</br>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$emergencyName.'</p>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$emergencyNumber.'</p>
								<p><span class="glyphicon glyphicon-minus"></span>	'.$emergencyRelationship.'</p>
							';
								$color="";
							?>
                            </div>
                          </div>
                          <div class="row" style="border-bottom: 1px solid #ccc; padding-left: 30px;">
                              <h3>Education</h3>
                              <div class="col-lg-6">
                                  <div style="padding-top: 5px; font-size: 17px;">
                                      <div><label>Grade 6 </label></div>
                                      <div><label>Grade 7 </label></div>
                                      <div><label>Grade 9</label></div>
                                      <div><label>Grade 10</label></div>
                                      <div><label>Grade 11</label></div>
                                      <div><label>Grade 12</label></div>
                                    </div>
                                </div>

                                <div class="col-lg-6" style="padding-top: 8px;">
                                      <p>Collegio San Agustin</p>
                                      <p>Collegio San Agustin</p>
                                      <p>Collegio San Agustin</p>
                                      <p>Collegio San Agustin</p>
                                      <p>Collegio San Agustin</p>
                                      <p>Collegio San Agustin</p>
                                      <p>Collegio San Agustin</p>
                                </div>
                          </div>

                          <div class="row" style="padding-left: 30px;">
                              <h3>Education</h3>

                                <div class="col-lg-12" style="padding-top: 8px;">
                                      <p>2nd Runner Up Palarong Pambansa in Basketball November 25, 2011</p>
                                </div>

                          </div>
                        </div>

                        <div id="pec" class="tabcontent">
                          <div class="row">
                          <div class="col-lg-8">
                            <h3>Enrollment Chart</h3>
                          </div>
                            <div class="col-lg-4" style="padding-left: 50px;">
							<form action="addPEC.php" method="post"><input type="hidden" value="<?php echo $athleteID; ?>" name="athleteID"><input type=submit class="btn btn-link breadCrumb1" name="submit" value="EDIT PLANNED ENROLLMENT CHART"></form>
                              </div>
                          </div>
                          <div class="row">
                          <div class="col-lg-3">
                            <div class="form-group" style="padding-top: 25px;">
                                 <label>School year</label>
                                 <select class="form-control">
                                 <option>-School year-</option>
                                 <option>2014-2015</option>
                                 <option>2015-2016</option>
                                 <option>2017-2018</option>
                                         </select>
                                     </div>
                           </div>
                          </div>

                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Term 1 SY 2014 - 2015
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <th class="text-center">Course</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Grade</th>

                                    </thead>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>

                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> ITORGMT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>

                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> INTRIT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>

                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> TREDONE</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>

                                        </tr>
                                    </tbody>
                                </table>
                                <div><label>Term total: 12</label></div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>





                    <!--SECOND TABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Term 2 SY 2014 - 2015
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <th class="text-center">Course</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Grade</th>

                                    </thead>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> ITORGMT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> INTRIT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> TREDONE</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div><label>Term total: 12</label></div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- / end of second table -->



                    <!-- Third Table -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Term 3 SY 2014 - 2015
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <th class="text-center">Course</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center">Grade</th>

                                    </thead>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>

                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> ITORGMT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>


                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> INTRIT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>

                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> TREDONE</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>


                                        </tr>
                                    </tbody>
                                </table>
                                <div><label>Term total: 12</label></div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /. end of Third Table -->
                    <!-- /.panel -->
                    <div>
                      <label>Total Units : 36</label><br>
                      <label>CGPA: 3.99</label>
                    </div>
                        </div>


                        <div id="academicHistory" class="tabcontent">
                          <h3>Academic History</h3>
                          <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date Classified</th>
                                            <th class="text-center">Classification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $selectClassificationHistory = "SELECT ch.dateClassified as DC, ac.statusName as SN
                                                                        FROM classificationhistory ch JOIN academicclassification ac
                                                                        ON ch.classificationID = ac.statusID;";
                                        $result = mysqli_query($dbc, $selectClassificationHistory);
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            echo'<tr class="odd gradeX">
                                            <td class="text-center">'.$row['DC'].'</td>
                                            <td class="text-center '.$classcolor.'">'.$row['SN'].'</td>
                                            </tr>';
                                        }

                                        ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <!-- /.panel-body -->
                        </div>


                        <div id="pte" class="tabcontent">
                          <div class="row">
                              <div class="col-lg-8" >  <h3>Actual Term Enrollment </h3></div>
                              <div class="col-lg-4"style="padding-top: 50px;" >

                                <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#writeReport">
                                    <i class="glyphicon glyphicon-plus btnFont" >Add Academic Performance</i></button>

                                <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#addCourse" >
                                  <i class="glyphicon glyphicon-plus btnFont"> Add Course</i>
                              </button></div>


                          <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper" >

                              </div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Course </th>
                                            <th class="text-center">Course Name</th>
                                            <th class="text-center">Unit</th>
                                            <th class="text-center">Grade</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL2</td>
                                            <td class="text-center ">hi  alvin</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">4  </td>
                                            <td class="text-center">
                                                <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#remove" style="font-size: 12px;">Remove</button>
                                                <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#editCourse" style="font-size: 12px;">Edit Course</button>
                                              <!-- Modal -->
                                              <div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                              <h4 class="modal-title" id="myModalLabel">Add Course</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                          <form>
                                                              <div class="form-group">
                                                                <label style="float:left"> Course code</label>
                                                                <input class="form-control" type="text">

                                                              </div>

                                                          </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-primary">Save changes</button>
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                          </div>
                                                      </div>
                                                      <!-- /.modal-content -->
                                                  </div>
                                                  <!-- /.modal-dialog -->
                                              </div>
                                              <!-- /.modal -->


                                              <div class="modal fade" id="remove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                              <h4 class="modal-title" id="myModalLabel">Remove Course</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                          <form>
                                                              <div class="form-group">
                                                                <p>Do you want to delete this course?</p>

                                                              </div>
                                                          </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-primary">Confirm</button>
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                          </div>
                                                      </div>
                                                      <!-- /.modal-content -->
                                                  </div>
                                                  <!-- /.modal-dialog -->
                                              </div>
                                              <!-- /.modal -->

                                              <!-- edit course modal -->
                                              <div class="modal fade" id="editCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Course</h4>
                                                    </div>
                                                  <div class="modal-body">
                                                    <form>
                                                      <div class="form-group">
                                                        <label style="float:left">Professor ID No.</label>
                                                        <input class="form-control" type="text">
                                                      </div>
                                                      <div class="form-group">
                                                        <label style="float:left">Professor Name</label>
                                                        <input class="form-control" type="text">
                                                      </div>
                                                    </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Confirm</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                  </div>
                                                  </div>
                                                  <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                              </div>
                                              <!-- /.modal -->



                                              <!-- Modal Add Apr -->
                                              <div class="modal fade" id="writeReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                              <h4 class="modal-title" id="myModalLabel">Add Academic Performance Update</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                          <form>
                                                              <div class="form-group">
                                                                <label style="float:left"> Choose type of Academic Report </label>
                                                                <div class="form-group">
                                                                    <select class="form-control">
                                                                        <option>Midterm Performance</option>
                                                                        <option>FinalS Performance</option>
                                                                    </select>
                                                                </div>

                                                                <label style="float:left"> Course </label>
                                                                <div class="form-group">
                                                                    <select class="form-control">
                                                                        <option>enrolled courses here</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                      <label style="float:left">Grade</label>
                                                                      <input class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                      <label style="float:left"> Write Report </label>
                                                                      <textarea class="form-control" rows="4"></textarea>
                                                                </div>



                                                              </div>

                                                          </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-primary" >Confirm</button>
                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                          </div>
                                                      </div>
                                                      <!-- /.modal-content -->
                                                  </div>
                                                  <!-- /.modal-dialog -->
                                              </div>
                                              <!-- /.modal -->
																							<!-- Modal edit Status -->
																							<div class="modal fade" id="editStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																									<div class="modal-dialog">
																											<div class="modal-content">
																													<div class="modal-header">
																															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																															<h4 class="modal-title" id="myModalLabel">Edit Academic Status Course</h4>
																													</div>
																													<div class="modal-body">
																													<form>
																															<div class="form-group">
																																<label style="float:left"> Choose type of Academic Report </label>
																																<div class="form-group">
																																		<select class="form-control">
																																				<option>Inactive</option>
																																				<option>Not Critical</option>
																																				<option>Critical </option>
																																				<option>Super Critical </option>

																																		</select>
																																</div>
																															</div>

																													</form>
																													</div>
																													<div class="modal-footer">
																															<button type="button" class="btn btn-primary" >Confirm</button>
																															<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
																													</div>
																											</div>
																											<!-- /.modal-content -->
																									</div>
																									<!-- /.modal-dialog -->
																							</div>
																							<!-- /.modal -->
                                            </td>


                                        </tr>

                                    </tbody>
                                </table>
                                <label style="float: right;">Total Units: 3</label>

                            </div>

                        </div>
                        <!-- /.panel-body -->
                        </div>

                        <div id="failureHistory" class="tabcontent">
                          <h3>Failure History</h3>
                          <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">School Year</th>
                                            <th class="text-center">Term</th>
                                            <th class="text-center">Course </th>
                                            <th class="text-center">Unit</th>
                                            <th class="text-center">Reinstated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="text-center" ><a href="Athlete's Profile.html"><u style="color: black;">2014-2015</u></a></td>
                                            <td class="text-center"> T2</td>
                                            <td class="text-center ">INTPRG1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center ">Yes</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <label style="float: right;">Total Units: 3</label>
                            </div>

                        </div>
                        <!-- /.panel-body -->
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
