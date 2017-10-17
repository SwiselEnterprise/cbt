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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type ="text/css">
        #start {
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
        footer {
            position: relative;
            bottom: 2px;
            top: 95%;
        }

    </style>
</head>
<body onload = "hide()">
    <header class="">
        <?php include('includes/header.php') ?>
    </header>
    <main class= "container">
        <section id="signIn" class="row">
            <div class="col-sm-8" >
                <img src="main.jpg" height="400" width="auto" style="background-repeat:no-repeat;">
            </div>
            <div class="col-sm-4">
                <h1 style="font-family:Trebuchet MS; font-size:45px; color:#0f222f; padding:5px 5px;">&curren; TAKE EXAM &curren;</h1>    
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f222f;">&curren; DO NOT REFRESH THE BROWSER ONCE YOUVE LOGGED IN.</p>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f222f;">&curren; REG. NUMBER CAN'T BE USED TWICE.</p>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f222f;">&curren; WHEN TIMES RUNS OUT, EXAM IS AUTOMATICALLY SUBMITTED.</p> 
                <input class="main-input" id="start" name="submit" type="submit" value="PROCEED">
            </div>                    
        </section>
        <section id = "question">
            <div class = "container"> <!--contains the questions-->
                <div class = "question" id ="1"> <!--contains each particular questions-->
                    <p>1. What is your favorite food?</p>
                    <input type="radio" name="option1" class="correct">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam
                </div>

                <div class = "question" id ="2">
                    <p>2. What is your favorite food?</p>
                    <input type="radio" name="option2" id="">Yam <br>
                    <input type="radio" name="option2" class="correct">Yam <br>
                    <input type="radio" name="option2" id="">Yam <br>
                    <input type="radio" name="option2" id="">Yam <br>
                </div>

                <div class = "question" id ="3">
                    <p>3. What is your favorite food?</p>
                    <input type="radio" name="option3" id="">Yam <br>
                    <input type="radio" name="option3" id="">Yam <br>
                    <input type="radio" name="option3" class="correct">Yam <br>
                    <input type="radio" name="option3" id="">Yam <br>
                </div>

                <div class = "question" id ="4">
                    <p>4. What is your favorite food?</p>
                    <input type="radio" name="option4" id="">Yam <br>
                    <input type="radio" name="option4" id="">Yam <br>
                    <input type="radio" name="option4" id="">Yam <br>
                    <input type="radio" name="option4" class="correct">Yam<br>
                </div>

                <div class = "question" id ="5">
                    <p>5. What is your favorite food?</p>
                    <input type="radio" name="option5" class="correct">Yam <br>
                    <input type="radio" name="option5" id="">Yam <br>
                    <input type="radio" name="option5" id="">Yam <br>
                    <input type="radio" name="option5" id="">Yam <br>
                </div>
            
            </div>
        
            <div class="btn-group">
                <a href="#1" class="btn btn-primary">1</a>
                <a href="#2" class="btn btn-primary">2</a>
                <a href="#3" class="btn btn-primary">3</a>
                <a href="#4" class="btn btn-primary">4</a>
                <a href="#5" class="btn btn-primary">5</a>
            </div>

            <div>
                <button style="float:right;" id='calc'>Submit</button>
            </div>

        </section>
        <section id='score'>
            <div class='container'>
                <p>Your Score is:</p>
                <p> <span id='percent'></span>%</p>
            </div>
        </section>
        <!--this hides the question when the page loads-->
        <script type="text/javascript">
               $(document).ready(function(){
                   $("#question").hide();
                   $('#score').hide();
               });
                    
        </script> 
        <!--shows question when proceed is clicked-->
        <script type="text/javascript">
            $('#start').click(function(){
                $('#question').show();
                $('#signIn').hide();
                $('#score').hide();
            });
        </script>

        <script>
            $('#calc').click(function(){
                $('#question').hide();
                $('#signIn').hide();
                $('#score').show();
                correct = $('input:radio.correct:checked').length;
                number = $('.question').length;
                $('#percent').text((correct/number)*100);
            });

        </script>
            

    </main>

    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
    
</body>
</html>