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
?>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
        require_once('../osd_connect.php');
        $selectAllStudentManagers = "SELECT SM.teamCode, CONCAT(u.lastName,', ', u.firstName) as 'smName', t.teamName
                                     FROM user u JOIN studentmanager sm  ON u.idNumber = sm.idNumber
                                     JOIN team t ON sm.teamCode = t.sportCode WHERE SM.managerCode = 1";
?>

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
                <div class="col-lg-12">
                    <h1 class="page-header">Student Managers</h1>

                <div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Managers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Assigned Team</th>
                                            <th class="text-center">Deactivate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($dbc, $selectAllStudentManagers);
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            $SPORTCODE = $row['teamCode'];
                                            $TEAMNAME = $row['teamName'];
                                            echo'<tr class="odd gradeX">
                                            <td class="text-center" ><a href="Athlete\'s Profile.html"><u style="color: black;">'.$row['smName'].'</u></a></td>
                                            <td><form action="viewTeamAthletes.php" method="post">
                                            <div align="center"><input type="hidden" name="teamCode" value="'.$SPORTCODE.'"><input type="submit" value="'.$SPORTCODE.' - '.$TEAMNAME.'" class="btn btn-link" name="submit"></div>
                                            </form></td>
                                            <td class="text-center">
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalReassign">Re-assign</button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalDeactivate">Deactivate</button>
                                            </td>
                                            </tr>';
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <!-- Modal Decline-->
                                <div class="modal fade" id="myModalDeactivate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Deactivate Account</h4>
                                      </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to deactivate this account?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Deactivate</button>
                                    </div>
                                    </div>
                                  <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal Decline-->

                                <!--reassign modal-->
                                <div class="modal fade" id="myModalReassign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Re-assign Student Manager</h4>
                                      </div>
                                    <div class="modal-body">
                                      <label>Sport Code</label>
                                      <select class="form-control"></select>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                                    </div>
                                  <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <!--end modal reassign-->



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
