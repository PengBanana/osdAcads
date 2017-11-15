<?php
session_start();
require_once('../osd_connect.php');
//$idnumber=$_SESSION["idnumber"];
$error=0;
if(0==1){
	//insert redirect login here
	header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/login.php");
}
else{
//$name=$_SESSION["name"];
if(empty($name)){
	$name="no name";
}
}
			
		
				if(isset($_POST['confirmPassword'])){
					$password1=$_POST['password1'];
					$password2=$_POST['password2'];
					if($password1==$password2){
						$query="UPDATE `acadsosd`.`user` SET `password`='".$password1."' WHERE `idnumber`='".$idnumber."';";
						mysqli_query($dbc, $query);
						header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/studentManagerHome.php");
					}
					else{
						$error=1;
					}
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
                <div class="col-lg-12">
                    <h1 class="page-header">  Welcome <?php echo $name; ?> </h1>
					<?php
					if($error>0){
						echo '<div class="alert alert-danger">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</div>';
					}
					?>
                </div>
				
            </div>


            <div class="row" id="main-panel">
			
                <p> <b>Congratulations!</b> You are now an official student manager, But before we proceed to Home page you need to set up the password for your account for your own privacy.<b> *Password must contain atleast five (5) characters*</b></p>
                <div class="col-lg-3">  </div>
                <div class="col-lg-5">
                    <form action="newUser.php" method="post">

                        <div class="form-group">
                            <label> Password: </label>
                            <input type="password" class="form-control inputsSM" id="password" name="password1" required>
                        </div>

                        <div class="form-group">
                            <label> Re-enter Password Name: </label>
                            <input type="password" class="form-control inputsSM" id="password" name="password2" required>
                        </div>
                       
                        <div >
                        <input type="submit" class="btn btn-default" id="submitbutton" name="confirmPassword" value="Confirm">
                        </div>
                    </form> 
                </div>



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
