$(document).ready(function () {

    $.ajax({
       url: '../functions/php/formFunctions/egCheckIfSet.php',
       type: 'post',
       dataType: 'json',
       success: function (data) {
            if(data == true){
                $('#notify').fadeIn(0);
            }else{
                $('#notify').fadeOut(0);
            }
       } ,
       error: function () {
           console.log('Noah your php code sux');
       }
    });

});