<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #login-msg {
                position:relative;
                top:40%;
                font-family: Trebuchet MS;
                font-size: 25px;
                color: maroon;
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
    # SCRIPT BELOW HANDLES THE LOGIN
if(isset($_POST['submit']) && !empty($_POST['reg_no'])){
    $reg_no = strip_tags($_POST['reg_no']);
    $con = mysqli_connect("localhost", "root", "", "cbt") or die ("Connection problem");
    $query = mysqli_query($con, "SELECT * FROM test WHERE regno = '{$reg_no}'");
    if(mysqli_num_rows($query) > 0){
        echo "<p id='login-msg'>LOGIN SUCCESSFULL</p>";
        echo "You will then be redirected to the exam page.... blah blah blah";
    }else {
        //header("Location: ../index.php");
        echo "<p id='login-msg'>REGISTRATION NUMBER IS INCORRECT</p>";
    }
}else{
    //header("Location: ../index.php");
    echo "<p id='login-msg'>error</p>";
}
?>
    </body>
</html>
