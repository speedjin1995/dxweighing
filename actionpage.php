<!DOCTYPE html>
<html lang="en">
<?php 
    include 'header.php';
?>

<body>
  <?php 
    include 'menu.php';
?>
  <section class="section" style="height: 50vh;">
    <p style="
            justify-content: center;
            display: flex;
            padding-top: 5.5em;
            font-size: 20px;
          ">
      Contact Us
    </p>
    <div class="content">

      <h1 class="title">Let's Get In Touch</h1>
    </div>
    <div class="button-container" style="top: 22em; bottom: 100%">
      <a class="btn btn-primary" style="background: #25d366"
        href="https://api.whatsapp.com/send?phone=60124135822">Whatsapp Us Now</a>
    </div>
  </section>
  <section class="section" style="height: 75vh;">
    <div class="form-container">
      <form name="frmContact" id="" frmContact"" method="post" action="" enctype="multipart/form-data"
        onsubmit="return validateContactForm()">

        <div class="form-grid">
          <div class="input-row">
            <label style="padding-top: 20px;">First Name</label> <span id="userName-info" class="info"></span><br />
            <input type="text" class="input-field" name="userName" id="userName" />
          </div>
          <div class="input-row">
            <label style="padding-top: 20px;">Last Name</label> <span id="userName-info" class="info"></span><br />
            <input type="text" class="input-field" name="userName" id="userName" />
          </div>
        </div>
        <div class="form-grid">
          <div class="input-row">
            <label>Email Address</label> <span id="userEmail-info" class="info"></span><br />
            <input type="text" class="input-field" name="userEmail" id="userEmail" />
          </div>
          <div class="input-row">
            <label>Mobile Number</label> <span id="userEmail-info" class="info"></span><br />
            <input type="text" class="input-field" name="userEmail" id="userEmail" />
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
   font-family: 'Montserrat', sans-serif;
" class="btn btn-primary" value="Send Message" />

          <div id="statusMessage">
            <?php if (! empty($message)) { ?>
            <p class='<?php echo $type; ?>Message'>
              <?php echo $message; ?>
            </p>
            <?php } ?>
          </div>
        </div>
      </form>
  </section>

  <footer class="footer">
    <?php 
    include 'footer.php';
?>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

  <script>
    function validateContactForm() {
      var valid = true;

      $(".info").html("");
      $(".input-field").css('border', '#e0dfdf 1px solid');
      var userName = $("#userName").val();
      var userEmail = $("#userEmail").val();
      var subject = $("#subject").val();
      var content = $("#content").val();

      if (userName == "") {
        $("#userName-info").html("Required.");
        $("#userName").css('border', '#e66262 1px solid');
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
</body>

</html>