<?php
session_start();
include "connection.php";
$query3="SELECT MAX(order_id) from customer_details";
$res=mysqli_query($conn,$query3);
$row=mysqli_fetch_array($res);
$order_id=$row[0]+1; //incrementing order id by 1
//using values stored in session variable "cart_item" and inserting values in the db
foreach ($_SESSION["cart_item"] as $item){
    $query1 = "insert into order_details values('','" . $item["food_item"] . "','" . $item["price"] . "','" . $item["quantity"] . "','".$order_id."')";
    mysqli_query($conn, $query1);
}
//fetching customer details
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$street_address=$_REQUEST['street_address'];
$city=$_REQUEST['city'];
$postal_code=$_REQUEST['postal_code'];
$country=$_REQUEST['country'];
$contact_number=$_REQUEST['contact_number'];
$email=$_REQUEST['email'];
//inserting customer details in the db
$query2 = "insert into customer_details values('','".$order_id."','" . $first_name . "','" . $last_name . "','" . $street_address . "','".$city."','".$postal_code."','".$country."','".$contact_number."','".$email."')";
mysqli_query($conn,$query2);
//fetching and inserting order total, status whose default value is set to "Not completed" into separate table in the db
$total=$_SESSION['total'];
$status="Not completed";
$query4="insert into order_info values('','".$order_id."','".$total."','".$status."')";
mysqli_query($conn,$query4);
session_destroy();//destroying session so as to set shopping cart to its default values
header("location:order_confirmation.php ");
