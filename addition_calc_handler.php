<?php
//Check if the button has been clicked using the method on the form
if (isset($_Get["z"])){
    // Start receiving data from the form
    $firstNumber = $_GET["x"];
    $secondNumber = $_GET["y"];
    //compute the data received and echo the answer
    $answer = $firstNumber + $secondNumber;
    echo  "Hello there, your answer is $answer";
}