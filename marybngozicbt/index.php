<?php include ('includes/head.php'); ?>

<?php include ('includes/landingpage.php'); ?>

<?php include ('includes/regpage.php'); ?>

<script src="/newcbt/js/custom.js"></script>

<script src="/newcbt/js/validate.js"></script>

<?php include ('includes/footer.php'); ?>

<?php include ('includes/logpage.php'); ?>
<?php 
    foreach($_SESSION as $key=>$value){
        if($key == "captext"){
            continue;
        }
        unset($_SESSION[$key]);
    }
?>