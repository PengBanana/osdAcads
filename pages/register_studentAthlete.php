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
											<h3>Step 2 out of 4: Personal Information</h3>
										</div>
                    <div class="panel-body">
						<form method="post">
                            <fieldset>
															<div class="dataTable_wrapper">
		                            <div class="row">
		                                <div class="col-lg-4">
		                                  <div class="form-group">
		                                      <label class="required"> Last Name: </label>
		                                      <input type="text" class="form-control inputs" name="lastname" required />
		                                  </div>
		                                </div>
		                                <div class="col-lg-4">
		                                  <div class="form-group">
		                                      <label class="required"> Middle Name: </label>
		                                      <input type="text" class="form-control inputs" name="middlename">
		                                  </div>
		                                </div>
		                                <div class="col-lg-4">
		                                  <div class="form-group">
		                                      <label class="required"> First Name: </label>
		                                      <input type="text" class="form-control inputs" name="firstname" required />
		                                  </div>
		                                </div>
		                            </div>

		                                <div class="form-group">
		                                    <label class="required">ID Number: </label>
		                                    <input type="text" class="form-control inputs" name="idnum"/>
		                                </div>

		                                <div class="form-group">
		                                    <label class="required">Degree Program:</label>
		                            <select class="form-control inputs" name="degree">';
		                            <?php
		                            $query="SELECT * FROM acadsosd.degree;";
		                            $result=mysqli_query($dbc, $query);
		                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		                            $degreeCode=$row['degreeCode'];
		                            $degreeName=$row['degreeName'];
		                            $departmentCode=$row['departmentCode'];
		                            echo '<option value="'.$degreeCode.'">'.$degreeCode.' : '.$degreeName.'-'.$departmentCode.'</option>';
		                            }
		                                echo '</select>
		                            </div>
		                                <div class="form-group">
		                            <label>Sport: </label>
		                                    <select class="form-control inputs" name="sport">';
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
		                            ?>
		                            </select>
		                            </div>


		                            <div class="form-group">
		                            <label>Religion: </label>
                                <select class="form-control inputs" name="bloodtype" required>
		                              <option></option>
		                              <option value="">Christian Catholic</option>
		                                <option value="">Roman CAtholic</option>
                                    <option value="">Muslim</option>
                                    <option value="">Hindu</option>
                                    <option value="">Buddhist</option>
		                            </select>


		                            </div>

		                            <div class="form-group">
		                            <label class="required">Weight: </label>
		                            <input type="text" class="form-control inputs" name="weight" placeholder="lbs" required />
		                            </div>

		                            <div class="form-group">
		                            <label class="required">Height: </label>
		                            <input type="text" class="form-control inputs" name="height" placeholder="cm" required />
		                            </div>

		                            <div class="form-group">
		                            <label class="required">Blood Type:</label>
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
		                            <label class="required">DLSU e-mail address: </label>
		                            <input type="text" class="form-control inputs" name="email" required />
		                            </div>

		                            <div class="form-group">
		                            <label>Alternate e-mail address: </label>
		                            <input type="text" class="form-control inputs" name="alternateemail"/>
		                            </div>


		                            <div class="form-group">
		                            <label class="required">Address Line 1: </label>
		                            <input text="text" class="form-control inputs" name="address1" required/>
		                            </textarea>
		                            </div>
		                            <div class="form-group">
		                            <label class="required">Address Line 2: </label>
		                            <input text="text" class="form-control inputs" name="address2" required/>
		                            </textarea>
		                            </div>
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
		                            <label class="required">Emergency Contact Name: </label>
		                            <input type="text" name="emergencyname" class="form-control inputs" required />
		                            <label class="required">Emergency Contact Number: </label>
		                            <input type="text" name="emergencynumber" class="form-control inputs" required />
		                            <label>Relationship: </label>
		                            <input text="text" class="form-control inputs" name="emergencyrelationship" required/>
		                            </div>
		                          </div>
                            </fieldset>
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
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
