//adding input in school history
$(document).ready(function(){
 var i=1;
 $('#add_input').click(function(){
 i++;
 $('#schoolHistoryTable').append('<tr id="row'+i+'">'+'<td class="text-center">'
                                       + '<select class="form-control" name="schoollevel[]">'
                                        + '<option value="grade1">Grade 1</option>'
                                        + '<option value="grade2">Grade 2</option> '
                                        + '<option value="grade3">Grade 3</option>'
                                        + '<option value="grade4">Grade 4</option>'
                                        + '<option value="grade5">Grade 5</option>'
                                        + '<option value="grade6">Grade 6</option>'
                                        + '<option value="grade7">Grade 7</option>'
                                        + '<option value="grade8">Grade 8</option>'
                                        + '<option value="grade9">Grade 9</option>'
                                        + '<option value="grade10">Grade 10</option>'
                                        + '<option value="grade11">Grade 11</option>'
                                        + '<option value="grade12">Grade 12</option>'
                                      + '</select></td>'
                                      + '</td><td class="text-center"><input type="text" class="form-control inputs"  name="name[]"/></td>'
                                      + '<td class="text-center" colspan="2"><input type="text" class="form-control inputs" name="address[]"></td>'
									  + '<td class="text-center" ><input type="number" class="form-control inputs"  name="academicYear[]"/></td>'
                                      + '<td class="text-center"><button type="button" name="remove" id="'+
                                    i+'" class="btn_remove"><i class="glyphicon glyphicon-trash"></i></button></td></tr>');
 });
 $(document).on('click', '.btn_remove', function(){
 var button_id = $(this).attr("id");
 $('#row'+button_id+'').remove();
 });
 $('#submit').click(function(){
 $.ajax({
 url:"insert.php",
 method:"POST",
 data:$('#add_me').serialize(),
 success: function(data)
 {
 alert(data);
 $('#add_me')[0].reset();
 }
 });
 });
});



//adding input in collegiate
$(document).ready(function(){
 var i=1;
 $('#add_input2').click(function(){
 i++;
 $('#collegeTable').append('<tr id="row'+i+'""><td class="text-center"><input type="number" class="form-control inputs" name="collegelevel[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="collegedegree[]"></td>'
                                      + '</td><td class="text-center"><input type="text" class="form-control inputs"  name="university[]"/></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="univAddress[]"></td>'
                                      + '<td class="text-center"  colspan="2"><input type="number" class="form-control inputs"  name="academicYear[]"/></td>'
                                      + '<td class="text-center"><button type="button" name="remove" id="'+
                                    i+'" class="btn_remove"><i class="glyphicon glyphicon-trash"></i></button></td></tr>');
 });
 $(document).on('click', '.btn_remove', function(){
 var button_id = $(this).attr("id");
 $('#row'+button_id+'').remove();
 });
 $('#submit').click(function(){
 $.ajax({
 url:"insert.php",
 method:"POST",
 data:$('#add_me').serialize(),
 success: function(data)
 {
 alert(data);
 $('#add_me')[0].reset();
 }
 });
 });
});


//adding competition
//adding input in collegiate
$(document).ready(function(){
 var i=1;
 $('#add_input3').click(function(){
 i++;
 $('#achievementsTable').append('<tr id="row'+i+'"><td class="text-center"><input type="text" class="form-control inputs" name="tournament[]"></td>'
                                      + '<td class="text-center"><input type="date" class="form-control inputs" name="tourDate[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="venue[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="eventName[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="standing[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="type[]"></td>'
                                      + '<td class="text-center"><button type="button" name="remove" id="'+
                                    i+'" class="btn_remove"><i class="glyphicon glyphicon-trash"></i></button></td></tr>');
 });
 $(document).on('click', '.btn_remove', function(){
 var button_id = $(this).attr("id");
 $('#row'+button_id+'').remove();
 });
 $('#submit').click(function(){
 $.ajax({
 url:"insert.php",
 method:"POST",
 data:$('#add_me').serialize(),
 success: function(data)
 {
 alert(data);
 $('#add_me')[0].reset();
 }
 });
 });
});



$(document).ready(function(){
 var i=1;
 $('#add_input4').click(function(){
 i++;
 $('#pec').append('<tr id="row'+i+'">'+ "<td><select class=\"form-control inputs\" name=\"course[]\"><option value=\"ANMODEL\">ANMODEL : An Model</option><option value=\"APP-DEV\">APP-DEV : Applications Development</option><option value=\"ARCH-OS\">ARCH-OS : Architecture of Operating Systems</option><option value=\"ARCPLAN\">ARCPLAN : Architecture Planning</option><option value=\"DASTAPP\">DASTAPP : Data Structures in Applications</option><option value=\"DB-ADMI\">DB-ADMI : Database Administration</option><option value=\"ENGLCOM\">ENGLCOM : English Communications</option><option value=\"ENGLRES\">ENGLRES : English Research</option><option value=\"FILDLAR\">FILDLAR : Filipino DLAR</option><option value=\"FILKOMU\">FILKOMU : Komunikasyon sa Filipino</option><option value=\"FIMODIT\">FIMODIT : Finance and MODIT</option><option value=\"FITWELL\">FITWELL : Fitness and Wellness</option><option value=\"FORMDEV\">FORMDEV : Formation and Development</option><option value=\"FTDANCE\">FTDANCE : Fitness in Dance</option><option value=\"FTSPORT\">FTSPORT : Fitness in Sports</option><option value=\"FTTEAMS\">FTTEAMS : Fitness in Team Sports</option><option value=\"GREATWK\">GREATWK : Great Works</option><option value=\"HUMAART\">HUMAART : Art Appreciation</option><option value=\"HUMALIT\">HUMALIT : Literature Appreciation</option><option value=\"INTFILO\">INTFILO : Introduction to Philosophy</option><option value=\"INTPRG1\">INTPRG1 : Introduction to Programming 1</option><option value=\"INTPRG2\">INTPRG2 : Introduction to Programming 2</option><option value=\"INTR-DB\">INTR-DB : Intro to Databases</option><option value=\"INTR-IT\">INTR-IT : Introduction to IT</option><option value=\"INTR-NW\">INTR-NW : Introduction to Networks</option><option value=\"INTRSEC\">INTRSEC : Introduction to Securities</option><option value=\"IPERSEF\">IPERSEF : iPersonal Effectiveness</option><option value=\"ITELEC1\">ITELEC1 : IT Elective 1</option><option value=\"ITELEC2\">ITELEC2 : IT Elective 2</option><option value=\"ITELEC3\">ITELEC3 : IT Elective 3</option><option value=\"ITELEC4\">ITELEC4 : IT Elective 4</option><option value=\"ITETHIC\">ITETHIC : Ethics in IT</option><option value=\"ITMATH1\">ITMATH1 : IT Math 1</option><option value=\"ITMATH2\">ITMATH2 : IT Math 2</option><option value=\"ITMATH3\">ITMATH3 : IT Math 3</option><option value=\"ITMETHD\">ITMETHD : IT Methodologies</option><option value=\"ITORMGT\">ITORMGT : IT Organization and Management</option><option value=\"KASPIL1\">KASPIL1 : Kasaysayan ng Pilipinas 1</option><option value=\"KASPIL2\">KASPIL2 : Kasaysayan ng Pilipinas 2</option><option value=\"LASARE1\">LASARE1 : La Sallian Recollection 1</option><option value=\"LASARE2\">LASARE2 : La Sallian Recollection 2</option><option value=\"LASARE3\">LASARE3 : La Sallian Recollection 3</option><option value=\"LBYENVC\">LBYENVC : Chemsitry Lab</option><option value=\"LBYENVP\">LBYENVP : Physics Lab</option><option value=\"LOGPROG\">LOGPROG : Logic Formulation in Programming</option><option value=\"NET-DES\">NET-DES : Network Designs</option><option value=\"NSTP-01\">NSTP-01 : National Services Training Program 1</option><option value=\"NSTP-02\">NSTP-02 : National Services Training Program 2</option><option value=\"NSTP101\">NSTP101 : National Services Training Program 101</option><option value=\"PERSEF1\">PERSEF1 : Personal Effetiveness</option><option value=\"PERSEF2\">PERSEF2 : Personal Effectiveness 2</option><option value=\"PRCINFO\">PRCINFO : Practicum</option><option value=\"PROBSTA\">PROBSTA : Probability and Statistics</option><option value=\"SAS1000\">SAS1000 : SAS 1000</option><option value=\"SCIENVB\">SCIENVB : Science in Biologi</option><option value=\"SCIENVC\">SCIENVC : Science in Chemistry</option><option value=\"SCIENVP\">SCIENVP : Science in Physics</option><option value=\"SOCTEC1\">SOCTEC1 : Social Technologies 1</option><option value=\"SOCTEC2\">SOCTEC2 : Social Technologies 2</option><option value=\"SPECSYS\">SPECSYS : Specialized Systems</option><option value=\"SPEECOM\">SPEECOM : Speech Communications</option><option value=\"SPELEC1\">SPELEC1 : Special Elective 1</option><option value=\"SPELEC2\">SPELEC2 : Special Elective 2</option><option value=\"SPELEC3\">SPELEC3 : Special Elective 3</option><option value=\"SWENGG\">SWENGG : Software Engineering</option><option value=\"SYSINTG\">SYSINTG : Systems Integration</option><option value=\"SYSMGMT\">SYSMGMT : Systems Management</option><option value=\"SYSTANA\">SYSTANA : Systems Analysis</option><option value=\"SYSTDES\">SYSTDES : System Design</option><option value=\"SYSTIMP\">SYSTIMP : Systems Implementation</option><option value=\"TECHMGT\">TECHMGT : Technology Management</option><option value=\"THS-IT1\">THS-IT1 : Thesis 1</option><option value=\"THS-IT2\">THS-IT2 : Thesis 2</option><option value=\"TREDFOR\">TREDFOR : Theology Four</option><option value=\"TREDONE\">TREDONE : Theology One</option><option value=\"TREDTRI\">TREDTRI : Theology Three</option><option value=\"TREDTWO\">TREDTWO : Theology Two</option><option value=\"WEBTECH\">WEBTECH : Web Technologies</option><option value=\"WIR-TEC\">WIR-TEC : Wireless Technologies</option></select></td>"
                                      + '<td class="text-center"><input type="number" class="form-control inputs" name="academicYear[]"></td>'
                                      + '<td class="text-center"><select class="form-control inputs" name="term[]"><option value="T1">Term 1</option><option value="T2">Term 2</option><option value="T3">Term 3</option></select></td>'
                                      + '<td class="text-center"><button type="button" name="remove" id="'+
                                    i+'" class="btn_remove"><i class="glyphicon glyphicon-trash"></i></button></td></tr>');
 });
 $(document).on('click', '.btn_remove', function(){
 var button_id = $(this).attr("id");
 $('#row'+button_id+'').remove();
 });
 $('#submit').click(function(){
 $.ajax({
 url:"insert.php",
 method:"POST",
 data:$('#add_me').serialize(),
 success: function(data)
 {
 alert(data);
 $('#add_me')[0].reset();
 }
 });
 });
});
