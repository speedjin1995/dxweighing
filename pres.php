<!DOCTYPE html>
<html lang="en">

<?php 
    include 'header.php';
?>

<body>
<?php 
    include 'menu2.php';
?>
    <section class="section one">
        <div class="content">
            <h1 class="title">Precision Scales</h1>
    </section>
  
    <div class="grid-container">
        <div class="grid-item">Anti-overload<br>Function</div>
        <div class="grid-item">LCD Display<br>with Backlight</div>
        <div class="grid-item">Operating Temperature<br>10 ℃ ~ 60 ℃</div>
        <div class="grid-item">
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Contact Us" name="3form">
            </form>
        </div>
    </div>
    <p
        style="justify-content: center;display: flex;background-color: black;color: white;padding-bottom: 2vw;font-size: 40px;font-family: Arial, Helvetica, sans-serif;">
        Product Features</p>
    <!-- <div id="sec2" style="background-color: rgb(255, 255, 255);">
        <img src="assets/media/3int1.png" alt="" style="width: 100%;">
    </div> -->
    <div class="grid-container4">
        <div class="grid-item4" style="width: 39vw;">
            <img src="assets/media/pres_1.jpg" alt="" style="width: 53vw;">
        </div>
        <div class="grid-item4" style="width: 120px;">
            <!-- <p style="width: 30vw;">Safety</p><br>
            <h1 style="width: 30vw;">Designed for Safety</h1><br> -->
            <p style="width: 30vw;">High-precision straining resistance sensor<br><br>
            Strong anti-overload function<br><br>
            Optional power saving mode<br><br>
            LCD display with backlight<br><br>
            Tare & simple count function<br><br>
            Overweight indication<br><br>
            Low battery indication<br><br>
            </p>
        </div>
    </div>
    <div class="grid-container4">
        <div class="grid-item2">
            <p>Sensor</p><br>
            <h1>High-precision Straining <br>Resistance</h1><br><br>
        </div>
        <div class="grid-item4">
            <p>A high-precision straining resistance sensor is a key component in a precision scale that enables accurate measurement of weight or mass. It works on the principle of strain gauge technology, which utilizes the change in electrical resistance of a material under strain or pressure. 
            <p>
        </div>
    </div>
    <div class="grid-container4">
        <div class="grid-item4">
            <p>A strong anti-overload function in a precision scale refers to a feature that protects the scale from damage or inaccurate readings when excessive weight is applied to it. It is designed to ensure the scale's integrity and maintain accurate measurements within its specified weight range. 
            <p>
        </div>
        <div class="grid-item2">
            <p>Function</p><br>
            <h1>Strong Anti-overload</h1><br><br>
        </div>
    </div>
    <!-- <div id="sec2" style="background-color: black;">
        <div class="thumbnail">
            <img id="txt" src="assets/media/3_3.jpg" alt="" style="width: 100%;">
            <div class="caption">
                <div class="grid-container3">
                    <div class="grid-item3">
                        1,020 hp<br>
                        Peak Power
                    </div>
                    <div class="grid-item3">
                        <p>9.23 s</p>
                        <p>@155 mph 1/4 mile</p>
                    </div>
                    <div class="grid-item3">
                        <p>1.99 s</p>
                        <p>0-60 mph</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="grid-container4" style="background-color: white;">
        <div class="grid-item2">
            <h1 style="color: black;">Precision Scales</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Contact Us" style="color: white;background-color: black;" onmouseover="change()" onmouseout="change2()" id="chg"
                    name="3form">
            </form>
        </div>
        <div class="grid-item4">
            <img src="assets/media/pres_2.jpg" alt="" style="width: 100%;">
        </div>
    </div> -->
    <div class="grid-container4">
        <div class="grid-item4" style="width: 6vw;">
            <img src="assets/media/pres_2.jpg" alt="" style="width: 39vw;">
        </div>
        <div class="grid-item4" style="width: 3vw;">
            <p style="font-size: 2em; width: 30vw;"><b>Product</b> Specs</p><br>
            <p style="width: 30vw;">_____<br><br>
            <b>Weight</b><br><br>
            1.38kg<br><br>
            _____<br><br>
            <b>Material</b><br><br>
            ABS Material Housing<br><br>
            _____<br><br>
            <b>Scale Size</b><br><br>
            270 x 170 x 80 mm<br><br>
            _____<br><br>
            <b>Units</b><br><br>
            g, ct, oz, dwt, tola, lb, tmr<br><br>
            _____<br><br>
            <b>Power Supply</b><br><br>
            Rechargeable Battery 6V + Adapter 12V1AH<br><br>
        </div>
    </div>
    <!-- <?php 
    include 'footer.php';
?> -->
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
    </script>
</body>
</html>