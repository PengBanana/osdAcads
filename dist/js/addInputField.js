//adding input in school history
$(document).ready(function(){
 var i=1;
 $('#add_input').click(function(){
 i++;
 $('#schoolHistoryTable').append('<tr id="row'+i+'">'+'<td class="text-center">'
                                       + '<select class="form-control">'
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
                                      + '<td class="text-center" ><input type="text" class="form-control inputs"  name="schoolYear[]"/></td>'
                                      + '<td class="text-center" colspan="2"><input type="text" class="form-control inputs" name="address[]"></td>'
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
 $('#collegeTable').append('<tr id="row'+i+'"><td class="text-center"><input type="text" class="form-control inputs" name="degree[]"></td>'
                                      + '</td><td class="text-center"><input type="text" class="form-control inputs"  name="univeristy[]"/></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="univAddress[]"></td>'
                                      + '<td class="text-center"  colspan="2"><input type="text" class="form-control inputs"  name="academicYear[]"/></td>'
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
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="tourDate[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="venue[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="eventName[]"></td>'
                                      + '<td class="text-center"><input type="text" class="form-control inputs" name="standing[]"></td>'
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
