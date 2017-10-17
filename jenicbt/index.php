<?php include ('includes/head.php'); ?>

<?php include ('landingpage.php'); ?>

<?php include ('regpage.php'); ?>

<script src="/jenicbt/js/custom.js"></script>

<script src="/jenicbt/js/validate.js"></script>

<?php include ('includes/footer.php'); ?>

<?php 
    foreach($_SESSION as $key=>$value){
        if($key == "captext"){
            continue;
        }
        unset($_SESSION[$key]);
    }
?>