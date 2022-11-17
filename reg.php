<?php

$e = 1;
$u = 1;
$m = 1;
$s = 1;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "nexus";

    $conn = new mysqli($server, $user, $pass, $db);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    //check if email already exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $e=0;
        //echo "Email already exists";
    }else{
        //check if username already exists
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //echo "Username already exists";
            $u=0;
        }else{
            //check if password and confirm password match
            if($password == $cpassword){
                $sql = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
                $result = $conn->query($sql);

                if($result){
                    //echo "Registration successful";
                    //redirect to home page
                    session_start();
                    $_SESSION['name'] = $name;
                    $_SESSION['user']=$username;
                    header("Location: home.php");
                }else{
                    $s=0;
                   // echo "Registration failed";
                }
            }else{
                $m = 0;
                //echo "Passwords do not match";
            }
        }
    }
    
    $conn->close();

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS User Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>

<body>
    <section class="intro">
        
        <div id="particles-js"></div>
    
        <div class="wrap">
            <div class="content">
                <div class="logincard">
                    <header>
                        <!-- avatar -->
                        <a><img src="assets/logo1.jpg" class="unselectable"></a>
                        <!--Firm name -->
                        <h1 class="unselectable">NEXUS</h1>
                        <!-- role -->
                        <h2 class="unselectable">BlockChain based Platform</h2>
                    </header>
                    <div class="loginForm">

                        <form action="reg.php" method="post">
                            <input class="form-info" type="text" id="name" name="name" placeholder="Name" required><br>
                            <input class="form-info" type="email" id="email2" name="email" placeholder="Email" required><br>
                            <input class="form-info" type="text" id="email" name="user" placeholder="UserName" required><br>
                            <input class="form-info" type="password" id="password" name="pass" placeholder="Password" required><br>
                            <input class="form-info" type="password" id="cpass" name="cpass" placeholder="Confirm Password" required><br>
                            <input type="submit" class="send-button" name="submit" value="Register">
                        </form>
                        <header>
                            <h2 class="unselectable">

                                <?php 
                                if($e==0){
                                    echo "Email already exists";
                                }else if($u==0){
                                    echo "Username already taken!!";
                                }else if($m==0){
                                    echo "Passwords do not match";
                                }else if($s==0){
                                    echo "Registration failed";
                                }
                                ?>

                            </h2>
                        </header>
                    </div>
                </div>
            </div>
        </div>

    </section>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="lib/parallax.js-1.4.2/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        $(document).ready(function() {
            styleSpace();
        });
    </script>
</body>

</html>

