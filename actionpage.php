<!DOCTYPE html>
<html lang="en">
<?php 
    include 'header.php';
?>
<body>
  <?php 
    include 'menu.php';
?>
  <div style="position: relative">
    <section class="section contact" style="
          top: 20%;
          height: 100vh;
          width: 100%;
          display: flex;
          flex-direction: column;
        ">
      <p style="
            justify-content: center;
            display: flex;
            padding-top: 15vh;
            font-size: 20px;
          ">
        Contact Us
      </p>
      <h1 class="title" style="text-align: center">Let's Get In Touch</h1>
      <div class="button-container" style="position: relative; top: 52%">
        <a class="btn btn-primary" style="background: #25d366"
          href="https://api.whatsapp.com/send?phone=60124135822">Whatsapp Us Now</a>
      </div>
    </section>
    <div style="
          order: 2;
          height: auto;
          width: 100%;
          display: flex;
          flex-direction: column;
          padding-left: 10%;
          padding-right: 10%;
        ">
      <p style="
            position: relative;
            font-size: 40px;
            padding-top: 5vh;
            padding-bottom: 5vh;
            margin-left: auto;
            margin-right: auto;
          "></p>
      <h1 class="title" style="padding-top: 20%; text-align: center">
        How Can We Help?
      </h1>
      <p style="
            justify-content: center;
            display: flex;
            font-size: 18px;
            text-align: center;
            padding-top: 2vh;
            padding-bottom: 3vh;
          ">
        Contact us to request a quote or to schedule a consultation with our
        team.
      </p>
      <div class="form-container">
        <form class="custom-form" action="php/contact.php" name="contactform" id="contactform">
          <div class="form-grid">
            <div class="input-row">
              <label style="padding-top: 20px">First Name</label>
              <span id="userName-info" class="info"></span><br />
              <input type="text" class="input-field" name="userName" id="userName" />
            </div>
            <div class="input-row">
              <label style="padding-top: 20px">Last Name</label>
              <span id="lastName-info" class="info"></span><br />
              <input type="text" class="input-field" name="lastName" id="lastName" />
            </div>
          </div>
          <div class="form-grid">
            <div class="input-row">
              <label>Email Address</label>
              <span id="userEmail-info" class="info"></span><br />
              <input type="text" class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
              <label>Mobile Number</label>
              <span id="mobile-info" class="info"></span><br />
              <input type="text" class="input-field" name="mobile" id="mobile" />
            </div>
          </div>
          <div class="input-row">
            <label>Subject</label> <span id="subject-info" class="info"></span><br />
            <input type="text" class="input-field" name="subject" id="subject" />
          </div>
          <div class="input-row">
            <label>Message</label>
            <span id="userMessage-info" class="info"></span><br />
            <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
          </div>
          <div class="button-container" style="position: relative; justify-content: center">
            <input type="submit" name="send" style="
                  background: rgba(23, 26, 42, 0.8);
                  color: white;
                  font-size: 1.5rem;
                  font-family: 'Montserrat', sans-serif;
                " class="btn btn-primary" value="Submit" />

            <div id="statusMessage">
              <?php if (! empty($message)) { ?>
              <p class="<?php echo $type; ?>Message">
                <?php echo $message; ?>
              </p>
              <?php } ?>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div style="
          order: 3;
          height: 100vh;
          width: 100%;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
          display: flex;
          flex-direction: column;
        ">
      <div style="top: auto; padding-top: 10%">
        <h1 class="title" style="padding-top: 20%; text-align: center">
          Office
        </h1>
        <div style="
              padding-top: 2%;
              padding-left: 15%;
              padding-right: 15%;
              position: relative;
            ">
          <div class="google-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3972.040221774075!2d100.38185207472789!3d5.410845335092811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjQnMzkuMCJOIDEwMMKwMjMnMDMuOSJF!5e0!3m2!1sen!2smy!4v1688883915118!5m2!1sen!2smy"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <p style="
              display: flex;
              font-size: 18px;
              text-align: left;
              padding: 0 15% 20px 15%;
              font-weight: bold;
            ">
          DX Resources Store
        </p>
        <p style="
              display: flex;
              font-size: 16px;
              text-align: left;
              padding: 0 15% 20px 15%;
            ">
          No. 27, Ground Floor, Jalan Bagan 23, Taman Bagan, 13400
          Butterworth, Penang.
        </p>
        <p style="
              display: flex;
              font-size: 16px;
              text-align: left;
              padding: 0 15% 20px 15%;
            ">
          +6012- 413 5822
        </p>
        <p style="
              display: flex;
              font-size: 16px;
              text-align: left;
              padding: 0 15% 20px 15%;
              text-transform: none;
            ">
          admin@dx-resources.com
        </p>
      </div>
      <footer class="footer" style="z-index: 9; margin-top: auto">
        <?php 
    include 'footer.php';
?>
      </footer>
    </div>
  </div>
  <?php
function strip_crlf($string)
{
    return str_replace("\r\n", "", $string);
}

if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $lastname = $_POST["lastName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"] . " My contact number: ". $_POST["mobile"];

    $toEmail = "admin@dx-resources.com";
    // CRLF Injection attack protection
    $name = strip_crlf($name);
    $email = strip_crlf($email);
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        // appending \r\n at the end of mailheaders for end
        $mailHeaders = "From: " . $name . " ". $lastname . "<" . $email . ">\r\n";
    if (mail($toEmail, $subject, $content, $mailHeaders)) { $message = "Your
    contact information is received successfully."; $type = "success"; } } } ?>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  <script>
    function validateContactForm() {
      var valid = true;

      $(".info").html("");
      $(".input-field").css("border", "#e0dfdf 1px solid");
      var userName = $("#userName").val();
      var lastName = $("#lastName").val();
      var userEmail = $("#userEmail").val();
      var subject = $("#subject").val();
      var content = $("#content").val();

      if (userName == "") {
        $("#userName-info").html("Required.");
        $("#userName").css("border", "#e66262 1px solid");
        valid = false;
      }
      if (lastName == "") {
        $("#lastName-info").html("Required.");
        $("#lastName").css("border", "#e66262 1px solid");
        valid = false;
      }
      if (userEmail == "") {
        $("#userEmail-info").html("Required.");
        $("#userEmail").css("border", "#e66262 1px solid");
        valid = false;
      }
      if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail-info").html("Invalid Email Address.");
        $("#userEmail").css("border", "#e66262 1px solid");
        valid = false;
      }

      if (subject == "") {
        $("#subject-info").html("Required.");
        $("#subject").css("border", "#e66262 1px solid");
        valid = false;
      }
      if (content == "") {
        $("#userMessage-info").html("Required.");
        $("#content").css("border", "#e66262 1px solid");
        valid = false;
      }
      return valid;
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"
    integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/index.js"></script>
</body>
</html>