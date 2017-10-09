<?php include ('includes/head.php'); ?>

<?php include ('includes/regpage.php'); ?>

<?php include ('includes/footer.php'); ?>

<?php 
    foreach($_SESSION as $key=>$value){
        if($key == "captext"){
            continue;
        }
        unset($_SESSION[$key]);
    }
?>