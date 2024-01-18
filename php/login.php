<?php

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

session_start();
//make connection
$connect =  mysqli_connect("localhost", "root", "", "petshop");

//get user input
$email = $_POST['email'];
$password = $_POST['password'];

$select = mysqli_query($connect, "select * from member where email ='$email' and password = '$password'");
$fetch = mysqli_fetch_array($select);

$useremail = $fetch['email'];
$userpass = $fetch['password'];

if($email == $useremail && $password == $userpass){
        debug_to_console("sukses");

}
else{
    debug_to_console("gagal");}

?>