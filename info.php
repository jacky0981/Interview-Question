<?php
if(isset($_POST['username']) && !empty($_POST['username'])){  // check whether the username is received throught POST and is not empty
    $username = trim($_POST['username']); //store it in the variable , and remove extra spaces at the beginning and end

    if (strtolower($username) === "abc") { // check is the input match the condition ?
        echo "<div class='result success'>Verified</div>"; // return succesfully message if it is valid
    } else {
        echo "<div class='result error'>Error</div>"; // return ERROR message if it is invalid
    }
}
?>
