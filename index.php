<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CBT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                                                        
                                                        <!--CSS STYLING FOR THE REGISTARTION FORM-->
        <style>
 form {
    padding: 25px 25px;
    margin:0 auto;
    width:800px;
    height: auto;
	margin-left: 300px;
    position:relative;
    margin-top:100px;
    letter-spacing:2px;
}
.main-input, textarea {
    margin-left: 20px;
    width:350px;
    height:20px;
    background:#fff;
    border: 1px solid #0f222f;
    padding:8px;
    margin-top:20px;
    font-size:0.9em;
    color:#0f222f;
	font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

textarea {
	height:150px;
	background: #fff;
}

.main-input:focus, textarea:focus {
    border:3px solid #0f222f;
}
#label-main {
    margin-left: 20px;
    color: #0f222f;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;   
}
#label-main2 {
    margin-left: 130px;
    color: #0f222f;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;   
}
label {
    color: #0f222f;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
#submit {
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
#q {
    margin-left: 120px;
    color: maroon
}
#r {
    margin-left: 200px;
}
        </style>
    </head>
    <body>
                                                        <!--HOME PAGE-->
        <header id="head" style="width:100%; height:550px; background:url('p.jpg');">
            <h1 style="font-family:Trebuchet MS; color:#fff; font-size:60px;
                       text-align:center; position:relative; top:10%">THE CBT MAIDEN PROJECT</h1>
           
            <p style="position:relative; top:5%; text-align:center;
                      font-family:arial; color:#fff; font-size: 20px;">&curren; A NIFFTY WAY TO TAKE EXAMS &curren;</p>
            
            <a id="reg" href="#signUp" style="text-decoration:none;"><p style="position:relative; top:30%; left:40%; text-align:center; font-family:Trebuchet MS; width:300px;
                               font-size:20px; color:#fff; background:seagreen; padding:10px 10px;">REGISTER</p></a> 
            
            <a id="exam" href="#signIn" style="text-decoration:none;"><p style="position:relative; top:30%; left:40%; text-align:center; font-family:Trebuchet MS; width:300px;
                                font-size:20px; color:#fff; background:darkcyan; padding:10px 10px;">TAKE EXAM</p></a>
        </header>

        <main>
                                                                 <!--REGISTRATION FORM--> 
            <section id="signUp" style="width:100%; height:auto;">
                                                                  
                 <h1 style="font-family:Trebuchet MS; font-size:45px; color:#0f222f; text-align:center; padding:5px 5px;">&curren; REGISTER &curren;</h1>
            
                 <form method="post"  action="reg.php">
                     <input class="main-input" id="name" name="name" placeholder="NAME: John" type="text" required>
                     <input class="main-input" id="surname" name="sname" placeholder="SURNAME: Doe" type="text" required><br><br> 
                
                     <input class="main-input" id="email" name="email" placeholder="EMAIL: johndoe@example.com" type="email" required>
                     <input class="main-input" id="phone" name="phone" placeholder="PHONE NUMBER" type="text" required><br><br>

                     <label id="q">What is 2! + 2!? [Just To Make Sure You're HomoSapien]</label>
			         <input id="r" class="main-input" name="human" placeholder="input your answer here" type="number"><br><br>
                
                    <input class="main-input" id="submit" name="submit" type="submit" value="Submit">
                 </form>
             </section>
                                                                    <!--LOGIN PAGE-->
             <section id="signIn" style="width:100%; height:auto; background:url('main.jpg'); background-repeat:no-repeat;">
                    <h1 style="font-family:Trebuchet MS; font-size:45px; color:#0f222f; position:relative; top:30%; left:65%;
                                padding:5px 5px;">&curren; TAKE EXAM &curren;</h1>
                    <p style="font-family:Trebuchet MS; font-size:18px; color:#0f22f; position:relative; top:20%; left:61%;">&curren; DO NOT REFESH THE BROWSER ONCE YOUVE LOGGED IN.</p>
                    <p style="font-family:Trebuchet MS; font-size:18px; color:#0f22f; position:relative; top:20%; left:61%;">&curren; REG. NUMBER CAN'T BE USED TWICE.</p>
                    <p style="font-family:Trebuchet MS; font-size:18px; color:#0f22f; position:relative; top:20%; left:61%;">&curren; WHEN TIMES RUNS OUT, EXAM IS AUTOMATICALLY SUBMITTED.</p>

                    <form method="post"  action="login.php">
                         <input id="r" class="main-input" name="thereg" placeholder="INPUT REG. NUMBER AND PROCEED TO EXAM" type="text" required maxlength="9" style="margin-left:65%;">
                         
                         <input class="main-input" id="submit" name="submit" type="submit" value="PROCEED" style="margin-left:80%;">
                    </form>
                 
             </section>  
          
        </main>

        <script src="jquery-3.1.1.min.js" type="text/javascript"></script>

                                                                <!--THIS SCRIPT BELOW HIDES THE REGISTRATION PAGE AND LOGIN PAGE ON PAGE LOAD--> 
        <script type="text/javascript">
                $(document).ready(function(){
                    $('#signUp').hide();
                    $('#signIn').hide();
                    });
        </script>
                                                                <!--THIS SCRIPT BELOW TRIGGERS THE REGISTRATION PAGE AND LOGIN PAGE-->
        <script type="text/javascript">
                $(document).ready(function(){
                    $('#reg').click(function(){
                        $('#signUp').show(); $('#head').hide();
                    });
                    $('#exam').click(function(){
                        $('#signIn').show(); $('#head').hide();
                    });
                });
        </script>

        

        <?php include('footer.php'); ?>
    </body>
</html>


