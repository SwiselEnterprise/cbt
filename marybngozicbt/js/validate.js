
$('#validate').hide();
$('#validError').hide();
$('#validOk').hide();
$('#sub').hide();

$(function(){
    $('#validBtn').click(function(){

        var userInput = $('#userInput').val();
        var captcha = $('#validate').text();
       
     //   console.log(userInput);
     //   console.log(captcha);
        if (userInput.toUpperCase() == captcha) {
            $('#validBtn').hide();
            $('#validError').hide();
           $('#validOk').show();
            $('#sub').show();
        } else {
            $('#validError').show();
        }
    });

});