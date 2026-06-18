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
  $user = "";
  $pass = "";
  $validated = false;

  if ($_POST)
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];
  }

  session_start();
    if($user!=""&&$pass!="")
      {
        if($user=="sample"&&$pass=="s@mple") $validated = true;
        if($validated)
          {
            $_SESSION['login'] = "OK";
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            header('Location: sample/');
          }
    else
      {
        if($user=="guest"&&$pass=="welc0me") $validated = true;
        if($validated)
          {
            $_SESSION['login'] = "OK";
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            header('Location: guest/');
          }
    else
      {
        if($user=="espmartin"&&$pass=="esp1967") $validated = true;
        if($validated)
          {
            $_SESSION['login'] = "OK";
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            header('Location: https://webdesignsdoneright.com:2083/');
          }
    else
      {
          $_SESSION['login'] = "";
          echo "Invalid username or password.";
        }
      }
    }
  }
  else $_SESSION['login'] = "";
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
	    <h2>Client Area Login:</h2>
		<div class="images" style="height:200px;"></div>
		<br>
		<br>
		<br>
		<br>
        <form id="login" action="login.php" method="post" style="text-align: center;">
            <fieldset>
                <legend><h3>Please enter your username and password:</h3></legend>
                <input style="width: 12em;" type="text" maxlength="21" id="username" name="username" placeholder="Your username" required>
                <br>
                <input style="width: 12em;" type="password" size="20" maxlength="21" name="password" placeholder="*** Your password ***" required>
                <br>
                <br>
                <input type="submit" value="Login Here">
            </fieldset>
        </form>
		<br>
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
	    <div class="images" style="height:200px;"></div>
	</article>
</section>
