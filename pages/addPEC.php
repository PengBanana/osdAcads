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
                    <form>

                        <div class="form-group">
                            <div>Name:
                            <label> Modino, Christian Concepcion</label>
                            </div>
                            <div>ID No:
                            <label> 11443359</label>
                            </div>
                            <div>Team:
                            <label> Animo Squad</label>
                            </div>
                            <div>College:
                            <label>College of Computer Studies </label>
                            </div>
                            <div>Degree Program:
                            <label>BS Information Technology</label>
                            </div>

                        </div>



                    </form>



                </div>
                 <div class="col-lg-3"></div>
                <div class="col-lg-2">
                    <div style="color: red;"> <label>SUPER CRITICAL</label></div>
                    <div>
                        <label> Units Remaining: </label>
                    </div>
                    <label style="font-size: 24px;">250.0(10)</label>
                </div>

                 <div class="col-lg-7"></div>

            </div>


            <div class="row">
                <div class="col-lg-1">
                </div>
                    <div class="col-lg-10">


                          <div class="row">
                          <div class="col-lg-10">
                            <h3>Enrollment Chart</h3>
                          </div>

                          </div>
                          <div class="row">
                          <form>
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
                           <div class="col-lg-7" style="padding-top:50px;">

                                 <button type="submit" class="btn btn-default">  <i class="glyphicon glyphicon-search"> Search</i></button>


                             </form>
                             </div>
                             <form>
                             <div class="col-lg-2" style="padding-top:50px;padding-left:70px">
                                   <button type="submit" class="btn btn-default" > <i class="glyphicon glyphicon-ok"> Save</i></button>
                                   <button type ="submit" class="btn btn-default" ><i class="glyphicon glyphicon-remove">Cancel</i></button>
                             </div>
                           </form>
                          </div>

                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Term 1 SY 2014 - 2015
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                              <div class="dataTable_wrapper">
                                <form action="editPEC.html" method="post">
                                  <div>

                                  <div class="dataTable_wrapper">
                                      <table class="table table-striped table-bordered table-hover" id="pec">
                                          <thead>
                                              <tr>
                                                  <th class="text-center">Course</th>
                                                  <th class="text-center">Unit</th>
                                                  <th class="text-center">Code</th>
                                                  <th class="text-center">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd gradeX">
                                              <td class="text-center"><input type="text" class="form-control inputs" name="course[]"></td>
                                              <td class="text-center"><input type="text" class="form-control inputs" name="unit[]"></td>
                                              <td class="text-center"><input type="text" class="form-control inputs" name="grade[]"></td>
                                              <td class="text-center bg-success-light" style="border-color:#999999">
                                                <div class="btn-group" style="vertical-align: middle;">
                                                <span data-toggle="tooltip" title="Edit Equipment Details"><button class="btn btn-xs btn-default" id="add_input4" data-toggle="modal" data-target="#modal-b" type="button" style="background:none;border:none"><i class="glyphicon glyphicon-plus"></i></button></span>
                                                </div>
                                              </td>
                                            </tr>

                                            </tbody>
                                          </table>

                                      </div>
                                  </div>

                                    </form>
                                  </div>

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>






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