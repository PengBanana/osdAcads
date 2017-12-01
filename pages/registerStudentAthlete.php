
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>New Athlete</title>

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
					
                       echo'<li><a href="#"><i class="fa fa-user fa-fw"></i> '.$name.'</a>
                        </li>'; 
                        echo '<li><a href="#"><i class="fa fa-gear fa-fw"></i> FAQS</a>
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
                <div class="col-lg-12">
                    <h1 class="page-header"> Student Athlete Registration </h1>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <form action="addEducationalBackground.php" method="post">
                        <div class="form-group">
                            <label> Last Name: </label>
                            <input type="text" class="form-control inputs" name="lastname" required />
                        </div>

                        <div class="form-group">
                            <label> First Name: </label>
                            <input type="text" class="form-control inputs" name="firstname" required />
                        </div>

                        <div class="form-group">
                            <label> Middle Name: </label>
                            <input type="text" class="form-control inputs" name="middlename">
                        </div>

                        <div class="form-group">
                            <label>ID Number: </label>
                            <input type="text" class="form-control inputs" name="idnum"/>
                        </div>

                        <div class="form-group">
                            <label>Degree Program:</label>
                            <input type="text" class="form-control inputs" name="degree" />
                        </div>
                        <div class="form-group">
						 <label>Sport: </label>
                            <select class="form-control inputs" name="sport">';
						require_once('../osd_connect.php');
						$query="SELECT * FROM acadsosd.team;";
						$result=mysqli_query($dbc, $query);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$sportCode=$row['sportCode'];
							$sport=$row['sport'];
							$teamName=$row['teamName'];
							echo '<option value="'.$sportCode.'">'.$teamName.' : '.$sport.'</option>';
						}
							echo'
							</select>
                        </div>

                        <div class="form-group">
                            <label>Date of Birth: </label>
                            <input type="date" class="form-control inputs" name="birthday" required />
                        </div>

                        <div class="form-group">
                            <label>Nationality: </label>
							<select class="form-control inputs" name="nationality" required>';
						$query="SELECT * FROM acadsosd.nationality;";
						$result=mysqli_query($dbc, $query);
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$nationality=$row['nationality'];
							echo '<option value="'.$nationality.'">'.$nationality.'</option>';
						}
						
				// <input type="text" class="form-control inputs" name="nationality" required />
				?>
				</select>
				  </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                            <label>Religion: </label>
                            <input type="text" class="form-control inputs" name="religion"/>
                        </div>

                     <div class="form-group">
                        <label>Weight: </label>
                        <input type="text" class="form-control inputs" name="weight" placeholder="lbs" required />
                    </div>

                    <div class="form-group">
                        <label>Height: </label>
                        <input type="text" class="form-control inputs" name="height" placeholder="cm" required />
                    </div>

                     <div class="form-group">
                            <label>Blood Type:</label>
                            <select class="form-control inputs" name="bloodtype" required>
                                <option></option>
                                <option value="A">A</option>
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B">B</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="AB">AB</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O">O</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>

                    <div class="form-group">
                        <label>DLSU e-mail address: </label>
                        <input type="text" class="form-control inputs" name="email" required />
                    </div>

                    <div class="form-group">
                        <label>Alternate e-mail address: </label>
                        <input type="text" class="form-control inputs" name="alternateemail"/>
                    </div>


                     <div class="form-group">
                        <label>Address Line 1: </label>
                        <textarea rows="4" cols="50" class="form-control inputs" name="address1" required>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Address Line 2: </label>
                        <textarea rows="4" cols="50" class="form-control inputs" name="address2">
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="form-group">
                        <label>Father's Name: </label>
                        <input type="text" name="fathername" class="form-control inputs"/>

                        <label>Occupation: </label>
                        <input text="text" class="form-control inputs" name="fatheroccupation"/>
                    </div>

                    <div class="form-group">
                        <label>Mother's Name: </label>
                        <input type="text" name="mothername" class="form-control inputs"/>
                        <label>Occupation: </label>
                        <input text="text" class="form-control inputs" name="motheroccupation"/>
					</div>
					<div class="form-group">
                        <label>Emergency Contact Name: </label>
                        <input type="text" name="emergencyname" class="form-control inputs" required />
						<label>Emergency Contact Number: </label>
                        <input type="text" name="emergencynumber" class="form-control inputs" required />
                        <label>Relationship: </label>
                        <input text="text" class="form-control inputs" name="emergencyrelationship" required/>
					</div>
                </div>

            </div>
            <div class="row">
              <div class="col-lg-10"></div>
              <div class="col-lg-2">
            <input type="submit" class="btn btn-default" name="registerAthlete" value="Proceed">
			</form>
          </div>
          </div>



    </div>
        <!-- /#page-wrapper -->
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
    </div>
    </body>

</html>
