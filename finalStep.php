<?php
include("finalStepHeader.html");

//translate the comments below into PHP code underneath each comment

//start a session
session_start();

//echo the passenger's firstname from the appropriate session variable

echo "<BR>";

echo "<h4>";
if (isset($_SESSION['passengerFN'])) {
    echo "Firstname: " . $_SESSION['passengerFN'] . "<br>";
}

//echo the passenger's surname from the appropriate session variable

echo "<BR>";
if (isset($_SESSION['passengerSN'])) {
    echo "Surname: " . $_SESSION['passengerSN'] . "<br>";
}

// if the luggage session variable is on
if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {
    
    //echo the amount of bags under ten kilos the passenger is bringing
    if (isset($_SESSION['subTenKG']) {
        echo "Bags under 10kg: " . $_SESSION['subTenKG'] . "<br>";
    }
    
    echo "<BR>";
    
    //echo the amount of bags over ten kilos the passenger is bringing
    if (isset($_SESSION['overTenKG'])) {
        echo "Bags between 10kg and 20kg"
    }
}
echo "</h4>";
//end if block

?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>
