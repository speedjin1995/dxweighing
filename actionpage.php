<!DOCTYPE html>
<html lang="en">
<?php 
    include 'header.php';
?>

<body>
  <?php 
    include 'menu.php';
?>
  <section class="section contact" style="top: 20%;">
    <p style="
            justify-content: center;
            display: flex;
            padding-top: 15vh;
            font-size: 20px;
          ">
      Contact Us
    </p>
    <div class="content">

      <h1 class="title">Let's Get In Touch</h1>
    </div>
    <div class="button-container" style="top: 35% bottom: 100%">
      <a class="btn btn-primary" style="background: #25d366"
        href="https://api.whatsapp.com/send?phone=60124135822">Whatsapp Us Now</a>
    </div>
  </section>
  <section class="section" style="height: 50%; padding-left: 10%; padding-right: 10%;">
    <div class="form-container">
      <form name="frmContact" id="" frmContact"" method="post" action="" enctype="multipart/form-data"
        onsubmit="return validateContactForm()">

        <div class="form-grid">
          <div class="input-row">
            <label style="padding-top: 20px;">First Name</label> <span id="userName-info" class="info"></span><br />
            <input type="text" class="input-field" name="userName" id="userName" />
          </div>
          <div class="input-row">
            <label style="padding-top: 20px;">Last Name</label> <span id="lastName-info" class="info"></span><br />
            <input type="text" class="input-field" name="lastName" id="lastName" />
          </div>
        </div>
        <div class="form-grid">
          <div class="input-row">
            <label>Email Address</label> <span id="userEmail-info" class="info"></span><br />
            <input type="text" class="input-field" name="userEmail" id="userEmail" />
          </div>
          <div class="input-row">
            <label>Mobile Number</label> <span id="mobile-info" class="info"></span><br />
            <input type="text" class="input-field" name="mobile" id="mobile" />
          </div>
        </div>
        <div class="input-row">
          <label>Subject</label> <span id="subject-info" class="info"></span><br />
          <input type="text" class="input-field" name="subject" id="subject" />
        </div>
        <div class="input-row">
          <label>Message</label> <span id="userMessage-info" class="info"></span><br />
          <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
        </div>
        <div class="button-container" style="position: relative;
    justify-content: center;">
          <input type="submit" name="send" style="background: rgba(23, 26, 42, 0.8);
            color: white;
            font-size: 1.5rem;
            font-family: 'Montserrat', sans-serif;" class="btn btn-primary" value="Submit" />

          <div id="statusMessage">
            <?php if (! empty($message)) { ?>
            <p class='<?php echo $type; ?>Message'>
              <?php echo $message; ?>
            </p>
            <?php } ?>
          </div>
        </div>
      </form>
    </div>
    <footer class="footer" style="padding-top: 200px; padding-left: 0%; padding-right: 0%;">
      <?php 
    include 'footer.php';
?>
    </footer>
  </section>

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
        if (mail($toEmail, $subject, $content, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
            $type = "success";
        }
    }
}
?>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  <script>
    function validateContactForm() {
      var valid = true;

      $(".info").html("");
      $(".input-field").css('border', '#e0dfdf 1px solid');
      var userName = $("#userName").val();
      var lastName = $("#lastName").val();
      var userEmail = $("#userEmail").val();
      var subject = $("#subject").val();
      var content = $("#content").val();

      if (userName == "") {
        $("#userName-info").html("Required.");
        $("#userName").css('border', '#e66262 1px solid');
        valid = false;
      }
      if (lastName == "") {
        $("#lastName-info").html("Required.");
        $("#lastName").css('border', '#e66262 1px solid');
        valid = false;
      }
      if (userEmail == "") {
        $("#userEmail-info").html("Required.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
      }
      if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail-info").html("Invalid Email Address.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
      }

      if (subject == "") {
        $("#subject-info").html("Required.");
        $("#subject").css('border', '#e66262 1px solid');
        valid = false;
      }
      if (content == "") {
        $("#userMessage-info").html("Required.");
        $("#content").css('border', '#e66262 1px solid');
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