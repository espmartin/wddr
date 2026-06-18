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
    header('Location: /client/login.php');
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
	    <h2>Reno Custom Cleaning - Client Area:</h2>
		<div class="images" style="height:200px;"></div>
		<h3>General Profile:</h3>
		<?php
            echo "<p>Hello You!</p>";
            /* echo "<p>Your username is: ";
            echo $_SESSION['username'];
            echo "<br>";
            echo "Your password is: ";
            echo $_SESSION['password'];
            echo "</p>" */
        ?>
		<p>Here's a sample of the detailed reports that I'll be going over to track the progress of your site's climb up the SERPs:</p>
		<img id="traffic-image" style="width: 5em; cursor: hand; transition: 1s;" onMouseOver="openTraffic()" onMouseOut="closeTraffic()" src="/images/traffic/sites/reno/traffic-stats.png">
		<script>
					function openTraffic() {
  						document.getElementById("traffic-image").style.width = "100%";
					}

					function closeTraffic() {
  						document.getElementById("traffic-image").style.width = "5em";
					}
				</script>
		<br>
		<br>
		<div class="seo-grid">seo-grid</div> 
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- start sevices form -->
		<!-- The flexible grid (contact us) -->
		<script>
			function onSubmit(token) {
     		document.getElementById("reno-form").submit();
   			}
 		</script>

	    <div class="images" style="height:200px;"></div>
		<div class="container">
			<form id="reno-form" method="post" action=/contact/clients.php autocomplete="on">
    			<label for="servicesNeeded">Requests:</label>
    			<textarea id="servicesNeeded" name="servicesNeeded" placeholder="I'd like to update my homepage/contact us page with.." style="height:200px"></textarea>
    			<label for="web-or-seo">Web Work, or SEO Work?</label>
    			<select id="services" name="services" required>
      				<option value="update-content">update existing content page</option>
      				<option value="add-photos">add photos</option>
      				<option value="seo">Search Engine Optimisation</option>
    			</select>
    			<label for="notes">Notes:</label>
    			<textarea id="notes" name="notes" placeholder="Notes or comments.." style="height:200px"></textarea>
				<input type="submit" value="Submit"> &nbsp; <input type="reset" value="Clear">
  			</form>
<!--				<form action="/upload/upload.php" method="post" enctype="multipart/form-data">
					<label for="fileToUpload">Select image to upload:</label>
  					<input type="file" name="fileToUpload" id="fileToUpload">
  					<input type="submit" value="Upload Image" name="submit">
				</form>
-->
        </div> 
		<!-- end services form -->
	</article>
</section>