<?php include ('includes/head.php'); ?>

<?php include ('landingpage.php'); ?>

<?php include ('regpage.php'); ?>

<script src="/newcbt/js/custom.js"></script>

<script src="/newcbt/js/validate.js"></script>

<?php include ('includes/footer.php'); ?>

<?php 
    foreach($_SESSION as $key=>$value){
        if($key == "captext"){
            continue;
        }
        unset($_SESSION[$key]);
    }
?>