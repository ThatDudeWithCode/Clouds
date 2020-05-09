<?php

//connect to the database
session_start();

$con = mysqli_connect("localhost", "root", "", "loginapp");

if(mysqli_connect_errno()) {
    echo "Failed to connect" . mysqli_connect_errno();
}