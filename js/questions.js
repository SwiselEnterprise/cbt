//this calculates the score when the submit button is clicked
function submit(){
    $('#question').hide();
    $('#signIn').hide();
    $('#score').show();
    correct = $('input:radio.correct:checked').length;//gets length of correctly checked radio buttons
    number = $('.question').length;//gets total number of questions
    $('#percent').text((correct/number)*100);//converts to percentage and displays
    };

//for the timer
let secs = 10;
let mins = 0;
let hr = 0;
let total = (0.5+secs+(mins*60)+(hr*3600))*1000;
if (secs.toString().length == 1){
                secs = '0' + secs;
            }
        if (mins.toString().length == 1 ){
                mins = '0' + mins;
        }
        if (hr.toString().length == 1 ){
            hr = '0' + hr;}

function time(){    

    setInterval(function(){
        $('#secs').text(secs);
        $('#mins').text(mins);
        $('#hours').text(hr);                
                     
        secs--;
        if (secs == -1){                        
            secs = 59;
            mins--;
            if (mins == -1){
                mins = 59;
                hr--;
            }       
        }
        if (secs.toString().length == 1){
                secs = '0' + secs;
            }
        if (mins.toString().length == 1 ){
                mins = '0' + mins;
        }
        if (hr.toString().length == 1 ){
            hr = '0' + hr;
        }
        $('#secs').text(secs);
        $('#mins').text(mins);
        $('#hours').text(hr);
        
                                               
        }, 1000)                
};
       
    //hides the questions and score section onload
       $(document).ready(function(){
           $("#question").hide();
           $('#score').hide();
       });
            
//shows question when proceed is clicked
    $('#start').click(function(){
        $('#secs').text(secs);
        $('#mins').text(mins);
        $('#hours').text(hr);               
        time(); //starts timer on proceed click                
        $('#question').show();
        $('#signIn').hide();
        $('#score').hide();
        //calls the submit function when time's up
        setTimeout(function() {
            submit();                    
        }, total);
        
    });

    //calls the submit function when #calc is clicked
   $('#calc').click(function(){
       submit();
   });
   
   //changes colour of the buttongroup when a question has been answered.
   $('input:radio').click(function(){
        if ($('this:checked')){
            e = '#'+$(this).attr('class').slice(0,4)+'b';
            console.log(e);
        $(e).css('background-color','#0f222f');
    }
   })
   