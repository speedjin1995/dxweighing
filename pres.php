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
        <div class="grid-item">3.1 s<br>0-60 mph</div>
        <div class="grid-item">358 mi<br>Range (EPA est.) </div>
        <div class="grid-item">AWD<br>Dual Motor</div>
        <div class="grid-item">
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" name="3form">
            </form>
        </div>

    </div>
    <p
        style="justify-content: center;display: flex;background-color: black;color: white;padding-bottom: 2vw;font-size: 40px;font-family: Arial, Helvetica, sans-serif;">
        Brand New Interior</p>

    <div id="sec2" style="background-color: rgb(255, 255, 255);">
        <img src="assets/media/3int1.png" alt="" style="width: 100%;">
    </div>


    <div class="grid-container4">
        <div class="grid-item4" style="width: 39vw;">
            <img src="assets/media/3_1.png" alt="" style="width: 53vw;">
        </div>
        <div class="grid-item4" style="width: 120px;">
            <p style="width: 30vw;">Safety</p><br>
            <h1 style="width: 30vw;">Designed for Safety</h1><br>
            <p style="width: 30vw;">Safety is the most important part of every Tesla. We design our vehicles to exceed safety standards. <br><br>

5-Star Rating : <br>
Model 3 achieved NHTSA 5-star safety ratings in every category and subcategory. <br><br>

Top Safety Pick+ : <br>
Model 3 received the IIHS Top Safety Pick+ award, with top ratings in all crashworthiness and front crash prevention categories. 
            </p>
        </div>
    </div>


    <div class="grid-container4">
        <div class="grid-item2">
            <p>All-Wheel Drive</p><br>
            <h1>Dual Motor</h1><br><br>
        </div>
        <div class="grid-item4">
            <p>Tesla All-Wheel Drive has two independent motors for improved redundancy, each with only one moving part for minimal maintenance and maximum durability. Unlike traditional all-wheel drive systems, they digitally control torque to the front and rear wheels for far better handling and traction control. 
            <p>
        </div>
    </div>

    <div class="grid-container4">
        <div class="grid-item4">
            <p>The inside of Model 3 is unlike any other car. You can use your smartphone as a key, and access all driver controls in the central 15-inch touchscreen. The all-glass roof extends from front to back, creating a sense of openness from every seat. 
            <p>
        </div>
        <div class="grid-item2">
            <p>Interior</p><br>
            <h1>Built Around the Driver </h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" style="color: white;background-color: black;"
                    onmouseover="change()" onmouseout="change2()" id="chg" name="3form">
            </form>
        </div>
    </div>


    <div id="sec2" style="background-color: black;">
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
    </div>


    <div class="grid-container4" style="background-color: black;">
        <div class="grid-item2">
            <h1 style="color: white;">Model 3</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" onmouseover="change()" onmouseout="change2()" id="chg"
                    name="3form">
            </form>

        </div>
        <div class="grid-item4">
            <img src="assets/media/3_2.png" alt="" style="width: 100%;">
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
    </script>
</body>

</html>