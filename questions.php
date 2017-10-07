<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type ="text/css">
        #start {
        width:127px;
        height:38px;
        background-color: #0f222f;
	    color: #fff;
	    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-color: #0f222f;
        margin-top: 35px;
	    margin-left: 320px;
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
    <header>
        <?php include('header.php') ?>
    </header>
    <main>
        <section id="signIn" style="width:100%; height:auto; background:url('main.jpg'); background-repeat:no-repeat;">
                <h1 style="font-family:Trebuchet MS; font-size:45px; color:#0f222f; position:relative; top:30%; left:65%;
                                padding:5px 5px;">&curren; TAKE EXAM &curren;</h1>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f22f; position:relative; top:20%; left:61%;">&curren; DO NOT REFESH THE BROWSER ONCE YOUVE LOGGED IN.</p>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f22f; position:relative; top:20%; left:61%;">&curren; REG. NUMBER CAN'T BE USED TWICE.</p>
                <p style="font-family:Trebuchet MS; font-size:18px; color:#0f22f; position:relative; top:20%; left:61%;">&curren; WHEN TIMES RUNS OUT, EXAM IS AUTOMATICALLY SUBMITTED.</p>
                    
                <input class="main-input" id="start" name="submit" type="submit" value="PROCEED" style="margin-left:80%;">
                                 
        </section>
        <section id = "question">
            <div class = "container"> <!--contains the questions-->
                <div class = "question" id ="1"> <!--contains each particular questions-->
                    <p>1. What is your favorite food?</p>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam
                </div>

                <div class = "question" id ="2">
                    <p>2. What is your favorite food?</p>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam
                </div>

                <div class = "question" id ="3">
                    <p>3. What is your favorite food?</p>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam
                </div>

                <div class = "question" id ="4">
                    <p>4. What is your favorite food?</p>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam
                </div>

                <div class = "question" id ="5">
                    <p>5. What is your favorite food?</p>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam <br>
                    <input type="radio" name="option1" id="">Yam
                </div>
            
            </div>

        </section>
        
        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>

        <script type="text/javascript">
                function hide(){
                    $("#question").hide();
                }
        </script> 

        <script type="text/javascript">
            $('#start').click(function(){
                $('#question').show();
                $('#signIn').hide();
            });

        </script>
            

    </main>

    <footer>
        <?php include("footer.php"); ?>
    </footer>
    
</body>
</html>