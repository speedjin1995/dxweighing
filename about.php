<!DOCTYPE html>
<html lang="en">
<?php 
    include 'header.php';
?>

<body>
  <?php 
    include 'menu.php';
?>
  <main id="myfullpage">
    <section class="section about1">
      <div class="content">
        <h1 class="title">About Us</h1>
        <p style="
            justify-content: center;
            display: flex;
            font-size: 20px; 
          ">
          DX Resources
        </p>
        <div style="font-size: 15px; padding-top: 70vh;">
          <p style="text-transform: none;
    position: absolute;
    bottom: 15%;
    left: 50%;
    transform: translateX(-50%);">
            DX Resources was founded in 2006. It evolved from General Trading in consumer items to Precision, Retail &
            Industrial Weighing Products. Ever since, its main focus is on sales, service & customer support, other than
            that, weighing, precision, measuring instruments as well as calibration services are also included.
            <br>
          </p>
        </div>
      </div>
    </section>
    <section class="section" style="background-color: black;">
      <div class="content">
        <p
          style="justify-content: center;display: flex;background-color: black;color: white; font-size: 40px;">
          Our Services</p>
        <div class="grid-container2">
          <div class="grid-item2">
            <p style="display: flex;font-size: 1.7vw;">Our Services Can Be Classified Into 16 Major Categories. These Includes:<br><br>
            <ul style="list-style-position: inside; font-size: 1.7vw;">
              <li>Precision Scales & Balance</li>
              <li>R & D Analytical Balance</li>
              <li>Industrial Bench</li>
              <li>Platform & Floor Scales</li>
              <li>Heavy-duty Crane Weigher</li>
              <li>Retails & Supermarkets Scales</li>
              <li>Jewellery & Gems Balance</li>
              <li>Digital / Analog Load Cells</li>
              <li>Electronic Truck Weigh - Bridges</li>
              <li>Indicator Controllers</li>
              <li>Gov. Metrology @ Sirim Verification & Caliliation Jobs</li>
              <li>Internal Verification & Caliliation Jobs</li>
              <li>External Displays, Spare Parts</li>
              <li>Sales & Services of All Kinds of Scales</li>
              <li>Customized Weighing Automation Systems</li>
              <li>Computer Hardware & Weigh - Bridge Software</li>
              <ul>
                <br>
                <p>
          </div>
        </div>
      </div>
    </section>
    <section class="section about">
      <div class="content">
      <div style="padding-left: 18vw; padding-right: 18vw; font-size: 15px;">
          <p style="text-transform: none;">
            DX Resources as an independent resources, we are able to supply dimensional precision instrument, scales
            & balances of other compatible brands as well. We are the spirit of enthusiast which venture and create
            innovative achievements as well as successful products.
            <br>
            <br>As always, we look forward to your continued feedback and support in the development of the most
            extensive range of weighing products and services offered by us.
          </p>
        </div>
</div>
        <footer class="footer" style="padding-top: 200px; padding-left: 0%; padding-right: 0%; position: absolute;">
          <?php 
    include 'footer.php';
?>
        </footer>
    </section>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"
    integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/index.js"></script>
</body>
</html>