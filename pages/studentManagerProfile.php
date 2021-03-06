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
                            <div>Team Assigned:
                            <label> Animo Squad</label>
                            </div>
                            <div>E-mail:
                            <label>*e-mail* </label>
                            </div>
                        </div>



                    </form>



                </div>
                <!--
                 <div class="col-lg-3"></div>
                <div class="col-lg-2">
                    <div style="color: red;"> <label>SUPER CRITICAL</label></div>
                    <div>
                        <label> Units Remaining: </label>
                    </div>
                    <label style="font-size: 24px;">250.0(10)</label>
                </div>

                 <div class="col-lg-7"></div>
               -->
            </div>


            <div class="row">
                <div class="col-lg-1">
                </div>
                    <div class="col-lg-10">
                        <div class="tab">
                          <button class="tablinks" onclick="openTab(event, 'profile')">Profile</button>
                          <button class="tablinks" onclick="openTab(event, 'academicHistory')">Academic History</button>
                          <button class="tablinks" onclick="openTab(event, 'pte')">Planned Term Enrollment</button>
                          <button class="tablinks" onclick="openTab(event, 'failureHistory')">Failure History</button>
                          <button class="tablinks" onclick="openTab(event, 'pec')">Planned Enrollment Chart  </button>
                        </div>

                        <div id="profile" class="tabcontent">
                          <div class="row" style="padding-left: 30px;">
                          <h3>Profile</h3>
                              <div class="col-lg-6">
                                  <div style="padding-top: 5px; font-size: 17px;">
                                      <div><label>DLSU mail</label>
                                      </div>
                                      <div><label>Alternate e-mail</label></div>
                                      <div><label>Contact No.</label></div>
                                      <div><label>City Address</label></div>
                                      <div><label>Home Address</label></div>
                                      <div><label>Blood Type</label></div>
                                      <div><label>Mother</label></div>
                                      <div><label>Occupation </label></div>
                                      <div><label>Father</label></div>
                                      <div><label>Occupation</label></div>
                                    </div>
                            </div>
                            <div class="col-lg-6" >
                                <p>christian_modino@dlsu.edu.ph</p>
                                <p>christian_modino@gmail.com</p>
                                <p>808-0676</p>
                                <p>9999 Green Residences</p>
                                <p>1234 Sta. Rosa, Laguna</p>
                                <p>O</p>
                                <p>Modino, Rowena</p>
                                <p>AAAAAAAAAAAAAAA</p>
                                <p>Modino, Florentino</p>
                                <p>AAAAAAAAAAAAAAA</p>
                            </div>
                          </div>
                          <div class="row" style="border-bottom: 1px solid #ccc; padding-left: 30px;">
                              <h3>Education</h3>
                              <div class="col-lg-6">
                                  <div style="padding-top: 5px; font-size: 17px;">
                                      <div><label>DLSU mail</label>
                                      </div>
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
                          <div class="col-lg-7">
                            <h3>Planned Enrollment Chart</h3>
                          </div>
                            <div class="col-lg-5">
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
                                        <th class="text-center">Actions</th>
                                    </thead>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> ITORGMT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> INTRIT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> TREDONE</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
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
                                        <th class="text-center">Actions</th>
                                    </thead>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> ITORGMT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> INTRIT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> TREDONE</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
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
                                        <th class="text-center">Actions</th>
                                    </thead>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL1</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> ITORGMT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> INTRIT</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
                                        </tr>

                                        <tr class="odd gradeX">
                                            <td class="text-center"> TREDONE</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> 3</td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
                                            </td>
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
                                            <th class="text-center">School Year</th>
                                            <th class="text-center">Term</th>
                                            <th class="text-center">Academic Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="text-center" ><a href="Athlete's Profile.html""><u style="color: black;">2014-2015</u></a></td>
                                            <td class="text-center"> T1</td>
                                            <td class="text-center statusNotCritical">NOT CRITICAL</td>

                                        </tr>

                                        <tr class="even gradeC">
                                            <td class="text-center"><a href="Athlete's Profile.html"><u style="color: black;">2014-2015</u></a></td>
                                            <td class="text-center"> T2</td>
                                            <td class="text-center statusNotCritical">NOT CRITICAL</td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href="Athlete's Profile.html"><u style="color: black;">2014-2015</u></a></td>
                                            <td class="text-center"> T3</td>
                                            <td class="text-center statusCritical">CRITICAL</td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href="Athlete's Profile.html"><u style="color: black;">2015-2016</u></a></td>
                                            <td class="text-center"> T1</td>
                                            <td class="text-center statusNotCritical">NOT CRITICAL</td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href="Athlete's Profile.html"><u style="color: black;">2015-2016</u></a></td>
                                            <td class="text-center"> T2</td>
                                            <td class="text-center statusNotCritical">NOT CRITICAL</td>

                                        </tr>
                                        <tr class="odd gradeA">
                                            <td class="text-center"><a href="Athlete's Profile.html"><u style="color: black;">2015-2016</u></a></td>
                                            <td class="text-center"> T3</td>
                                            <td class="text-center statusNotCritical">NOT CRITICAL</td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <!-- /.panel-body -->
                        </div>


                        <div id="pte" class="tabcontent">
                          <h3>Planned Term Enrollment </h3>

                          <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Course </th>
                                            <th class="text-center">Unit</th>
                                            <th class="text-center">Grade</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> KASPIL2</td>
                                            <td class="text-center ">3</td>
                                            <td class="text-center"> </td>
                                            <td class="text-center">
                                            <a href="#" class="glyphicon glyphicon-file" style="color: black;"></a>
                                            <a href="#" class="glyphicon glyphicon-plus" style="color: black;"></a>
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
                                            <td class="text-center" ><a href="Athlete's Profile.html""><u style="color: black;">2014-2015</u></a></td>
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

           <div class="row">
           <div class="col-lg-1"></div>
               <div class="col-lg-11" style="padding-left: 680px;">
                    <div>
                       <button" class="btn btn-default" onclick="myFunction()">Save</button>

                            <script>
                            function myFunction() {
                                alert(" Course Added!");
                            }
                            </script>

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
