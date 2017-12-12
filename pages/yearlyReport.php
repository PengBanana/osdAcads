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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Term', 'Dean Liststers', 'Regular Athletes', 'Critical Athletes', 'Suspended Athletes'],
          ['1', 200, 200, 190, 10],
          ['2', 150, 250, 190, 10],
          ['3', 200, 200, 170, 30]
        ]);

        var options = {
          chart: {
            title: 'Yearly Summary Report on Student Athletes',
            subtitle: 'For School Year: 2017-2018',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions({
			colors: ['#008744', '#0057e7', '#ffa700', '#d62d20'],
			orientation: 'vertical'
		}));
      }
    </script>

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
							<a class="navbar-brand logo" style="padding: 10px 0px 0px 30px" href="index[studentManager].php">
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
															<a href="index[studentManager].php"><i class="glyphicon glyphicon-home" style="color: white"></i> Home</a>
													</li>

													 <li>
														<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="    glyphicon glyphicon-folder-open" style="color: white"></i>    Academic Performance</i></a>
														<ul id="demo1" class="collapse" style="list-style: none;">
															<li><a href="MidtermUpdateList.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Midterm Updates </a></li>
															<li><a href="FinalsUpdateList.php"><i class="glyphicon glyphicon-menu-right"  style="color: white" style ></i> Final Updates </a></li>
														</ul>
														</li>
														<li>
																<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-certificate" style="color: white"></i>    Team </a>
																<ul id="demo4" class="collapse" style="list-style: none;">
																	 <li><a href="ViewTeamAthletes_admin.php" style="font-size: 11px;"><i class="glyphicon glyphicon-menu-right"  style="color: white"></i> View Varsity Teams </a></li>

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
			<div>
				<!-- report header -->
				<center>
				<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4"><img src="Images/OSD.png" height="100px" width='auto' />
				</div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
			<div class="col-lg-12">
			<label>Yearly Summary Report on Student Athletes</label>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
			<label>For School Year: 2016-2017</label>
			</div>
			</div>
			</center>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div>
							<div id="barchart_material" style="width: 650px; height: 200px;"></div>
							<table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">Term 1</th>
                                            <th class="text-center">Term 2</th>
                                            <th class="text-center">Term 3</th>
                                        </tr>
                                    </thead>
									<tr>
									<td class="text-center"><b><span class="glyphicon glyphicon-asterisk" style="color:#008744"><b></span>Dean Listers</b></td>
									<td class="text-center">200</td>
									<td class="text-center">150</td>
									<td class="text-center">200</td>
									</tr>
									<tr>
									<td class="text-center"><b><span class="glyphicon glyphicon-asterisk" style="color:#0057e7"><b></span>Regular Athletes</b></td>
									<td class="text-center">200</td>
									<td class="text-center">250</td>
									<td class="text-center">200</td>
									</tr>
									<tr>
									<td class="text-center"><b><span class="glyphicon glyphicon-asterisk" style="color:#ffa700"><b></span>Critical Athletes</b></td>
									<td class="text-center">190</td>
									<td class="text-center">190</td>
									<td class="text-center">170</td>
									</tr>
									<tr>
									<td class="text-center"><b><span class="glyphicon glyphicon-asterisk" style="color:#d62d20"><b></span>Suspended Athletes</b></td>
									<td class="text-center">10</td>
									<td class="text-center">10</td>
									<td class="text-center">30</td>
									</tr>
									</tbody>
									<table>
									
                            </div>
							

                        </div>
						<center>
						
						<hr><hr></br>
						<label>Page 1 of 1</label></br>
						<label>End of Report</label></br>
						<label>Generated By: Ms. Grace Alhambra</label><br>
						<label><?php echo "Date Generated: ".date("m/d/Y") . "<br>";?></label>
						</center>
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
