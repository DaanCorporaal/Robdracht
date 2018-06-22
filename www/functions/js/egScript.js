
// database values
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


pwChangeSession = localStorage.getItem('pwChangeSession');

// new password variables
if(pwChangeSession == null || pwChangeSession == false){
    var oldDbPass;
    var oldDbSalt;
    var newPass;
    var newRePass;
    var typedOldPw;
    var pwChangeSession
}


$(document).ready(function () {
    if(pwChangeSession == 'true'){
        $('#pwChangeForm').fadeIn(0);

    }else {
        $('#egForm').fadeIn(0);
    }
    pwChangeSession = false;
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
            oldDbPass = data[5];
            oldDbSalt = data[6];


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
function changePW() {
    $('#egForm').fadeOut(0);
    $('#pwChangeForm').fadeIn(0);
    pwChangeSession = true;
    console.log(pwChangeSession);
    localStorage.setItem('pwChangeSession', pwChangeSession);
}
function setNewPW(event) {
    event.preventDefault();

    var newPass = $('#fNewPw').val();
    var typedOldPw = $('#oldPw').val();
    $.ajax({
        url: '../functions/php/formFunctions/changePw.php',
        type: 'post',
        data: {oldDBSalt: oldDbSalt,
            oldDBPw: oldDbPass,
            newPw: newPass,
            oldPw: typedOldPw
        } ,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if(data == 'success'){
                pwChangeSession = false;
                localStorage.setItem('pwChangeSession', pwChangeSession);
                $('#egForm').fadeIn(0);
                $('#pwChangeForm').fadeOut(0);
            }else if(data == 'notSameError'){
                $('#oldPwErr').fadeIn(0);
            }

        },
        error: function () {
            console.log('error');
        }
    });
}
function cancel(e) {
    e.preventDefault();
   // pwChangeSession = false;
    $('#egForm').fadeIn(0);
    $('#pwChangeForm').fadeOut(0);
   // localStorage.setItem('pwChangeSession', pwChangeSession);

}
function leaveFunction(e) {
        if(performance.navigation.type == PerformanceNavigation.TYPE_RELOAD || e.keyCode == 116){
            console.log("refresh button is clicked");
            pwChangeSession = true;
            localStorage.setItem('pwChangeSession', pwChangeSession);
        }else {

            if(pwChangeSession == true){
                console.log('Normal close');
              //  pwChangeSession = false;
              //  localStorage.setItem('pwChangeSession', pwChangeSession);
               // return false;
            } else {
                console.log(pwChangeSession);
            }
        }

}