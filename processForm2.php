<?php

//start of the session
session_start();

//collecting data
$subTenKG = isset($_POST['subTenKG']) ? $_POST['overTenKG'] : 0;
$overTenKG = isset($_POST['overTenKG']) ? $_POST['overTenKG'] : 0;

//store data into variables
$_SESSION['subTenKG'] = $subTenKG;
$_SESSION['overTenKG'] = $overTenKG;

//brings to finalSTep.php
header('Location: finalStep.php');

exit;
?>