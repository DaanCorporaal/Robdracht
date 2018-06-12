var dbFName = $('#fName').val();;
var dbLName = $('#lName').val();
var dbPrefix = $('#prefix').val();
var dbEmail = $('#Email').val();
var dbClass = $('#class').val();
var dbGroup = $('#group').val();
var dbInternComp = $('#internComp').val();
var dbInternLead = $('#internLead').val();
var dbInternTeacher = $('#internTeacher').val();
var dbInternPlace = $('#internPlace').val();


 $(document).ready(function () {

     console.log(dbEmail);
     $.ajax({
        url: '../functions/php/formFunctions/egGetData.php',
        dataType: 'json',
        type: 'post' ,
        data: {email: dbEmail} ,
        success: function (data) {

            dbFName = data[1];
            dbLName = data[3];
            dbPrefix = data[2];
            dbEmail = data[4];
            dbClass = data[9];
            dbGroup = data[10];
            dbInternComp = data[11];
            dbInternPlace = data[12];
            dbInternTeacher = data[13];
            dbInternLead = data[14];

            $('#fName').val(dbFName);
            $('#lName').val(dbLName);
            $('#prefix').val(dbPrefix);
            $('#Email').val(dbEmail);
            $('#class').val(dbClass);
            $('#group').val(dbGroup);
            $('#internComp').val(dbInternComp);
            $('#internPlace').val(dbInternPlace);
            $('#internLead').val(dbInternLead);
            $('#internTeacher').val(dbInternTeacher);
        },
        error: function () {
            console.log('error');
        }
     });
 })
 function resetAllValues() {
     $('#fName').val(dbFName);
     $('#lName').val(dbLName);
     $('#prefix').val(dbPrefix);
     $('#Email').val(dbEmail);
     $('#class').val(dbClass);
     $('#group').val(dbGroup);
     $('#internComp').val(dbInternComp);
     $('#internPlace').val(dbInternPlace);
     $('#internLead').val(dbInternLead);
     $('#internTeacher').val(dbInternTeacher);
 }
function resetPersonalValues() {
    $('#fName').val(dbFName);
    $('#lName').val(dbLName);
    $('#prefix').val(dbPrefix);
    $('#Email').val(dbEmail);
    $('#class').val(dbClass);
    $('#group').val(dbGroup);

}
function resetInternshipValues() {
    $('#internComp').val(dbInternComp);
    $('#internPlace').val(dbInternPlace);
    $('#internLead').val(dbInternLead);
    $('#internTeacher').val(dbInternTeacher);
}