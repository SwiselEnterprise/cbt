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
    <body>

        <?php include('includes/header.php'); ?>
    
        <?php 
    # SCRIPT BELOW HANDLES THE LOGIN

    $registrationNumber = $_POST['submit'];

    if ($registrationNumber) {

        $con = mysqli_connect("localhost", "root", "12345678", "cbt") or die ("Connection problem");

        $query = mysqli_query($con, "SELECT * FROM test WHERE regno = $registrationNumber");
       
        $numrows = mysqli_num_rows($query);

        if ($numrows !=0) {
            while($row = mysqli_fetch_assoc($query)) {

               $dbregno = $row ['regno'];

            }
            if ($registrationNumber == $dbregno) {

                echo "<p id='login-msg'>LOGIN SUCCESSFULL</p>"; 
                
            } else {
                echo "<p id='login-msg'>REGISTRATION NUMBER IS INCORRECT</p>";
            }
        } else {
            echo "<p id='login-msg'>error</p>";
        }
    }

 ?>

    </body>
</html>
