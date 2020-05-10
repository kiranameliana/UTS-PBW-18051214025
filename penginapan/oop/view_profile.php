<?php
// get ID of the product to be read
$id = isset($_GET['id'])? $_GET['id'] : '';
 
// include database and object files
include_once 'config/database.php';
include_once 'objects/member.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare objects
$member = new Member($db);
 
// set ID property of product to be read
$member->id = $id;
 
// read the details of product to be read
$member->readOne();
// set page headers
$page_title = "My Profile";
include_once "layout_header.php";
             //SET fname=:fname, lname=:lname, email=:email, status=:status,
               // alamat=:alamat,telepon=:telepon, image=:image, password=:password";
// read products button
echo "<div class='right-button-margin'>";
    echo "<a href='main_member.php' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-list'></span> Back";
    echo "</a>";
echo "</div>";
// HTML table for displaying a product details
echo "<table class='table table-hover table-responsive table-bordered'>";
 
    echo "<tr>";
        echo "<td>Nama Depan</td>";
        echo "<td>{$member->fname}</td>";
    echo "</tr>";
 
    echo "<tr>";
        echo "<td>Nama Belakang</td>";
        echo "<td>{$member->lname}</td>";
    echo "</tr>";
 
    echo "<tr>";
        echo "<td>Email</td>";
        echo "<td>{$member->email}</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Image</td>";
        echo "<td>";
            echo $member->image ? "<img src='oop/uploads/{$member->image}' style='width:300px;' />" : "No image found.";
        echo "</td>";
    echo "</tr>";
echo "</table>"; 
// set footer
include_once "layout_footer.php";
?>