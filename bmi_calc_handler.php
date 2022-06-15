<?php
//check if the button has been clicked
if (isset($_GET["btn_calc"])){
    //start receiving data from the form
    $weight = $_GET["w"];
    $height = $_GET["h"];
    //compute the data and echo the results
    $bmi = $weight / pow($height , 2);
    echo "Hello there, your BMI is $bmi";
}