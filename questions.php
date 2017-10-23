<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    </script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/newcbt/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="/newcbt/js/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="/newcbt/js/bootstrap.min.js"></script>       
    <link href="/newcbt/css/custom.css" rel="stylesheet">

    <style type ="text/css">
        #start{
        width:127px;
        height:38px;
        background-color: #0f222f;
	    color: #fff;
	    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-color: #0f222f;
        margin-top: 35px;
        margin: 35px auto;
        cursor:pointer;
        }
        #calc{
        width:127px;
        height:35px;
        background-color: #0f222f;
	    color: #fff;
	    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-color: #0f222f;
        margin: 0px auto;
        border-radius: 3px;
        cursor:pointer;
        }
        footer {
            position: relative;
            bottom: 2px;
            top: 95%;
        }
        
        #timer{
        position: -webkit-sticky; /*safari*/
        position: sticky;
        top:0;
        width:127px;
        height:38px;
        background-color: #0f222f;
	    color: #fff;
	    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-color: #0f222f;
        margin-top: 35px;
        margin: 35px auto;
        text-align: center;
        font-size: 25px;
        }
        .question{
            font-size: 18px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 35px auto;
        }
        .answerButton{
            background-color: red;
            color: #fff;
            align: center;
            height: 35px;
            
        }
        .btngrp{
            margin: auto;
        }
        .score{
            margin: 7% auto;
            text-align: center;
            font-size: 50px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: #0f222f;
        }

    </style>
</head>
<body>
    <?php include('includes/header.php') ?>
    <main class= "container">
        <section id="signIn" class="row">
            <div class="col-sm-8" >
                <img src="images/main.jpg" height="400" width="auto" style="background-repeat:no-repeat;">
            </div>
            <div class="col-sm-4">
                <h1 style="font-family:Trebuchet MS; font-size:45px; color:#0f222f; padding:5px 5px;">&curren; TAKE EXAM &curren;</h1>    
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f222f;">&curren; DO NOT REFRESH THE BROWSER ONCE YOUVE LOGGED IN.</p>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f222f;">&curren; REG. NUMBER CAN'T BE USED TWICE.</p>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f222f;">&curren; WHEN TIMES RUNS OUT, EXAM IS AUTOMATICALLY SUBMITTED.</p> 
                <input class="main-input" id="start" name="submit" type="submit" value="PROCEED">
            </div>                    
        </section>
        
        <section id = "question" class = "">
            <div class='time' id='timer'><!--contains the timer-->
                <p><span id ='hours'></span>:<span id = 'mins'></span>:<span id = 'secs'></span> </p><br />
            </div>                     
            <div class =''><!--contains the questions-->
                
                <div class = "question" id ="1"> <!--contains each particular questions-->
                    <p>1. What is your favorite food?</p>
                    <input type="radio" name="option1" class="que1 correct">Yam <br>
                    <input type="radio" name="option1" class="que1" id="">Yam <br>
                    <input type="radio" name="option1" class="que1" id="">Yam <br>
                    <input type="radio" name="option1" class="que1" id="">Yam <br>
                </div>

                <div class = "question" id ="2">
                    <p>2. What is your favorite food?</p>
                    <input type="radio" name="option2" class="que2" id="">Yam <br>
                    <input type="radio" name="option2" class="que2 correct">Yam <br>
                    <input type="radio" name="option2" class="que2" id="">Yam <br>
                    <input type="radio" name="option2" class="que2" id="">Yam 
                </div>

                <div class = "question" id ="3">
                    <p>3. What is your favorite food?</p>
                    <input type="radio" name="option3"  class="que3" id="">Yam <br>
                    <input type="radio" name="option3" class="que3" id="">Yam <br>
                    <input type="radio" name="option3" class="que3 correct">Yam <br>
                    <input type="radio" name="option3" class="que3" id="">Yam 
                </div>

                <div class = "question" id ="4">
                    <p>4. What is your favorite food?</p>
                    <input type="radio" name="option4" class="que4" id="">Yam <br>
                    <input type="radio" name="option4" class="que4" id="">Yam <br>
                    <input type="radio" name="option4" class="que4" id="">Yam <br>
                    <input type="radio" name="option4" class="que4 correct">Yam
                </div>

                <div class = "question" id ="5">
                    <p>5. What is your favorite food?</p>
                    <input type="radio" name="option5" class="que5 correct">Yam <br>
                    <input type="radio" name="option5" class="que5" id="">Yam <br>
                    <input type="radio" name="option5" class="que5" id="">Yam <br>
                    <input type="radio" name="option5" class="que5" id="">Yam 
                </div>
            </div>
            <div class='row'>
                <div class="btn-group col-sm-9 btngrp">
                    <a href="#1" class="btn answerButton" id='que1b'>1</a>
                    <a href="#2" class="btn answerButton" id='que2b'>2</a>
                    <a href="#3" class="btn answerButton" id='que3b'>3</a>
                    <a href="#4" class="btn answerButton" id='que4b'>4</a>
                    <a href="#5" class="btn answerButton" id='que5b'>5</a>
                </div>

                <div class='col-sm-3' style=''>
                    <input class="main-input col-md-3" id="calc" name="submit" type="submit" value="SUBMIT">
                     
                </div>
            </div>

        </section>
        <section id='score'>
            <div class='container score'>
                <p>YOUR SCORE IS:</p>
                <p> <span id='percent'></span>%</p>
            </div>
        </section>

        
        
        <script type="text/javascript">
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
        let secs = 0;
        let mins = 2;
        let hr = 1;
        let total = (secs+(mins*60)+(hr*3600))*1000;

        function time(){    
        
            setInterval(function(){

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
                             
                secs--;
                if (secs == -1){                        
                    secs = 59;
                    mins--;
                    if (mins == -1){
                        mins = 59;
                        hr--;
                    }       
                }
                                                       
                }, 1000)                
        };
               
            //hides the questions and score section onload
               $(document).ready(function(){
                   $("#question").hide();
                   $('#score').hide();
               });
                    
        //shows question when proceed is clicked
            $('#start').click(function(){                
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
           
           
           
           
                    
        
        </script>
                   

    </main>

    <?php include("includes/footer.php"); ?>
