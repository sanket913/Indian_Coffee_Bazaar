<?php
session_start();
include 'config.php';

date_default_timezone_set('Asia/Kolkata');


$params1= [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'monumber' => $_POST['monumber'],
    'userdate' => date('Y:m:d H:i:s'),
    
];

$db = new Database();
$db -> __construct();
$ch=$db->insert('contactus',$params1);
//  if($ch){
    $_SESSION['status']="Data Inserted Successfully";
    header('location:index.php');
          
//  }
//  else{
//      echo "some error occured";
//  }




?>