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
    <link href="/newcbt/css/custom.css" rel="stylesheet" type="text/css">

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

        
        <script src="/newcbt/js/questions.js"></script>
                 

    </main>

    <?php include("includes/footer.php"); ?>
