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
	/* not needed on this template page */
	
	session_start();
  	if($_SESSION['login'] != "OK")
  	{
    	header('Location: /client/templates/');
    	exit();
  	}
	
?>  
<style>
	/* graphing with style ;) */
	/* cool, but not using this yet... */
	/*
	:root {
  		color-scheme: light dark;
		}
	*/
	ul.graph {
	 	position: relative;
	 	margin: 0;
		padding: 0;
		list-style-type: none;
		border: 1px solid rgba(169, 169, 172, 0.5);
	}
	ul.graph li {
		margin-bottom: .5em;
		padding: .2em;
		background: #600;
		border: 1px solid rgba(169, 169, 172, 0.5);
		border-right-width: 1px;
		border-right-style: double;
		border-right-color: #000;
		border-radius: 0;
		background-color: transparent;
		color: #000;
		font-size: 0.99em;
    }
	ul.graph li.googleVisits {
		background-color: rgba(241, 239, 224, 0.7); width: 82.7%;
	}
	ul.graph li.googleVisits::before {
		/* content: "→ "; */
		content: "↑ ";
		/* content: "↓ "; */
	}
	ul.graph li.yahooVisits {
		width: 10.3%;
		white-space: nowrap;
  		overflow: hidden;
  		text-overflow: "----"; 
		background-image: linear-gradient(to right, rgba(241, 239, 224, 1), rgba(241, 239, 224, 1));
	}
	ul.graph li.yahooVisits::before {
		/* content: "→ "; */
		content: "↑ ";
		/* content: "↓ "; */
	}
	ul.graph li.yahooVisits:hover {
		overflow: visible;
		width: 30%;
		border-right: none;
		background-image: linear-gradient(to right, rgba(241, 239, 224, 0.7), rgba(251, 250, 246, 1));
		transition: all 750ms ease-out;
	}
	ul.graph li.googleCanadaVisits {
		width: 6.8%;
		white-space: nowrap;
  		overflow: hidden;
  		text-overflow: "----"; 
		background-image: linear-gradient(to right, rgba(241, 239, 224, 1), rgba(241, 239, 224, 1));
	}
	ul.graph li.googleCanadaVisits::before {
		/* content: "→ "; */
		content: "↑ ";
		/* content: "↓ "; */
	}
	ul.graph li.googleCanadaVisits:hover {
		overflow: visible;
		width: 25%;
		border-right: none;
		background-image: linear-gradient(to right, rgba(241, 239, 224, 0.7), rgba(251, 250, 246, 1));
		transition: all 750ms ease-out;
	}
	ul.graph li.percent100 {
		background-color: rgba(241, 239, 224, 0.7); width: 100%;
	}
	ul.graph li.googleVisits::before {
		/* content: "→ "; */
		content: "↑ ";
		/* content: "↓ "; */
	}
	ul.graph .left-percent {
		position: absolute;
		left: 0;
		width: 100%;
		background: rgba(166, 176, 155, 0.9);
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-right-width: 0;
	}
	ul.graph .middle-percent {
		position: absolute;
		left: 50%;
		background-color: transparent;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-right-width: 0;
	}
	ul.graph .right-percent {
		position: absolute;
		right: 0;
		background-color: transparent;
		border-radius: 0;
		border-right-width: 0;
	}
	.percent-heading {
		background-color: rgba(166, 176, 155, 0.9);
		color: #fff;
		text-align: center;
		margin: 0; 
		padding: 0 3em 0 3em;
		font-size: 2em;
	}
	table {
		position: relative;
		width: 100%;
		padding: 0 0 2em 0;
		text-align: left;
		/* background: linear-gradient(rgba(166, 176, 155, 0.2), rgba(255, 255, 255, 0.5)), url("/images/keyboard.jpg");
		background-size: cover;
		background-attachment: fixed;
		*/
		background: linear-gradient(rgba(166, 176, 155, 0.5), rgba(255, 255, 255, 0.5));
	}
	th {
		line-height: normal;
    	font-family: 'Imbue', serif;
		text-shadow: 4px 4px 4px rgba(46, 48, 62, 0.50);
		border-top: 1px solid #000;
		border-bottom: 1px solid #000;
	}
	td.headings, td.headingsSerpList {
		font-style: italic;
		font-weight: bold;
		text-align: left;
		background-color: rgba(46, 48, 62, 0.1);
		transform: scale3d(90%, 90%, 90%);
	}
	td.headings:hover, td.headingsSerpList:hover {
		transform: scale3d(100%, 100%, 100%);
		transition: all 750ms ease-in-out;
	}
	td {
		border: 1px solid grey;
		text-align: center;
		font-weight: bold;
	}
	td:hover {
		background-color: rgba(166, 176, 155, 0.9);
		font-style: italic;
		transition: all 50ms;
	}
	.table-desc {
		padding: 1em 2em;
		font-style: italic;
		background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgb(245, 244, 233) 50%, rgba(255, 255, 255,1) 100%); 
		border: 1px solid rgba(174, 183, 164, 0.1);
	}
	.table-desc:hover {
		background: linear-gradient(45deg, rgba(255, 255, 255, 0.5) 0%, rgb(245, 244, 233) 50%, rgba(255, 255, 255,0.7) 100%); 
		border: 25px double rgba(174, 183, 164, 0.9);
		transition: all 750ms ease-in-out;
	}
	a:link, a:visited {
		text-decoration: none;
		cursor: s-resize;
		color: #000;
	}
	#monthly, #visits, #PImp, #keyword, #position {
		position: absolute;
		top: 100px;
		left: 120px;
		padding: 0;
		width: 0;
		height: 0;
		border: 2px solid #2e303e;
		background-color: rgba(166, 176, 155, 0.7);
		color: #000;
		text-shadow: 1px 1px 1px rgba(255, 255, 255, 1);
		line-height: normal;
    	font-family: 'Imbue', serif;
		font-size: 1em;
		transition-duration: 1s, 1s, 1.5s, 1.5s;
		transition-timing-function: ease-out;
		transition-property: padding, width, height, visibility;
    	-webkit-transition-property: padding, width, height, visibility;
    	-webkit-transition-duration: 1s, 1s, 1.5s, 1.5s;
    	-moz-transition-property:  padding, width, height, visibility;
    	-moz-transition-duration: 1s, 1s, 1.5s, 1.5s;
    	-o-transition-property:  padding, width, height, visibility;
    	-o-transition-duration: 1s, 1s, 1.5s, 1.5s;
		overflow: hidden;
		visibility: collapse;
	}
	caption {
		text-align: center;
	}
	.descText {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
		text-align: center; 
		padding: 0 20% 0 20%;
		border: none;
		background-color: transparent;
	}
	.descText:hover {
		background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgb(245, 244, 233) 50%, rgba(255, 255, 255,1) 100%); 
		border: none;
		transition: all 750ms ease-in-out;
	}
	.profile-holder {
		width: 80%;
		margin: auto;
	}
	.user-metrics-holder {
		border: 4px double rgba(166, 176, 155, 0.7);
	}
.breaker {
	width: 100%;
	height: 20%;
	margin: 1em 0 3em 0;
	background-color: rgba(166, 176, 155, 0.7);
	border-color: rgba(166, 176, 155, 0.7);
	border-radius: 24%;
	}
.serpList table {
	position: relative
	}
.serpList th {
	margin: 0; padding: 0;}
ul.graph .website {
		position: absolute;
		left: 0;
		width: 100%;
		background: rgba(166, 176, 155, 0.9);
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-right-width: 0;
	}
	ul.graph .keyword {
		position: absolute;
		left: 20%;
		background-color: transparent;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-right-width: 0;
	}
	ul.graph .position {
		position: absolute;
		right: 40%;
		background-color: transparent;
		border-radius: 0;
		border-right-width: 0;	
  	}
ul.graph .inline-li {
	display: inline;
	border: 0;
	}
ul.graph .middle-inline-li {
	margin: 0 30% 0 10%;
	border-left: 1px solid rgba(166, 176, 155, 0.9);
	border-right: 1px solid rgba(166, 176, 155, 0.9);
	}

#abbr {
	color: #fff;
	}
#abbr:hover {
	color: #000;
	transition: all 2s ease-out;
	}
.serpList h2 {
	}
.serpList ul {

	}
.serpList ul li::before {

	}
.serpList ul li:nth-child(1) {

	}
.serpList ul > ul {

	}
.serpList ul li > ul li {

	}
.serpList ul li::after {
	}
/* experimental */
.welcomeMessage {
	position: absolute;
	top: 5px;
	margin: 0 auto;
	background-color: rgba(0, 0, 0, 0.4); 
	border: 20px double rgba(174, 183, 164, 0.4); 
	width: 45%;
	text-align: center;
	color: #fff;
	}

@media screen and (min-width: 555px) {
	row, .main, .profile-holder {
		grid-column: 1;
		}

}
</style>
<!-- The flexible grid (content) -->
<section class=row>
  	<article class="main">
	    <h2>BUSINESS NAME - Client Area:</h2>
		<div class="images" style="height:200px;"></div>
		<div class="profile-holder">
			<?php
				echo "<aside class=\"welcomeMessage\">";
            	echo "<p>Welcome!<br><br><br>";
           		echo "Your username is: ";
           		echo $_SESSION['username'];
           		echo "<br>";
           		echo "Your password is: ";
           		echo $_SESSION['password'];
           		echo "</p>";
				echo "</aside>";
			?>
			<h3>General Profile:</h3>
			<p><strong>SEO results/Website server log data:</strong></p>
			<div id="holder">
			<div class="user-metrics-holder">
				<h2 class="percent-heading">Search Engine Optimization Graph</h2>
				<table>
	  				<caption><em>Website Traffic Stats:</em></caption>
  					<thead>
	    				<tr>
      						<th>Month:</th>
      						<th id="hookforMonthlyShow"><a class="hook" onMouseOver="monthlyShow()" onMouseOut="monthlyHide()" href="">Unique visitors:</a>
						  		<div id="monthly"><em>Unique Visitor</em>, refers to a distinct individual user who visited your website in the reporting period. A person visiting the site multiple times during the time period is only counted once.</div>
							</th>
							<script>
								var month = document.getElementById("monthly");
								function monthlyShow() {
								  	month.style.visibility = "visible";
									month.style.padding = "1.5em";
									month.style.width = "800px";
							  		month.style.height = "200px";
									}	
						  		function monthlyHide() {
								  	month.style.visibility = "collapse";
									month.style.padding = "0";
							  		month.style.width = "0";
							  		month.style.height = "0";
									}
						  	</script>
      						<th id="hookforVisitsShow"><a class="hook" onMouseOver="VisitsShow()" onMouseOut="VisitsHide()" href="">Visits</a>
							  	<div id="visits"><em>Visits</em> refers to every person who visited your website in the reporting period. If one person visits the website 5 times, it'll count as 5 visits.</div>
							</th>
							<script>
								var visit = document.getElementById("visits");
						  		function VisitsShow() {
								  	visit.style.visibility = "visible";
									visit.style.padding = "1.5em";
							  		visit.style.width = "800px";
							  		visit.style.height = "200px";
							  	}
						  		function VisitsHide() {
								  	visit.style.visibility = "collapse";
							  		visit.style.padding = "0";
									visit.style.width = "0";
							  		visit.style.height = "0";
							  	}
						  	</script>
							<th id="hookforPImpShow"><a class="hook" onMouseOver="PImpShow()" onMouseOut="PImpHide()" href="">Page Impressions</a>
											<div id="PImp"><em>Page Impressions</em> are literally the number of times a page is loaded. So, if you have one unique 		visitor, but 20 page impressions, this tells us that the site was interesting enough for the visitor to click around and explore.</div>
							</th>
							<script>
								var PImpVar = document.getElementById("PImp");
						  		function PImpShow() {
							  	PImpVar.style.visibility = "visible";
							  	PImpVar.style.padding = "1.5em";
							  	PImpVar.style.width = "800px";
							  	PImpVar.style.height = "200px";
							  	}
						  		function PImpHide() {
							  	PImpVar.style.visibility = "collapse";
							  	PImpVar.style.padding = "0";
							  	PImpVar.style.width = "0";
								  PImpVar.style.height = "0";
							  	}
						  	</script>
      						<th>Bandwidth:</th>
						</tr>
					</thead>
					<tbody>
						<tr>
		      				<td class="headings">January</td>
      						<td>354</td>
      						<td>400</td>
	      					<td>860</td>
	      					<td>1,113.86 (1.1gb)</td>
    					</tr> 
    					<tr>
		      				<td class="headings">Febuary</td>
      						<td>163</td>
      						<td>187</td>
	      					<td>339</td>
      						<td>224.84 (0.2gb)</td>
    					</tr>
						<tr>
		      				<td class="headings">March</td>
      						<td>79</td>
      						<td>85</td>
	      					<td>142</td>
      						<td>93.72 mb (0.09372gb)</td>
    					</tr> 
    					<tr>
		      				<td class="headings">April</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr>	
						<tr>
		      				<td class="headings">May</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr> 
    					<tr>
		      				<td class="headings">June</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr>
						<tr>
		      				<td class="headings">July</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr> 
    					<tr>
		      				<td class="headings">August</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr>
						<tr>
		      				<td class="headings">September</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
	    				</tr> 
    					<tr>	
	      					<td class="headings">October</td>
	      					<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr>
						<tr>
		      				<td class="headings">November</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr> 
    					<tr>
		      				<td class="headings">December</td>
	      					<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
      						<td>n/a</td>
    					</tr>
	  				</tbody> 
  					<tfoot>
    				<tr>
		      			<td class="table-desc" colspan="5">
					  		<strong><em>&nabla; Traffic Results are dependant on many factors, & can vary from month to month slightly.</em></strong>
						</td>
    				</tr>
  					</tfoot>
				</table>
				<h2 class="percent-heading">User Metrics</h2>
					<div style="text-align: center; border: 1px solid rgba(169, 169, 172, 0.5);"><em>Links from Search Engine(s):</em></div>
					<ul class="graph">
						<li class="left-percent">0% Visitors</li>
						<li class="middle-percent">50% Visitors</li>
						<li class="right-percent">100% Visitors</li>
						<li>&nbsp;</li>
						<li class="googleVisits">Google: 82.7 %</li>
						<li class="yahooVisits">Yahoo: (search.yahoo.com) 10.3%</li>
						<li class="googleCanadaVisits">Google Canada:6.8%</li>
					</ul>
					<div class="descText">
						<strong><em>&nabla; These percentages are the user traffic your website receives from both Google &amp; Yahoo search engines. These percentages of visitors can vary greatly within a one month period.</em></strong>
					</div>
				<hr class="breaker">
				<!-- next comes the second table data element (for positions in serps) -->
				<div class="serpList">
					<h2 class="percent-heading">Position in the SERPS:</h2>
				<table>
	  				<caption><em>Here we track the progress of your site's climb up the SERPs:</em></caption>
  					<thead>
	    				<tr>
      						<th>Website:</th>
      						<th id="hookforKeywordShow"><a class="hook" onMouseOver="keywordShow()" onMouseOut="keywordHide()" href="">Keyword(s):</a>
						  		<div id="keyword"><em>Keywords</em> are the words/phrases that people type into search engines to find what they're looking for. For example, if you were looking to buy a new jacket, you might type something like “mens leather jacket” into Google. Even though that phrase consists of more than one word, it's still a keyword.</div>
							</th>
							<script>
								var keyword = document.getElementById("keyword");
								function keywordShow() {
								  	keyword.style.visibility = "visible";
									keyword.style.padding = "1.5em";
									keyword.style.width = "800px";
							  		keyword.style.height = "200px";
									}	
						  		function keywordHide() {
								  	keyword.style.visibility = "collapse";
									keyword.style.padding = "0";
							  		keyword.style.width = "0";
							  		keyword.style.height = "0";
									}
						  	</script>
      						<th id="hookforPositionShow"><a class="hook" onMouseOver="positionShow()" onMouseOut="positionHide()" href="">Position (on Page):</a>
							  	<div id="position"><em>Position (on page)</em> refers to your website's listing position on a search engine's results page for your specific targeted keyword(s) within the content of your pages.</div>
							</th>
							<script>
								var visit = document.getElementById("position");
						  		function positionShow() {
								  	position.style.visibility = "visible";
									position.style.padding = "1.5em";
							  		position.style.width = "800px";
							  		position.style.height = "200px";
							  	}
						  		function positionHide() {
								  	position.style.visibility = "collapse";
							  		position.style.padding = "0";
									position.style.width = "0";
							  		position.style.height = "0";
							  	}
						  	</script>
						</tr>
					</thead>
					<tbody>
						<tr>
		      				<td class="headingsSerpList">www....com</td>
      						<td>&quot;word list&quot;</td>
      						<td>(ex: Page 2, listing #14)</td>
    					</tr> 
    					<tr>
		      				<td class="headingsSerpList">www....com</td>
      						<td>&quot;word list&quot;</td>
      						<td>(ex: Page 2, listing #14)</td>
    					</tr>
						<tr>
		      				<td class="headingsSerpList">www....com</td>
      						<td>&quot;word list&quot;</td>
      						<td>(ex: Page 2, listing #14)</td>
    					</tr> 
	  				</tbody> 
  					<tfoot>
    				<tr>
		      			<td class="table-desc" colspan="5">
					  		<strong><em>&nabla; The use of niche keywords that target your specific audience, that are found richly in your SEO friendly content HTML pages, & even your own domain name - all come into play on your ranking score.</em></strong>
						</td>
    				</tr>
  					</tfoot>
				</table>

					<!--
					<div style="text-align: center; border: 1px solid rgba(169, 169, 172, 0.5);"><em></em></div>
					<ul class="graph">
						<li class="website">:</li>
						<li class="keyword">:</li>
						<li class="position">:</li>
						<li>&nbsp;</li>
						<li class="inline-li">www. .com</li>
						<li class="inline-li middle-inline-li">Phrase</li>
						<li class="inline-li">1st page</li>
					</ul>
					<div class="descText">
						<strong><em>&nabla; This is the postiion your website is found on each SE's <span id="abbr">(Search Engine)</span> search results page.</em></strong>
					</div>
					-->
				</div>
			</div>
			<hr class="breaker">
		    <div class="images" style="height:200px;"></div>
			<div class="container">
				<h3>Is There More SEO Data?</h3>
				<p>Yes, there is quite a bit of web server computer logs to go through to parch the data. Our lists above are the primary stats &amp; results for your website's SEO efforts.</p>
			</div>
			<h3>Questions?</h3>
			<!-- start sevices form -->
			<!-- The flexible grid (contact us) -->
		<script>
			function onSubmit(token) {
     		document.getElementById("client-form").submit();
   			}
 		</script>
	    <div class="images" style="height:200px;"></div>
		<div class="container">
			<form id="client-form" method="post" action=/contact/clients.php autocomplete="on">
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