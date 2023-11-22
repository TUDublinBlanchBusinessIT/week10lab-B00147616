<?php

//start of the session
session_start();

//collecting data
$passangerFN = $_POST['passengerFN'];
$passangerSN = $_POST['passengerSN'];
//luggage checkbox if checked
$luggage = isset($_POST['luggage']) ? 1 : 0;

//store data into variables
$_SESSION['passengerFN'] = $passangerFN;
$_SESSION['passengerSN'] = $passangerSN;
$_SESSION['luggage'] = $luggage;
    
if ($luggage == 1) {
    //brings to luggage.html
    header('Location: luggage.html');
} else {
    //brings to finalStep.php
    header('Location: finalStep.php');
}

exit;
?>