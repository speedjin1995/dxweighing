<!DOCTYPE html>
<html>
  <?php 
    include 'header.php';
?>

  <body>
    <?php 
    include 'menu.php';
?>

    <main id="myfullpage">
      <section onclick="location.href='pres.php';" class="section one">
        <div class="content">
          <h1 class="title">Precision Scales</h1>
        </div>
        <div class="button-container">
          <a class="btn btn-primary" href="actionpage.php">Contact Us</a>
        </div>
      </section>
      <section onclick="location.href='plat.php';" class="section two">
        <div class="content">
          <h1 class="title">Platform Scales</h1>
        </div>
        <div class="button-container">
          <a class="btn btn-primary" href="actionpage.php">Contact Us</a>
        </div>
      </section>
      <section onclick="location.href='cran.php';" class="section three">
        <div class="content">
          <h1 class="title">Crane Weigher</h1>
        </div>
        <div class="button-container">
          <a class="btn btn-primary" href="actionpage.php">Contact Us</a>
        </div>
      </section>
      <section onclick="location.href='weig.php';" class="section four">
        <div class="content">
          <h1 class="title">Weigh-Bridges</h1>
        </div>
        <div class="button-container">
          <a class="btn btn-primary" href="actionpage.php">Contact Us</a>
        </div>
      </section>
      <section onclick="location.href='others.php';" class="section five">
        <div class="content">
          <h1 class="title">Others</h1>
        </div>
        <div class="button-container">
          <a class="btn btn-primary" href="actionpage.php">Contact Us</a>
        </div>
        <footer class="footer" style="position: absolute">
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
