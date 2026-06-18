		<!-- here's a modal (overlay) -->
		<!-- Use any element to open/show the overlay navigation menu -->
		<p>Tap or click <button class="openModalButton" onclick="openModal()">here</button> to to contact us with your questions!</p>
		<!-- The overlay -->
		<div id="myNav" class="overlay">
			<!-- Button to close the overlay navigation -->
  			<a href="javascript:void(0)" class="closebtn" onclick="closeModal()">&times;</a>

			<!-- Overlay content -->
  			<div class="overlay-content">
    			<!-- start services form -->
				<!-- The flexible grid (contact us) -->
				<script>
					function onSubmit(token) {
     				document.getElementById("contact-form").submit();
   					}
 				</script>

	    		<div class="images" style="height:200px;"></div>
					<div class="container">
						<h3>Please feel free to submit the form below to receive information &amp; a price quote today!</h3>
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
      							<option value="seo">Search Engine Optimization</option>
    						</select>

			    			<label for="subject">Subject</label>
    						<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"  required></textarea>
							<!-- <button class="g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>Submit</button> -->

			    			<div class="g-recaptcha brochure__form__captcha" data-sitekey="6Ld14acUAAAAAJkARsG15-a5f6_Nx9QSxp1Ejllk"></div>
							<input type="submit" value="Submit"> &nbsp; <input type="reset" value="Clear">
  						</form>
        			</div> 
					<!-- end services form -->
				</div>
				<script>
					function openModal() {
  						document.getElementById("myNav").style.width = "100%";
					}

					function closeModal() {
  						document.getElementById("myNav").style.width = "0%";
					}
				</script>
			</div>
			<!-- end modal (overlays) -->