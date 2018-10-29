<!doctype html>
<html class="no-js" lang="">

<head>
  <title>Contact Us</title>
  <?php include('include/head.php');?>
</head>

<body class="contact-body">
  <?php include('include/nav.php');?>
   <section class="manual__feed contact-section" id="project3">
    <div class="container">
      <div class="col-sm-6">
        <h2 class="heading-tertiary">
          Contact Us
        </h2>
        <span class="border"></span>
        <h5>Want to get in touch? We would love that!</h5>

	<p>The Sqwash, LLC</br>
	Louisville, Kentucky</br>
	<a href="tel:1-502-909-0750" class="thesqwash">1-502-909-0750</a>
	
 </p>
      </div>
      <div class="col-sm-6">
        <form class="contact100-form validate-form"  id="ajax-contact" method="post" action="SendGrid-API/send-email.php">
        <div class="wrap-input100 validate-input" data-validate="Please enter your name">
          <input id="name" class="input100" type="text" name="name" placeholder="Full Name" autocomplete="off" required>
          <span class="focus-input100" ></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
          <input id="email" class="input100" type="email" name="email" placeholder="E-mail" autocomplete="off" required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
          <input id="number" class="input100" type="number" name="phone" placeholder="Phone" autocomplete="off" required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
          <textarea class="input100" name="message" placeholder="Your Message" id="message" required></textarea>
          <span class="focus-input100"></span>
          <!-- <div class="loader123">
          <img src="img/oval.svg" alt="oval">
        </div> -->
        </div>
        
 	      <div class="success-msg">
              <div id="form-messages">
            </div>
            <div class="success-text">
              <i class="em em-white_check_mark"></i>
            <p class="thanks"> Thank you for messaging us! We shall reply you within 24 hrs.</p>
            </div>
        </div>
        <div class="container-contact100-form-btn">
          <button type="submit" class="contact100-form-btn">
            <span>
              <i class="fas fa-paper-plane"></i>
              Send
            </span>
          </button>
        </div>
       
      </form>
    </div>
  </div>
</div>
     
      </div>


    </div><!-- END OF TOGGLE -->
  </section>
  <footer class="manual__feed">
    <?php include('include/footer.php');?>
  </footer>
  
  <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script> 
  <script src="app.js"></script>
  <script>
$('#ajax-contact').submit(function() {
    $.ajax({
        url: '/mailer.php',
        beforeSend: function() {  },
        complete: function() { $('.loader').hide(); }
    });
    return false;
});

</script>
  <script src="js/scripts.js"></script>
  <script src="js/jquery.fullpage.min.js"></script>
<!--   <script type="text/javascript">
    function scrollToElementD(){
    var topPos = document.getElementById('cd-faq').offsetTop;
}
scrollToElementD();
  </script> -->
   <script>
    $(document).ready(function(){


          $('.container-contact100-form-btn').on("click",function(){
            var name = $("input[name='name']").val();
            var email = $("input[name='email']").val();
            var phone = $("input[name='phone']").val();
            var message = $("textarea[name='message']").val();

           document.cookie = "name = "+name;
            document.cookie = "email ="+email;
            document.cookie = "phone = "+phone;
            document.cookie = "message = "+message;
          });
             });
        </script>
</body>

</html>