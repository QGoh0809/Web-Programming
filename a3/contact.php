<?php  include('tools.php'); ?>

<?php 
     include 'header.php'; 
   ?>

<section class="feature-section-2">
            <div class="flex-container container">

<form id ="contact" action="<?= $_SERVER['PHP_SELF'];  ?> "  method="POST">
    <h3>    Get in touch    </h3>

<fieldset>
    <input placeholder="Your Name" type="text" tabindex="1" name="name" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>" autofocus required>
    <span class="error"><?= $name_error ?></span>
</fieldset>
    
    <fieldset>
    
    <input placeholder="Your Email Address" type="email" tabindex="2" name="email"  value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required >
    <span class="error"><?= $email_error ?></span>
    </fieldset>
    
    <fieldset>
    <input placeholder="Your Phone Number" type="tel" tabindex="3" name="phone" value="<?php if(isset($_COOKIE["phone"])) { echo $_COOKIE["phone"]; } ?>" >
    <span class="error"><?= $phone_error ?></span>
    </fieldset>
    
    <fieldset>
    <textarea placeholder="Type your Subject here..." tabindex="4"  type="text" name="subject"  value="<?= $subject ?>" ></textarea>
    </fieldset>
    
    <fieldset>
    <textarea placeholder="Type your Message here..." tabindex="5"  type="text" name="message"  value="<?= $message ?>" ></textarea>
    </fieldset>
    
    <fieldset>
<?php
if(isset($_COOKIE['remember'])) {
    echo "<input type=\"checkbox\" id=\"remember\" name=\"remember\" checked=\"checked\">";
} else {
    echo "<input type=\"checkbox\" id=\"remember\" name=\"remember\" >";
}
?>    </fieldset>

    <fieldset>
    <button name="submit" type="submit" id="contact-submit" data-submit="....sending">Submit</button>
    </fieldset>

    <div class="success"><?= $success ?></div>
    
    </form>


</section>





<?php 
     include 'footer.php'; 
   ?>