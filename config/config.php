<?php
ob_start();

$timezone = date_default_timezone_set("America/Los_Angeles");

$con = mysqli_connect("localhost", "root","", "learn");

if(mysqli_connect_errno())
{
    echo"an error occured" . mysqli_connect_errno();
}

?>