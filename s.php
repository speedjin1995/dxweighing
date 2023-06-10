<!DOCTYPE html>
<html lang="en">

<?php 
    include 'header.php';
?>

<body>
<?php 
    include 'menu2.php';
?>

    <section class="section three">
        <div class="content">
            <h1 class="title">Model S</h1>
        </div>
    </section>
    <div class="grid-container">
        <div class="grid-item"> 396 mi<br>
            Range (EPA est.) </div>
        <div class="grid-item"> 1.99 s<br>
            0-60 mph</div>
        <div class="grid-item"> 200 mph<br>
            Top Speed </div>
        <div class="grid-item"> 1,020 hp<br>
            Peak Power </div>
        <div class="grid-item">
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" name="sform">
            </form>
        </div>

    </div>
    <p
        style="justify-content: center;display: flex;background-color: black;color: white;padding-bottom: 2vw;font-size: 40px;font-family: Arial, Helvetica, sans-serif;">
        Interior of the Future</p>

    <div id="sec2" style="background-color: black;">
        <img src="assets/media/inter_s.jpg" alt="" style="width: 100%;">
    </div>

    <div class="grid-container2">
        <div class="grid-item2">
            <img src="assets/media/int1_s.jpg" alt="" style="width: 100%;">
        </div>
        <div class="grid-item2">
            <h1>Stay Connected</h1><br>
            <p>Instantly connect with multi-device Bluetooth, or fast charge devices with wireless and 36-watt USB-C charging.<p>
        </div>

        <div class="grid-item2">
            <h1>Immersive Sound</h1> <br>
            <p>A 22-speaker, 960-watt audio system with Active Road Noise Reduction offers immersive listening and studio-grade sound quality.</p>
        </div>
        <div class="grid-item2">
            <img src="assets/media/int2_s.jpg.png" alt="" style="width: 100%;">
        </div>

        <div class="grid-item2">
            <img src="assets/media/int3_s.jpg" alt="" style="width: 100%;">
        </div>
        <div class="grid-item2">
            <h1>Room for Everything</h1><br>
            <p>With front and rear trunks and fold-flat seats you can fit your bike without taking the wheel off—and your luggage too.<p>
        </div>

    </div>

    <div id="sec2">
        <div class="thumbnail">
            <img id="txt" src="assets/media/s_2.jpg" alt="" style="width: 100%;">
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
    </div>


    <div class="grid-container4">
        <div class="grid-item2">
            <p>Plaid</p><br>
            <h1>Beyond Ludicrous</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" style="color: white;background-color: black;" onmouseover="change()" onmouseout="change2()" id="chg" name="sform">
            </form>

        </div>
        <div class="grid-item4">
            <p>Model S Plaid has the quickest acceleration of any vehicle in production. Updated battery architecture for all Model S trims enables back-to-back track runs without performance degradation. 
            <p>
        </div>
    </div>


    <div class="grid-container4">
        <div class="grid-item4" style="width: 24vw;">
            <h1>Heading</h1><br>
            <p>Model S is built from the ground up as an electric vehicle, with a high-strength architecture and floor-mounted battery pack for incredible occupant protection and low rollover risk. Every new Model S includes Tesla’s latest active safety features, such as Automatic Emergency Braking, at no extra cost. 
            <p>
        </div>
        <div class="grid-item4">
            <img src="assets/media/s_3.png" alt="" style="width: 100%;">
        </div>
    </div>


    <div class="grid-container4">
        <div class="grid-item2">
            <p>Autopilot</p><br>
            <h1>Future of driving</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" onmouseover="change()" onmouseout="change2()" id="chg" name="sform">
            </form>
        </div>
        <div class="grid-item4">
            <p>Autopilot enables your car to steer, accelerate and brake automatically within its lane under your active supervision, assisting with the most burdensome parts of driving. With over-the-air software updates, the latest enhancements are available instantly. 
            <p>
        </div>
    </div>

    <div style="/*! text-align: center; */padding-left: 18vw;padding-right: 18vw;padding-top: 23px;padding-bottom: 23px;font-size: 15px;">
        <h1>Features</h1>
        <p>Full Self-Driving capability introduces additional features and improves existing functionality to make your car more capable over time.</p>
    </div>
    <div id="sec2" style="background-color: black;">
        <img src="assets/media/s_4.jpg" alt="" style="width: 100%;">
    </div>

    <div class="grid-container4">
        <div class="grid-item2">
            <h1>Model S</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" onmouseover="change()" onmouseout="change2()" id="chg" name="sform">
            </form>

        </div>
        <div class="grid-item4">
            <img src="assets/media/s_5.jpg" alt="" style="width: 100%;">
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
        function change2(){
            document.getElementById("chg").style.color = "white";
            document.getElementById("chg").style.backgroundColor = "black";
        }
    </script>
</body>

</html>