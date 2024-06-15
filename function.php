<?php
class bike{   // Define a class named 'bike'
function model(){  // Declare a local variable 'model_name' and assign it the value "Royal Enfield"
    $model_name = "royal enfield";
    echo "bike model:".  $model_name; // Print the bike model to the screen
}
}

$obj1 = new bike();// Create an instance (object) of the 'bike' class
$obj1 -> model();// Call the 'model' method on the created object
?>