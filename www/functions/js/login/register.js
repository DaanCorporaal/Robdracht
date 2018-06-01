var script = document.createElement('script');
script.src = '../../js/jquery.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

var lengthCheck = false;
var sameCheck = false;
var emailCheck = false;

function checkPwLength(e){
    if(e.val().length <= 7){
        return false;
    } else {
        return true;
    }
}
function isSamePw(e , x) {
    if( e.val().length == 0 || x.val().length == 0){
        return false;
    }else if(e.val() === x.val()){
        return true;
    }else {
        return false;
    }
}
function checkIfROCEmail(e) {
    var split = e.split("@");

    if(split[1] === 'leijgraaf.nl' || split[1] == 'rocdeleijgraaf.nl'){
        return true;
    }else {
        return false;
    }
}


$(document).ready(function () {
    $("#password").each(function () {
        $(this).keyup( function () {
            lengthCheck = checkPwLength($('#password'));
            if(lengthCheck === false){
                $('#pwLenghtFalse').fadeIn(0);
                $('#pwLenghtTrue').fadeOut(0);
            }else{
                $('#pwLenghtFalse').fadeOut(0);
                $('#pwLenghtTrue').fadeIn(0);
            }

            sameCheck = isSamePw($('#password') , $('#second_password'))

            if(sameCheck === false){
                $('#pwSameFalse').fadeIn(0);
                $('#pwSameTrue').fadeOut(0);
            }else{
                $('#pwSameFalse').fadeOut(0);
                $('#pwSameTrue').fadeIn(0);
            }
        })
    });
    $("#second_password").each(function () {
        $(this).keyup(function () {
            sameCheck = isSamePw($('#password') , $('#second_password'))

            if(sameCheck === false){
                $('#pwSameFalse').fadeIn(0);
                $('#pwSameTrue').fadeOut(0);
            }else{
                $('#pwSameFalse').fadeOut(0);
                $('#pwSameTrue').fadeIn(0);
            }

        });
    })
    $("#email").each(function () {
        $(this).blur(function () {
            var email = $("#email").val();

            emailCheck = checkIfROCEmail(email);

            if(emailCheck === true){
                $('#mailIsROCFalse').fadeOut(0);
                $('#mailIsROCTrue').fadeIn(0);
            }else {
                $('#mailIsROCFalse').fadeIn(0);
                $('#mailIsROCTrue').fadeOut(0);
            }

        })
    });
});

$(document).keyup(function () {
    if(lengthCheck == true && emailCheck == true && sameCheck == true){
        $('#register').prop('disabled' , false);
    }
});




