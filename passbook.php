<?php

//check for user else go to login page
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}else{
    $name = $_SESSION['name'];
    $usert = $_SESSION['user'];
    //echo "Welcome $user";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS Home</title>
    <!-- bootstrap 4.0.0-beta.2 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- main css file-->
    <link rel="stylesheet" href="css/passbook.css">
    <link rel="stylesheet" href="css/slider.css">
    <script src="js/main.js"></script>
</head>

<body>
    
<section class="intro">
        
        <div id="particles-js">

        
        </div>
        <div id="user">
    <img src="assets/user_default.svg" alt="User" id="userImg" onclick="myFunction()">
</div>

<div id="myDropdown" class="dropdown-content">
    <a href="account.php">Account</a>
    <a href="transaction.php">Transaction</a>
    <a href="passbook.php">Passbook</a>
    <a href="logout.php">Logout</a>
</div>
        <div class="wrap">
            <div class="content">
                <div class="logincard">
                    <header>
                        <!-- avatar -->
                        <a href="home.php"><img src="assets/logo1.jpg" class="unselectable"></a>
                        <!--Firm name -->
                        <h1 class="unselectable"><?php echo $name; ?></h1>
                        <!-- role -->
                        <h2 class="unselectable">Passbook</h2>
                    </header>
                    <div class="loginForm">
                        <form>
                        <button type="button" class="send-button" id="refresh" name="refresh" onclick="update()">Refresh</button>
                        </form>
                    <header>
                        <h2 class="unselectable" id="msg"></h2>
                    </header>
                        <script>
                            
                            function update(){
                                var url = "http://localhost:5001/get_chain"
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("msg").innerHTML = this.responseText;
                                    }
                                };
                                xhttp.open("GET", url , true);
                                xhttp.send();
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>

    </section>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="lib/parallax.js-1.4.2/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            styleDefault();

            $('section').each(function() {
            $('.slider-navigation').prepend('<div class="tick"></div>');
        });

        $('.tick').on('click', function() {
            var tickIndex = $(this).index();
            $('body').scrollTop($(window).height() * tickIndex);
        });

        updatePos();
        });

        var isDragging = false;
    var sliderTop, pointerPos, currentSection;

    var bodyHeight = $('body').height();
    var sliderHeight = $('.slider-navigation').height();
    var elementHeight = $('section').height();
    var sectionAmount = $('section').length;
    var scale = (bodyHeight - (elementHeight)) / (sliderHeight - $('.nav-pointer').outerHeight());

    var waitForFinalEvent = (function() {
        var timers = {};
        return function(callback, ms, uniqueId) {
            if (!uniqueId) {
                uniqueId = "resize";
            }
            if (timers[uniqueId]) {
                clearTimeout(timers[uniqueId]);
            }
            timers[uniqueId] = setTimeout(callback, ms);
        };
    })();

    function updatePos() {
        currentSection = $(window).scrollTop() / elementHeight;
        currentSectionNum = Math.ceil(currentSection + 0.01);
        sliderTop = $(window).scrollTop() / scale;
        $('.nav-pointer').css('top', sliderTop).text(currentSectionNum + '/' + sectionAmount);
    }

    function sliderMove(e) {
        $('body').scrollTop(parseInt(e) * scale);
    }

    $(window).scroll(function() {
        if (!isDragging) {
            updatePos();
        }
    });

    $(window).resize(function() {
        waitForFinalEvent(function() {
            bodyHeight = $('body').height();
            sliderHeight = $('.slider-navigation').height();
            elementHeight = $('section').height();
            sectionAmount = $('section').length;
            scale = (bodyHeight - (elementHeight)) / (sliderHeight - $('.nav-pointer').outerHeight());

            updatePos();
        }, 500, "resizing");
    });

    </script>
</body>

</html>