<?php

//check for user else go to login page
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}else{
    $name = $_SESSION['name'];
    $user = $_SESSION['user'];
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/slider.css">
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <div class='slider-navigation'>
            <div class='nav-pointer draggable'>
                0/0
            </div>
        </div>
    </header>

    <section class="intro">
        
        <div id="particles-js">

            <h3><?php echo "Welcome, $name"; ?></h3>

            <div id="user">
                <img src="assets/user_default.svg" alt="User" id="userImg" onclick="myFunction()">
            </div>
    
            <div id="myDropdown" class="dropdown-content">
                <a href="account.php">Account</a>
                <a href="transaction.php">Transaction</a>
                <a href="passbook.php">Passbook</a>
                <a href="logout.php">Logout</a>
            </div>

            <img src="assets/logo1.jpg" alt="assets/logo1.jpg">
            <h1 class="card-title">NEXUS</h1>
            <h5> NEXUS IS FOR EVERYONE</h5>
            <p>We’re building a platform that will bring anyone who believes in crypto to join the digital cryptocurrency revolution. The world is moving on to this revolution at an unprecedented pace. </p>
            
        </div>


    </section>

    <!-- <div class="parallax-window" data-parallax="scroll" data-image-src="assets/Ottawa_1920x1080.jpg"></div> -->

    <section class="section2 unselectable">

        <div class="wallet">
            <div class="walletcard">
                <header>
                    <!-- avatar -->
                    <!-- <a><img id="logo2" src="assets/wallet/wallet1.jpg" class="unselectable"></a> -->
                    <!--Firm name -->
                    <center><h1 class="unselectable">Wallet</h1></center>
                </header>
                <div class="walletcontent ">
                    <p>Public Key : </p>
                    <span id="pukey">0x764d3e2f764</span><br>
                    <p>Current Balance : </p>
                    <span id="balance">100 KUPA</span><br>
                    <center><button type="button" class="send-button">Send</button><br></center>
                    <center><button type="button" class="recieve-button">Recieve</button></center>
                </div>
            </div>
        </div>
        <div class="transaction">
            <div class="transactioncard">
                <header>
                    <!-- avatar -->
                    <!-- <a><img id="logo2" src="assets/wallet/wallet1.jpg" class="unselectable"></a> -->
                    <!--Firm name -->
                    <center><h1 class="unselectable">Passbook</h1></center>
                </header>
                <div class="transactioncontent">
                    <p>Transaction History :</p>
                    <span id="history">
                        <table>
                            <tr>
                                <th>Sender</th>
                                <th>Reciever</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                            <tr>
                                <td>0x764d3e2f764</td>
                                <td>0x764d3e2f764</td>
                                <td>100 KUPA</td>
                                <td>12/12/2020</td>
                                <td>12:12:12</td>
                            </tr>
                            <tr>
                                <td>0x764d3e2f764</td>
                                <td>0x764d3e2f764</td>
                                <td>100 KUPA</td>
                                <td>12/12/2020</td>
                                <td>12:12:12</td>
                            </tr>
                            <tr>
                                <td>0x764d3e2f764</td>
                                <td>0x764d3e2f764</td>
                                <td>100 KUPA</td>
                                <td>12/12/2020</td>
                                <td>12:12:12</td>
                            </tr>
                            <tr>
                                <td>0x764d3e2f764</td>
                                <td>0x764d3e2f764</td>
                                <td>100 KUPA</td>
                                <td>12/12/2020</td>
                                <td>12:12:12</td>
                            </tr>

                        </table>
                    </span>
                </div>
            </div>
        </div>

    </section>

    <!-- <div class="parallax-window" data-parallax="scroll" data-image-src="assets/Ottawa_1920x1080.jpg"></div> -->
<!-- 
    <section class="trends section3">

    </section> -->
    
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