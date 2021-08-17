<?php
session_start();
if(isset($_POST['save_push_data']))

{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];


    $data = [
        'username' => $username,
        'email' => $email,
        'phoneno' => $phoneno
    ];
    $ref= "contact/";
    $postdata = $database->getReference($ref)->push($data);

    if($postdata){
        $_SESSION['status'] = "Data Inserted sucessfully";
        header('Location: index.php');
        }else{
            $_SESSION['status'] = "Data not inserted. Something went wrong.!";
            }

}