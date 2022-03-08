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
    <style>
        .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  font-size:18px;

  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>




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
    <!-- <div class="collection" style="background-color:#008080; width:200px; height:100px;">
        <div class="collection-group1">
            <a href="admin.php" class="items" style="text-decoration:none; font-size:20px;font-weight:bold; color:white;  margin:50px;">ADMIN</a>
        </div>
    </div> -->

    <div class="collection" style="background-color:#008080; width:200px; height:100px;">
        <div class="collection-group1">
            <div class="dropdown">
            <button class="dropbtn" style="margin-left:40px; ">Admin</button>
            <div class="dropdown-content">
                <a href="#">Service List</a>
                <a href="#">Appointments</a>
                
            </div>
            </div>
            <!-- <a href="admin.php" class="items" style="text-decoration:none; font-size:20px;font-weight:bold; color:white;  margin:50px;">ADMIN</a> -->
        </div>
    </div>
    <div class="collection" style="background-color:#008080; width:200px; height:100vh;">
        <div class="collection-group1">
            <a href="" class="items" style="text-decoration:none; font-size:20px;font-weight:bold; color:white;  margin:50px;">CLIENTS</a>
        </div>
    </div>
        
    </div>
   

    <div class="dash" style="display:flex">
        <div class="containners">
          <h4 style="margin-left:150px; margin-top:20px; font-weight:bold; font-size:30px">Admin Dashboard</h4>
           <button style="height:130px; width:300px; margin-top:50px; background-color:green; color:white; border:none; margin-left:100px">0<br>Total<br>Admin</button>
        </div>

        <div class="containners">
          <!-- <h4 style="margin-left:150px; margin-top:20px; font-weight:bold; font-size:20px">Admin Dashboard</h4> -->
           <button style="height:130px; width:300px; margin-top:100px; background-color:blue; border:none; margin-left:100px">Pending Request</button>
        </div>

        <div class="containners">
          
           <button style="height:130px; width:300px; margin-top:100px; background-color:yellow; border:none; margin-left:100px">Verified Appointment</button>
        </div>
        

    </div>


    </div>


    


    
</body>
</html>