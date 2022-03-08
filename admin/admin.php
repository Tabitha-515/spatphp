<?php

$connect = mysqli_connect("localhost","root","","final");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin site</title>
    <link rel="stylesheet" href="already.css">
</head>
<body>
    <header>
        <div class="navigation" style="background:blue, justify-content:space-between">
            <h3 class="logo">MabbySpa</h3>
            <ul>
                <li><a href="#">User</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </header>

    <div class="dash-co" style="display:flex">
    <div class="contains">
    <div class="collection" style="background-color:#008080; width:200px; height:100px;">
        <div class="collection-group1">
            <a href="" class="items" style="text-decoration:none; font-size:20px;font-weight:bold; color:white;  margin:50px;">Dashboard</a>
        </div>
    </div>
    <div class="collection" style="background-color:#008080; width:200px; height:100px;">
        <div class="collection-group1">
            <a href="" class="items" style="text-decoration:none; font-size:20px;font-weight:bold; color:white;  margin:50px;">ADMIN</a>
        </div>
    </div>
    <div class="collection" style="background-color:#008080; width:200px; height:100vh;">
        <div class="collection-group1">
            <a href="" class="items" style="text-decoration:none; font-size:20px;font-weight:bold; color:white;  margin:50px;">CLIENTS</a>
        </div>
    </div>
    </div>

    <div class="table-admin">
        <h5 style="font-size:40px; font-weight:bold; margin-left:60px; margin-top:20px; ">All Admin</h5>


        <!-- <--
        // $ad = $_SESSION['admin'];
        // $query = "SELECT * FROM admin WHERE username != '$ad'"; -->
        <!-- // $res = mysqli_query($connect,$query);

        // $output = "";

        // if (mysqli_num_rows($res) < 1){
        //     $output .= "<h5 class='text-center'>No NEW Admin</h5>";
        // }
        // while{
            // ($row = mysqli_fetch_array($res)){
            //     $id = $row['id']; -->
            <!-- //     $username = $row['username'];

            //     $output .="";
            // }
        // }
        ?> --> 
        <table class="table table-bordered">
            <th>ID</th>
            <th>Username</th>
            <th>Action</th>

            <tr>
                <td>1</td>
                <td>Admin</td>
                <td class="remove">Remove</td>
            </tr>
    </div>
</div>


    


    


    
</body>
</html>