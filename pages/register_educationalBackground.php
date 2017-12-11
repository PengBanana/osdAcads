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

<body id="backgroundImage">

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-top:10%">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="Images/OSDLOZADA.png" height="100px" width='auto' />
                    </div>
										<div class="form-group">
											<h3>Step 3 out of 4: Educational Background & Athletic Achievements</h3>
										</div>
                    <div class="panel-body">
						<form method="post">
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
                                        <td class="text-center">
                                          <select class="form-control name" name="schoollevel[]">
                                           <option value="Grade 1">Grade 1</option>
                                           <option value="Grade 2">Grade 2</option>
                                           <option value="Grade 3">Grade 3</option>
                                           <option value="Grade 4">Grade 4</option>
                                           <option value="Grade 5">Grade 5</option>
                                           <option value="Grade 6">Grade 6</option>
                                           <option value="Grade 7">Grade 7</option>
                                           <option value="Grade 8">Grade 8</option>
                                           <option value="Grade 9">Grade 9</option>
                                           <option value="Grade 10">Grade 10</option>
                                           <option value="Grade 11">Grade 11</option>
                                           <option value="Grade 12">Grade 12</option>
                                         </select> </td>
                                        <td class="text-center"><input type="text" class="form-control inputs" name="name[]"></td>
                                        <td class="text-center"><input type="text" class="form-control inputs" name="address[]"></td>
                                        <td class="text-center" colspan="2"><input type="number" class="form-control inputs" name="academicYear[]"></td>
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
                    <th class="text-center">Year Level</th>
                                          <th class="text-center">Degree</th>
                                          <th class="text-center"> Name University</th>
                                          <th class="text-center"> Address University</th>
                                          <th class="text-center" colspan="2"> School Year Attended </th>
                                          <th class="text-center">Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="odd gradeX">
                  <td class="text-center"><input type="number" class="form-control inputs" name="collegelevel[]"></td>
                                      <td class="text-center"><input type="text" class="form-control inputs" name="collegedegree[]"></td>
                                      <td class="text-center"><input type="text" class="form-control inputs" name="university[]"></td>
                                      <td class="text-center"><input type="text" class="form-control inputs" name="univAddress[]"></td>
                                      <td class="text-center" colspan="2"><input type="number" class="form-control inputs" name="academicYear[]"></td>
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
                                              <th class="text-center">Tournament Name</th>
                                              <th class="text-center">Date</th>
                                              <th class="text-center">Venue</th>
                                              <th class="text-center">Event</th>
                                              <th class="text-center">Standing</th>
                                              <th class="text-center">Type</th>
                                              <th class="text-center">Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX">
                                          <td class="text-center"><input type="text" class="form-control inputs" name="tournament[]"></td>
                                          <td class="text-center"><input type="date" class="form-control inputs" name="tourDate[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="venue[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="eventName[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="standing[]"></td>
                                          <td class="text-center"><input type="text" class="form-control inputs" name="type[]"></td>
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

                              <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
              <input type="hidden" name="sql1" value="" />
              <input type="hidden" name="sql2" value="" />
              <input type="hidden" name="id" value="" />

                            </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                  <button type="submit" class="btn btn-default" type="submit" name="registerManager">Cancel</button>
                                   <button type="submit" class="btn btn-success" type="submit" name="registerManager" id="registerBtn">Next Step<i class=" 	glyphicon glyphicon-chevron-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../dist/js/addInputField.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
