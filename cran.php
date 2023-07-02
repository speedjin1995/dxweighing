<!DOCTYPE html>
<html lang="en">

<?php 
    include 'header.php';
?>

<body>
<?php 
    include 'menu.php';
?>

    <section class="section three">
        <div class="content">
            <h1 class="title">Crane Weigher</h1>
    </section>
    <div class="grid-container">
        <div class="grid-item">High Accuracy</div>
        <div class="grid-item">Compact Structure</div>
        <div class="grid-item">Equipped with <br>Wireless Communication</div>
    </div>
    <div class="grid-container4">
        <div class="grid-item2">
            <p>Electronic</p><br>
            <h1>Heavy Duty Crane Scale</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Contact Us" style="color: white;background-color: black;"
                    onmouseover="change()" onmouseout="change2()" id="chg" name="xform">
            </form>

        </div>
        <div class="grid-item4">
            <p>With high accuracy,
one side direct display measuring unit which
combine load cell and power supply together. It can be directly hung on the hook of a hoist and
ensure the scale to complete the tasks of loading
and weighing goods synchronously.
            <p>
        </div>
    </div>


    <div id="sec2">
        <div class="thumbnail">
            <img id="txt" src="assets/media/y_2.jpg" alt="" style="width: 100%;">
            <div class="caption">
                <div class="grid-container3">
                    <div class="grid-item3">
                        <p>New wheels and improved handling</p>
                    </div>
                    <div class="grid-item3">
                        <p>0.24 CD</p>
                        <p>Lowest-drag SUV on Earth</p>
                    </div>
                    <div class="grid-item3">
                        <p>Refined exterior styling</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container4">
        <div class="grid-item2">
            <p>Exterior</p><br>
            <h1>Designed for Efficiency </h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" onmouseover="change()" onmouseout="change2()" id="chg"
                    name="xform">
            </form>

        </div>
        <div class="grid-item4">
            <p>With the lowest drag coefficient of any SUV, Model X is built for speed and range. Refined aerodynamic elements work together with new wheels and tires to help you travel farther, with sharper handling and better ride comfort. 
            <p>
        </div>
    </div>

    <div class="grid-container2">
        <div class="grid-item2">
            <img src="assets/media/xext1.jpg" alt="" style="width: 100%;">
        </div>
        <div class="grid-item2">
            <h1>New Wheels and Tires</h1><br>
            <p>New performance tires deliver better handling and ride quality with lower rolling resistance and are paired with new aerodynamic wheels for an updated look.
            <p>
        </div>

        <div class="grid-item2">
            <h1>Optimized Aerodynamics</h1> <br>
            <p>Attention to detail on all exterior surfaces makes Model X the most aerodynamic production SUV on Earth.
            </p>
        </div>
        <div class="grid-item2">
            <img src="assets/media/xext2.jpg" alt="" style="width: 100%;">
        </div>

        <div class="grid-item2">
            <img src="assets/media/xext3.jpg" alt="" style="width: 100%;">
        </div>
        <div class="grid-item2">
            <h1>Refined Styling</h1><br>
            <p>Exterior design combines an iconic look with elegant proportions.
            <p>
        </div>

    </div>


    <div class="grid-container4">
        <div class="grid-item2">
            <h1>Model X</h1><br><br>
            <form action="actionpage.php" method="post" name="form">
                <input type="submit" value="Order Now" onmouseover="change()" onmouseout="change2()" id="chg"
                    name="xform">
            </form>

        </div>
        <div class="grid-item4">
            <img src="assets/media/xext4.jpg" alt="" style="width: 100%;">
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