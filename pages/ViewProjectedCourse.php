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
        
    <link rel="stylesheet" type="text/css" href="../dist/css/modal.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" >

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
                        <li><a href="SMprofile.html"><i class="fa fa-user fa-fw"></i> Carlos Fontanilla</a>
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
                    <h1 class="page-header">Add Projected to Fail Courses</h1>          
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Animo Squad</b>
                        </div>
                        <!-- /.panel-heading -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 10px;"></th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Course Code </th>
                                            <th class="text-center">Unit </th>
                                            <th class="text-center">Updates </th>
                                            <th class="text-center">Performance </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <label><input type="checkbox" value=""></label> </td>
                                            <td class="text-center">Petrola, Gregory</td>
                                            <td class="text-center">KASPIL2</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">MOST LIKELY TO FAIL</td>
                                            <td class="text-center"><button id="myBtn" class="glyphicon glyphicon-file" style="color: black;"></button></td>


                                            <!-- The Modal -->
                                            <div id="myModal" class="modal">

                                              <!-- Modal content -->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <span class="close">&times;</span>
                                                  <h3>Academic Performance</h3>
                                                </div>
                                                <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                         <h4>Gregory Petrola</h4>
                                                    </div>
                                                    <div class="col-lg-6" >
                                                        <div style="float: right; padding-top: 8px;">
                                                            <p><b>1 Absences & 2 lates</b></p>
                                                        </div>
                                                            
                                                    </div>
                                                </div>
                                                 
                                                  <p>BS-IT</p>
                                                  <p><b>KASPIL1</b></p>
                                                  <p>
                                                      The student-athlete has been attending his classes. He was helped by the Academic Coordinator, He got 80 in his Exercise 3 (September 10). The Student Manager sent an e-mail to the professor on 22 September to consult about the student-athlete’s academic performance in class
                                                  </p>
                                                  <p></p>
                                                </div>
                                                
                                              </div>

                                            </div>
                                            
                                            
                                        </tr>

                                        <tr>
                                            <td> <label><input type="checkbox" value=""></label> </td>
                                            <td class="text-center">Modino, Christian</td>
                                            <td class="text-center">KASPIL2</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">WILL NOT FAIL</td>
                                            <td class="text-center"><a href="#" class="glyphicon glyphicon-file" style="color: black;"></a></td>
                                            
                                        </tr>


                                        <tr>
                                            <td> <label><input type="checkbox" value=""></label> </td>
                                            <td class="text-center">Toleran, Manuel</td>
                                            <td class="text-center">INTFILO</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">WILL NOT FAIL</td>
                                            <td class="text-center"><a href="#" class="glyphicon glyphicon-file" style="color: black;"></a></td>
                                            
                                        </tr>


                                        <tr>
                                            <td> <label><input type="checkbox" value=""></label> </td>
                                            <td class="text-center">Lao, Marvin</td>
                                            <td class="text-center">SCIENVC</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">NEAR FAILURE</td>
                                            <td class="text-center"><a href="#" class="glyphicon glyphicon-file" style="color: black;"></a></td>
                                           
                                        </tr>

                                        <tr>
                                            <td> <label><input type="checkbox" value=""></label> </td>
                                            <td class="text-center">Pimentel, Austin</td>
                                            <td class="text-center">LBYENVC</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">WILL NOT FAIL</td>
                                            <td class="text-center"><a href="#" class="glyphicon glyphicon-file" style="color: black;"></a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td> <label><input type="checkbox" value=""></label> </td>
                                            <td class="text-center">Fontanilla, Carlos</td>
                                            <td class="text-center">SOCTEC2</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">WILL NOT FAIL</td>
                                            <td class="text-center"><a href="#" class="glyphicon glyphicon-file" style="color: black;"></a></td>



                                            
                                        </tr>


                                        
                                    </tbody>
                                 </table>
                                 <div style="padding-left: 45%"><a href="#" class="btn btn-sm btn-default" > Submit</a></div>
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
    <script src="../dist/js/modal.js"></script>
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
