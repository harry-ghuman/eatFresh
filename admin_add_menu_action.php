<?php
include "connection.php";
//fetching values passed from "add food item" form
$food_item=$_REQUEST['food_item'];
$food_type=$_REQUEST['food_type'];
$calories=$_REQUEST['calories'];
$description=$_REQUEST['description'];
$price=$_REQUEST['price'];
//query selects all attributes of "menu" table
$query="select * from menu";
$res=mysqli_query($conn,$query);
$flag=0;
//checking if food_item is already stored in the database
while($row=mysqli_fetch_array($res))
{
    if($food_item==$row[1])
    {
        $flag=1;
        break;
    }
}
//if food_item already stored
if($flag==1)
{
    header("location:admin_view_menu.php?q=4");
}
//else insert the food_item and its fields into the "menu" table in the database
else {
    $query2 = "insert into menu values('','" . $food_item . "','" . $food_type . "','" . $calories . "','" . $description . "','" . $price . "')";
    mysqli_query($conn, $query2);
    header("location:admin_view_menu.php?q=2");
}
