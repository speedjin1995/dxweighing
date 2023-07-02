<!DOCTYPE html>
<html lang="en">

<?php 
    include 'header.php';
?>

<body>
<?php 
    include 'menu.php';
?>
    <section class="section two">
        <div class="content">
            <h1 class="title">Platform Scales</h1>
    </section>
    <div class="grid-container">
        <div class="grid-item">Steel<br>Structure</div>
        <div class="grid-item">Different Sizes,<br>Capacities, Styles and Models</div>
        <div class="grid-item">Functions<br>Depend On The Indicator</div>
    </div>
    <div class="grid-container4">
        <div class="grid-item4">
            <p style="width: 30vw;">Platform Features</p><br>
            <h1 style="width: 30vw;">Stainless Steel Platform Scale</h1><br>
            <p style="width: 30vw;">Stainless steel structure with stainless steel cover<br><br>
Capacity : 150, 300, 500 (kg)<br><br>
Division : 50, 100, 200 (g)<br><br>
Structure size : 400 x 500, 500 x 600, 600 x 800 (mm)<br><br>
Max. Capacity : 200, 500, 750 (kg)<br><br>
        </div>
        <div class="grid-item4" style="width: 39vw;">
            <img src="assets/media/plat_2.jpg" alt="" style="width: 53vw;">
        </div>
    </div>
    <div class="grid-container4">
    <div class="grid-item4" style="width: 6vw;">
            <img src="assets/media/plat_1.jpg" alt="" style="width: 39vw;">
        </div>
        <div class="grid-item4" style="width: 6vw;">
            <p style="width: 30vw;">Indicator</p><br>
            <h1 style="width: 30vw;">Synctronix Electronic ABS Weighing Indicator</h1><br>
            <p style="width: 40vw;">
Big LCD with backlit<br><br>
Accumulation<br><br>
Auto power off<br><br>
Low battery indication<br><br>
Support one analogue load cell platform with up to four 350Ω load cells<br><br>
Powered by either AC 100V ~240V/50Hz~60Hz and DC 9 V/1Aor internal 6V4AH battery pack<br><br>
One standard serial port (COM1) as RS232 and DB9 serial port<br><br>
Front panel key access to basic weighing functions, Zero, Tare, Clear, configurable function, count and print<br><br>
Animal weighing: Peak hold. Data hold, Auto hold</p>
        </div>
    </div>
    <footer class="footer">
    <?php 
    include 'footer.php';
?>
</footer>
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