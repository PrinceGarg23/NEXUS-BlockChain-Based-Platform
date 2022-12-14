<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS</title>
    <link rel="stylesheet" href="css/about.css">
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

            <div id="user">
                <img src="assets/user_default.svg" alt="User" id="userImg" onclick="myFunction()">
            </div>
    
            <div id="myDropdown" class="dropdown-content">
                <a href="login.php">Log In</a>
                <a href="reg.php">Register</a>
            </div>


            <img src="assets/logo1.jpg" alt="assets/logo1.jpg">
            <h1 class="card-title">NEXUS</h1>
            <p> NEXUS is a one of the leading platform which aims to facilitate Blockchain based transactions
                using our very own cryptocurrency, <font style="color: #FF5722;">KUPA Coin</font>.    
            </p>
            
        </div>



    </section>

    <section class="section2">

        <header>
            <h1>What is KUPA?</h1>
        </header>

        <div class="container">
            <div class="box">
                <p>
                    KUPA is an altcoin built on our inhouse Blockchain, deployed on the NEXUS platform.
                    The idea of KUPA Coin was brought into reality this monsoon, with an aim to provide a
                    new currency to the world, which is decentralized and secure. As the wrath of economic recession 
                    fuelled by the pandemic is still looming over the world, we aim to provide a solution to the economic 
                    exchange process by introducing a coin which is independent of volatility of the market performance and 
                    is not backed by any central organisation. The Blockchain is deployed in such a manner that a self regulatory
                    check is imposed on the coin which increses the difficulty level for mining the new coins and keeps a check
                    on the inflation rate of the coin. The Blockchain is also designed in such a way that it is not possible to
                    hack the coin and the transactions are completely secure.
                </p>
            </div>
        </div>

    </section>

    <section class="section3">

        <header>
            <h1>KEY FEATURES</h1>
        </header>

        <div class="container">
            <div class="card">
                <div class="card-image">
                    <img src="assets/bulb.png" alt="assets/1.png">
                </div>
                <div class="card-text">
                    <h2>Secure</h2>
                    <p>Transaction is cryptographically secured as public and private keys are used to carry out transactions.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="assets/bulb.png" alt="assets/2.png">
                </div>
                <div class="card-text">
                    <h2>Fast</h2>
                    <p>Since the transaction involves an algorithmic verification, it is much faster when compared to tradition trasaction settlements.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="assets/bulb.png" alt="assets/3.png">
                </div>
                <div class="card-text">
                    <h2>Easy</h2>
                    <p>Since the user requires only the public key of the receipent to make a transaction, it is a hasel-free way
                        to execute any transaction.
                    </p>
                </div>
            </div>
        </div>

        <footer style="margin-top: 25px;">&copyG'verse2022 - All Rights Reserved. </footer>
        
    </section>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="lib/parallax.js-1.4.2/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        $(document).ready(function() {
            styleKUPA();

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
