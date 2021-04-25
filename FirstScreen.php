<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>timeline</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body>
<div id="header">
    <div class="container">
        <div class="logo">
            <a href="">BONGUA</a>
        </div>
        <div class="contact-info">
            <ul>
                <li>
                    <div class="contact-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <div class="contact-text">
                        <label>Email</label>
                        <span>tanukiaisuru@gmail.com</span>
                    </div>
                </li>
                <li>
                    <div class="contact-icon">
                        <i class="fas fa-phone-square"></i>
                    </div>
                    <div class="contact-text">
                        <label>Call</label>
                        <span>084 209 2001</span>
                    </div>
                </li>

            </ul>
        </div>
    </div>

</div>

<!--    start menu -->
<div id="nav">
    <div class="container">
        <ul class="menu">
            <li class="topLeft" id="myTopLeft">
                <a href="">Home</a>
                <a href="">Form</a>
                <a href="">BlaBla</a>
            </li>
            <li class="topRight" id="myTopRight">
                <a href="login.php" style="float: right">Log in</a>
                <a href="signup.php" style="float: right">Sign up</a>
            </li>

        </ul>
        <div class="form-search">
            <input type="text" class="keyword" placeholder="Search">
            <button style="submit" class="btn-search">
                <i class="fas fa-search"></i>
            </button>
        </div>

    </div>
</div>
<!--end-->
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="data:image/png;base64,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">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="1.jpg">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="3.jpg">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<br>
<div style="text-align: center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="snackbar">Đăng kí thành công</div>

<script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
            x.className = "topnav";
            }
        }

        function getAccount() {
            var name = document.getElementById("username");
            var pass = document.getElementById("password");
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }


</script>

<?php
    if (isset($_SESSION['signuped'])) {
        ?>
        <script>
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        </script>
        <?php
        unset($_SESSION['signuped']);
        
    }
?>
</html>

