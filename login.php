<?php
    $x=1;
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['pass'];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "nexus";


    $conn = new mysqli($server, $user, $pass, $db);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    //Redirect to home page if login is successful
    $sql = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        //fetch name
        $row = $result->fetch_assoc();
        $user = $row['name'];
        $nam = $row['username'];
        session_start();
        $_SESSION['name'] = $user;
        $_SESSION['user']=$nam;
        //echo "Login successful";
        //redirect to home page
        header("Location: home.php");
    }else{
        $x=0;
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
    <title>NEXUS Login</title>
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
                        <form action="login.php" method="post">
                            <input class="form-info" type="text" id="email" name="name" placeholder="User Name   (Public Key)" required><br>
                            <input class="form-info" type="password" id="password" name="pass" placeholder="Password   (Private Key)" required><br>
                            <input type="submit" class="send-button" name="submit" value="Log In">
                        </form>
                    </div><br><br>
                    <header><h2 class="unselectable">

                        <?php
                        if($x==0){
                            echo "Invalid Credentials";
                        }
                        ?>
                    </h2></header>
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
