<!DOCTYPE html>
<html lang="en">

<?php 
    include 'header.php';
?>

<body>
<?php 
    include 'menu2.php';
?>

    <section class="section two">
        <div class="content">
            <h1 class="title">Model Y</h1>
    </section>
    <div class="grid-container">
        <div class="grid-item">76 cu ft<br>Cargo Space</div>
        <div class="grid-item">330 mi<br>Range (EPA est.) </div>
        <div class="grid-item">AWD<br>Dual Motor</div>
        <div class="grid-item">
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" name="yform">
            </form>
        </div>

    </div>
    <p
        style="justify-content: center;display: flex;background-color: black;color: white;padding-bottom: 2vw;font-size: 40px;font-family: Arial, Helvetica, sans-serif;">
        Interior of the Future</p>

    <div id="sec2" style="background-color: rgb(255, 255, 255);">
        <img src="assets/media/Xint1.png" alt="" style="width: 100%;">
    </div>

    <div class="grid-container4">
        <div class="grid-item4" style="width: 39vw;">
            <img src="assets/media/x_1.png" alt="" style="width: 53vw;">
        </div>
        <div class="grid-item4" style="width: 120px;">
            <p style="width: 30vw;">Safety</p><br>
            <h1 style="width: 30vw;">Designed for Safety</h1><br>
            <p style="width: 30vw;">Safety is the most important part of every Tesla. We design our vehicles to exceed safety standards. <br><br>

5-Star Rating : <br>
Model Y achieved NHTSA 5-star safety ratings in every category and subcategory. <br><br>

Top Safety Pick+ : <br>
Model Y received the IIHS Top Safety Pick+ award, with top ratings in all crashworthiness and front crash prevention categories. 
            </p>
        </div>
    </div>

    <div class="grid-container4">
        <div class="grid-item2">
            <p>Utility</p><br>
            <h1>A Place For Everything</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" style="color: white;background-color: black;"
                    onmouseover="change()" onmouseout="change2()" id="chg" name="yform">
            </form>

        </div>
        <div class="grid-item4">
            <p>Model Y provides maximum versatility—able to carry 7 passengers and their cargo. Each second row seat folds flat independently, creating flexible storage for skis, furniture, luggage and more. The liftgate opens to a low trunk floor that makes loading and unloading easy and quick. 
            <p>
        </div>
    </div>


    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 2</div>
            <img src="assets/media/int1_x.jpg" style="width:100%">
            <div class="text">Room for up to seven with optional third row</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 2</div>
            <img src="assets/media/int2_x.jpg" style="width:100%">
            <div class="text">Versatile seating and storage for cargo and passengers</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div><br>

    <div id="sec2" style="background-color: rgb(0, 0, 0);">
        <img src="assets/media/x_2.jpg" alt="" style="width: 100%;">
    </div>

    <div class="grid-container4" style="background-color: black;">
        <div class="grid-item2">
            <h1 style="color: white;">Model Y</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" onmouseover="change()" onmouseout="change2()" id="chg" name="yform">
            </form>

        </div>
        <div class="grid-item4">
            <img src="assets/media/x_3.avif" alt="" style="width: 100%;">
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"
        integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navigation = document.querySelector('.navigation')
        const navCloseBtn = document.querySelector('.close-btn')
        const blurOverlay = document.querySelector('.blur-overlay')
        const fullPageElement = document.getElementById('myfullpage')

        const IS_ACTIVE = 'is-active'
        const CLICK = 'click'

        //toggle navigation and blur overlay
        const toggleNavigation = () => {
            navigation.classList.toggle(IS_ACTIVE)
            blurOverlay.classList.toggle(IS_ACTIVE)
            fullPageElement.classList.toggle('no-scroll') /* Prevent fullpage scroll when navbar is-active */
        }
        menuBtn.addEventListener(CLICK, toggleNavigation)
        navCloseBtn.addEventListener(CLICK, toggleNavigation)
        blurOverlay.addEventListener(CLICK, toggleNavigation)

        function change() {
            document.getElementById("chg").style.color = "black";
            document.getElementById("chg").style.backgroundColor = "white";
            document.getElementById("chg").style.borderColor = "black";
        }
        function change2() {
            document.getElementById("chg").style.color = "white";
            document.getElementById("chg").style.backgroundColor = "black";
        }



        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>