<?php
/*
 * Copyright 2021 Martin Espericueta <espmartin@espmartin-Inspiron-7786>
 * 
 * This web page is mine :)
 * 
 * 
 */
?>
<?php
  session_start();
  if($_SESSION['login'] != "OK")
  {
    header('Location: login.php');
    exit();
  }
?>  
<!-- The flexible grid (content) -->
<section class=row>
	<article class="side">
    	<h2>Services:</h2>
    	<div class="images" style="height:200px;"></div>
    	<p>Enjoy my afordable web site designs, custom made to suite your needs!</p>
		<p>Portfolio sites I've created:</p>
        <ul>
            <li>
				<a href="https://renocustomcleaning.webdesignsdoneright.com/" target="_blank"><img class="portfolio-image" src="/images/rcc-thumbnail.png" width="70%"></a>
			</li>
        </ul>
    	<h3>Thank You!</h3>
    	<p></p>
    	<div class="images" style="height:60px;"></div><br>
    	<div class="images" style="height:60px;"></div><br>
    	<div class="images" style="height:60px;"></div>
	</article>
  	<article class="main">
	    <h2>Client Area:</h2>
		<div class="images" style="height:200px;"></div>
		<br>
		<br>
		<br>
		<br>
		<br>
        <?php
            echo "<p>You have successfully logged in!</p>";
            echo "<p>Your username is: ";
            echo $_SESSION['username'];
            echo "<br>";
            echo "Your password is: ";
            echo $_SESSION['password'];
            echo "</p>"
        ?>
	    </div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h4>Here's What I'll Do For You:</h4>
		<p>Please feel free to submit the form below to receive information &amp; a price quote today!</p>
		<form action="/upload/upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
		<!-- start sevices form -->
		<!-- The flexible grid (contact us) -->
		<script>
			function onSubmit(token) {
     		document.getElementById("contact-form").submit();
   			}
 		</script>

	    <div class="images" style="height:200px;"></div>
		<div class="container">
			<form id=contact-form method="post" action=/contact/get.php autocomplete="on">
				<label for="name">Full Name</label>
    			<input type="text" id="name" name="name" placeholder="Your name.." required>
				<label for="email">Email address</label>
			    <input type="text" id="email" name="email" placeholder="Your email address.." required>
				<label for="phone">Phone number</label>
			    <input type="text" id="phone" name="phone" placeholder="Your phone number.." required>
    			<label for="services">Services</label>
    			<select id="services" name="services" required>
      				<option value="creation">Website Creation</option>
      				<option value="maintenance">Maintain Existing Site</option>
      				<option value="seo">Search Engine Optimisation</option>
    			</select>

    			<label for="subject">Subject</label>
    			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"  required></textarea>
				<!-- <button class="g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>Submit</button> -->

			    <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Ld14acUAAAAAJkARsG15-a5f6_Nx9QSxp1Ejllk"></div>
				<input type="submit" value="Submit"> &nbsp; <input type="reset" value="Clear">
  			</form>
        </div> 
		<!-- end services form -->

    	<h2>Are you looking for a &quot;One-Stop Shop&quot;?</h2>
    	<h3>Other Services</h3>
    	<div class="images" style="height:200px;"></div>
    	<p>I also offer our webmaster services in the Audio/Video area. If your business or church, or whaterver you're doing, requires live online streaming, I can help support that for you! From basic setup, to auditing, to just giving our recommendations on what tools, services you'll need to get your live streams flowing!</p>
	</article>
</section>
