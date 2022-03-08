<?php

$connect = mysqli_connect("localhost","root","","final");


if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $erroe = array();

    if(empty($username)){
        $error['admin'] = "Enter Username";
    }else if(empty($password)){
        $error['admin']= "Enter password";
    }

    if (count($error)==0) {
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

        $_SESSION['admin'] = $username;

        header("Location:admin/index.php");
        exit();
    }

    $result = mysqli_query($connect,$query);

    if (mysqli_num_rows($result)== 1){
        echo "<script>alert('you have logged in successfully')</script>";
    }else{
        echo "<script>alert('Invalid username or password')</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Site</title>
    <link rel="stylesheet" href="adminlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-admin">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" class="my-2">
                        <?php

                        if (isset($error['admin'])){
                            $show = $error['admin'];
                        }else{
                            $show ="";
                        }
                        ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>

                        <input type="submit" value="login" name="login" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>