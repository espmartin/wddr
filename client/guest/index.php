<?php
/*
 *  
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hello Guest!</title>
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link  rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Festive&family=Kaushan+Script&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Festive&family=Josefin+Sans:wght@200&family=Kaushan+Script&display=swap');
    
    * {padding: 0; margin: 0;}

    body {background-color: rgba(0, 0, 0, 0.95); color: #fff;}
    
    section {
        width: 99%;
        text-align: center; 
        border: 1px solid red;
        }
    p {
        width: 75%;
        font-family: 'Josefin Sans', sans-serif;
        font-size: 2em;
        }

    #mainHeading {
        border-top-width: 0;
        border-right-width: 0;
        border-left-width: 0;
        border-bottom-width: 1em;
        border-radius: 5%;
        border-style: dotted;
        border-color: rgba(46, 48, 62, 0.2);
        font-family: 'Festive', cursive;
        font-size: 10vh;
        color: #fff;
        text-shadow: 4px 4px 4px rgba(255, 255, 255, 0.7);
        transition: all 3s ease-in-out;
        }
    #mainHeading span {
        display: none;
        color: #fff;
        font-size: 3em;
        }

    #mainHeading:hover {
        display: block;
        color: #000;
        font-size: 1%;
        transform: rotate(360deg);
        -webkit-transition: -webkit-transform 2.0s, color 5.0s, font-size 1.0s;
        -moz-transition: -moz-transform 2.0s, color 5.0s, font-size 1.0s;
        -ms-transition: -ms-transform 2.0s, color 5.0s, font-size 1.0s;
        -o-transition: -o-transform 2.0s, color 5.0s, font-size 1.0s;
        transition: transform 0.7s, color 2.0s, font-size 1.0s;
        }
</style>
</head>
<body>
<section>
    <h1 id="mainHeading"><span>Hello</span> there Guest!</h1>
    <p>You will soon be able to store your files here, as well as run SEO tools, that I will provide.</p>
</section>
</body>

</html>
