<?php

//start of the session
session_start();

//if statement that checks session
if ($_SERVER["REQUEST METHOD"] == "POST") {
//collecting data
$subTenKG = isset($_POST['subTenKG']) ? intval($_POST['overTenKG']) : 0;
$overTenKG = isset($_POST['overTenKG']) ? intval($_POST['overTenKG']) : 0;
    
    //store data into variables
    $_SESSION['subTenKG'] = $subTenKG;
    $_SESSION['overTenKG'] = $overTenKG;

    //brings to finalSTep.php
    header('Location: finalStep.php');
    exit();
    
} else {
    //brings to luggage.html
    header('Location: luggage.html');
    exit();
}
?>