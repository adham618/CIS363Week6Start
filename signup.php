<?php

// Get Incoming data

$last = $_POST['last'];
if(!isset($last)){
    $last = $_GET['last'];
}

$first = $_POST['first'];
if(!isset($first)){
    $first = $_GET['first'];
}

$email = $_POST['email'];
if(!isset($email)){
    $email = $_GET['email'];
}

$zip = $_POST['zip'];
if(!isset($zip)){
    $zip = $_GET['zip'];
}

// Test for complete incoming data

if (isset($last) && isset($first) && isset($email) && isset($zip)){
    $confirm = '<div style="position:relative; top: 200px; width: 99%"><div style="width: 50%; margin: auto; padding: 25px; text-align: center; border: 2px solid black; border-radius: 10px; background-color: lightyellow; color: black; font-family: arial; font-size: 40px;">  Thanks ' . $first . ' ' . $last . '</div></div>';
}else{
    $confirm = '<div style="position:relative; top: 200px; width: 99%"><div style="width: 50%; margin: auto; padding: 25px; text-align: center; border: 2px solid black; border-radius: 10px; background-color: lightyellow; color: black; font-family: arial; font-size: 40px;">  Looks like an error occurred!<br>Please try again later.</div></div>';
}

// Send result
echo $confirm;

?>