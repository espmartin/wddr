<!-- The flexible grid (contact us) -->
<main class="row" id="main-content">
<?php require_once('../docs/about.php'); ?>
  	<article class="main">
	    <h2>Contact Us!</h2>
	    <div class="images images--tall" role="presentation"></div>
	    <h3>Ask Away!</h3>
		<div class="container">
			<form id="contact-form" method="post" action="get.php" autocomplete="on">
				<label for="name">Full Name</label>
    			<input type="text" id="name" name="name" placeholder="Your name.." required>
				<label for="email">Email address</label>
			    <input type="email" id="email" name="email" placeholder="Your email address.." required>
				<label for="phone">Phone number</label>
			    <input type="tel" id="phone" name="phone" placeholder="Your phone number.." required>
    			<label for="services">Services</label>
    			<select id="services" name="services" required>
      				<option value="">Choose an option</option>
      				<option value="creation">Website Creation</option>
      				<option value="maintenance">Maintain Existing Site</option>
      				<option value="seo">Search Engine Optimisation</option>
    			</select>

    			<label for="subject">Subject</label>
    			<textarea id="subject" name="subject" class="textarea-tall" placeholder="Write something.." required></textarea>

			    <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Ld14acUAAAAAJkARsG15-a5f6_Nx9QSxp1Ejllk"></div>
				<button type="submit">Submit</button>
				<button type="reset">Clear</button>
  			</form>
            <hr>
		</div>
	</article>
</main>