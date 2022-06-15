<?php
//Check if the button has been clicked
if (isset($_GET["z"])){
    //Start receiving data from the form
    $firstloan = $_GET["x"];
    $secondloan = $_GET["y"];
    //compute the data and echo the results
    $simpleinterest = $firstloan / pow($secondloan , 2);
    echo "Hello there, your simple interest is $simpleinterest";
}