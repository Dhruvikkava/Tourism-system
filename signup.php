<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <title>Tourism System</title>
    <link rel="stylesheet" type="text/css" href="stle/style.css">
    <style>
        header{
            width:100%;
            height: 140px;
        }
        .login{
            background-color: rgba(250, 128, 114, 0.493);
            width:100%;
            height:100vh;
            position: relative;
            color: white;
        }
        .login p{
            margin-bottom: -20px;
            margin-left: 30px;
            font-size: 18px;
        } 
        .inner{
            width:350px;
            height:570px;
            background-color: rgba(0, 0, 0, 0.637);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-45%);
            border-radius: 40px;
        }
        .inner h2{
            text-align: center;
        }
        .inner .fa{
            font-size: 60px;
            margin-left: 145px;
            margin-top:-30px;
            color:rgb(255, 145, 0);
        }
        .inner input {
            background: transparent;
            border:none;
            border-bottom: 2px solid black;
            margin-left: 30px;
            margin-top:10px;
            margin-bottom: 30px;
            width:270px;
            font-size: 18px;
        }
        .inner button{
            margin-left: 30px;
            width:110px;
            padding: 5px 20px 5px 20px;
            color: black;
            border-radius: 25px;
            margin-bottom: 20px;
        }
        
        .inner a{
            color:rgba(43, 220, 226, 0.801);
            text-decoration: none;
            border-bottom: 2px solid rgba(43, 220, 226, 0.801);
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="mainrow clearfix">
                <img src="24B-Tourism.png" class="logo">
                
                <ul class="main-nav">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="packages.php">PACKAGES</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="login.php">LOGIN | REGISTER</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="login" >
        <form class="inner" method="POST">
            <i class="fa fa-user-circle-o"></i>
            <h2>REGISTER</h2>
            <p>Username:</p><br>
            <input type="text" name="user" placeholder="Enter Your Name" required><br>
            <p>Email:</p><br>
            <input type="email" name="email" placeholder="Enter Your Email" required><br>
            <p>Password:</p><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <p>Confirm Password:</p><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" required><br>
            <button type="submit" name="sub">SIGN UP</button>
            <p>Already Have Account?  <a href="login.php">Login</a></p>

        </form>
    </div>
</body>
</html>

<?php
    include 'conn.php';

    if(isset($_POST['sub']))
    {
        $user =mysqli_real_escape_string($con, $_POST['user']);
        $email =mysqli_real_escape_string($con, $_POST['email']);
        $password =mysqli_real_escape_string($con, $_POST['password']);
        $cpassword =mysqli_real_escape_string($con, $_POST['cpassword']);

        $pass=password_hash($password,PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

        $emailquery = "SELECT * FROM `signup` WHERE email='$email'";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0)
        {
            ?>
            <script>
                alert("Email already Exist");
            </script>
            <?php
        }
        else
        {
            if($password === $cpassword)
            {
                $insertquery = "INSERT INTO `signup`(`user`, `email`, `password`, `cpassword`) 
                                VALUES ('$user','$email','$pass','$cpass')";
                $iquery = mysqli_query($con,$insertquery);
                
                if($iquery)
                {
                    ?>
                    <script>
                        alert("Register successful");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert("Data not inserted");
                    </script>
                    <?php
                }
            }
            else{
                ?>
            <script>
                alert("password are not matching");
            </script>
            <?php
            }
        }

    }
?>