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
               left: 35%; 
               color:#0f222f;
               font-family: Trebuchet MS;
               font-size: 20px;
           }  
           #reg-no {
               position:relative;
               top:30%;
               left: 35%;  
               color:#0f222f;
               font-family: Trebuchet MS;
               font-size: 20px;
           }
           #add-msg {
               position:relative;
               top:30%;
               left: 35%;  
               color:marron;
               font-family: Trebuchet MS;
               font-size: 15px;
           }
        </style>
       
    </head>
    <body>
        <?php include('header.php'); ?>

        <?php

# THIS SCRIPT CONTROLS THE REGISTRATION

$name = strip_tags($_POST['name']);
$sname = strip_tags($_POST['sname']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$human = strip_tags($_POST['human']);
$message = "<span style='color:green;'>APPLICATION SUCCESFULL</span><br><br><br>" 
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
            if($human =="4") {
                $registrationNumber = RegNo();
                $con = mysqli_connect("localhost", "root", "12345678", "cbt") or die("We could not Connect");
                mysqli_query($con, "INSERT INTO test(name,sname,email,phone,regno)
                             VALUES('$name','$sname','$email','$phone','$registrationNumber')");
                echo "<p id='msg'>$message</p>";
                echo "<p id='reg-no'>REGISTRATION NUMBER: $registrationNumber</p>";
                echo "<p id='add-msg'>proceed to <a href='index.php'>HOME</a> page click on take exam and login with your registration number</p>";
            } else { 
                echo "<p>Your Answer is Incorrect</p>";
            }
        }
    }
 ?>

    </body>
</html>