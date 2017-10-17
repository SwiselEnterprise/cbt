<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
           #msg {
               position:relative;
               top:50%;
               left: 20%; 
               color:#0f222f;
               font-family: Trebuchet MS;
               font-size: 20px;
           }  
           #reg-no {
               position:relative;
               top:30%;
               left: 20%;  
               color:#0f222f;
               font-family: Trebuchet MS;
               font-size: 20px;
           }
           #add-msg {
               position:relative;
               top:30%;
               left: 20%;  
               color:maroon;
               font-family: Trebuchet MS;
               font-size: 15px;
           }
        </style>
       
    </head>
    <body class="container-fluid">
    <section class="row">
           
    <header style="width:100%; height:150px; background:#0f222f;">
     <h1 style="font-family:Trebuchet MS; color:#fff; font-size:40px;
                       text-align:center; position:relative; top:30%">THE CBT MAIDEN PROJECT</h1>
    </header>

        <?php

# THIS SCRIPT CONTROLS THE REGISTRATION

$name = strip_tags($_POST['sname']);
$sname = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$message = "<span class='col-sm-12' style='color:green;'>APPLICATION SUCCESFULL</span><br><br><br>" 
           ."SURNAME: " .$sname ."<br>"
           ."NAME: " .$name    ."<br>"
           ."EMAIL: " .$email  ."<br>"
           ."PHONE: " .$phone;


# FUNCTION BELOW GENERATES A NINE CHARACTER REGISTRATION NUMBER;
function RegNo(){
    $alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $letter1 =  $alphabets[rand(0, strlen($alphabets)-1)];
    $letter2 =  $alphabets[rand(0, strlen($alphabets)-1)];
    $no1 = rand(0, 9); $no2 = rand(0, 9); $no3 = rand(0, 9); $no4 = rand(0, 9); $no5 = rand(0, 9); $no6 = rand(0, 9); $no7 = rand(0, 9);
    $registrationNumber = $no1.$no2.$no3.$no4.$no5.$no6.$no7.$letter1.$letter2;

    return $registrationNumber;
}

    if(isset($_POST['submit'])){ 
        if($name && $sname && $email && $phone) {
                $registrationNumber = RegNo();
                $con = mysqli_connect("localhost", "root", "12345678", "cbt") or die("We could not Connect");
                mysqli_query($con, "INSERT INTO test(name,sname,email,phone,regno)
                             VALUES('$name','$sname','$email','$phone','$registrationNumber')");
                echo "<p id='msg'>$message</p>";
                echo "<p id='reg-no' class='col-sm-12'>REGISTRATION NUMBER: $registrationNumber</p>";
                echo "<p id='add-msg' class='col-sm-12'>proceed to <a href='index.php'>HOME</a> page click on take exam and login with your registration number</p>";     
        } else {echo ("this part is wrong");}
    } else{echo ("nah it's this part");}
 ?>

    </section>
    </body>
</html>