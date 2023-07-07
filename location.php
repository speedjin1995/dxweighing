<!DOCTYPE html>
<html lang="en">
<?php 
    include 'header.php';
?>

<body>
  <?php 
    include 'menu.php';
?>
  <main id="myfullpage" style="overflow: hidden;">
    <section class="section" style="height: 22vh;">
      <div class="content">
        <h1 class="title">Find Us</h1>
        <p style="
            justify-content: center;
            display: flex;
            font-size: 20px; 
          ">
          DX Resources Store
        </p>
        <div style="padding-top: 2%; padding-left: 10%; padding-right: 10%;">
          <div class="google-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0416217027723!2d100.38180917472786!3d5.410632135094899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac447ddd24a35%3A0xfb9dc85cc543368f!2sDX%20Resources!5e0!3m2!1sen!2smy!4v1688716442717!5m2!1sen!2smy"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
</section>
      <section style="height: 20px;">
      <footer class="footer" style="position: absolute; z-index: 9; padding-bottom: 1.5%;">
          <?php 
    include 'footer.php';
?>
      </footer>
</section>

  </main>
  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"
      integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="assets/js/index.js"></script>
</body>
</html>