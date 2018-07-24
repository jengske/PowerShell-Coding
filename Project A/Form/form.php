<?php include('form_process.php'); ?>
<link rel="stylesheet" href="css/form.css" type="text/css">
<div class="body">
    <div class="header"><img id="logo" src="img/logo.png" alt="My Company logo" style="width:100px;height:800px;"></div>
    <div class="container">  
      <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3 id="requestTitle">Sample Form</h3>
        <h4>Fill in the form, and get reply with in 2 hours!</h4>
          <p id="policy">your slogan or policy<br></p>
          <h4>Visitor information.</h4>
        <fieldset>
          <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
          <span class="error"><?= $name_error ?></span>
        </fieldset>
        <fieldset>
          <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
          <span class="error"><?= $email_error ?></span>
        </fieldset>
        <fieldset>
          <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
          <span class="error"><?= $phone_error ?></span>
        </fieldset>
        <fieldset>
          <input placeholder="Your Website" type="text" name="url" value="<?= $url ?>" tabindex="4" >
          <span class="error"><?= $url_error ?></span>
        </fieldset>
          <h4>Reason Wireless access.</h4>
        <fieldset>
          <textarea value="<?= $message ?>" name="message" tabindex="5">
          </textarea>
        </fieldset>
        <fieldset>
          <button name="request" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
        <div class="success"><?= $success ?></div>
      </form>
    </div>
    <div class="footer"></div>
</div>
