<?php
session_start();
//ini_set('display_errors',1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['id'] != '') {
  //echo 'Session is active';
}
else{
  header("Location: index2.php#loginPrompt");
  //echo 'Session is not active';
}

?>



<html>
<head>
  <head>
		<title> Crunchy Rice Studios | Dashboard </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
 
 
  <!-- WEBPAGE BODY  -->
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

<!-- Header -->
<header id="header">                    
                      
	<div class="content">     
		<div class="inner">                       
			<h1>Welcome back <?php echo $_SESSION['username'] ?></h1>                          
			<p> Crunchy Rice Studios
      
      

      <br/></p>
		</div>                                    
	</div>
                    
<nav>
	<ul>
                 <li><a href="#intro">Intro</a></li>
								<li><a href="#about">About</a></li>
                <li><a href="#Forum">Forums</a></li>
                <li><a href="logout.php">Log Out</a></li>
        
	

   
		<!--<li><a href="#elements">Elements</a></li>-->
		<!--<li><a href="#elements">Elements</a></li>-->
	</ul>
</nav>
</header>

				<!-- Main -->
					<div id="main">
               
               
               	<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
							 <head>
                <title>Home Page</title>
        </head>
        <body>  
                <a href="https://web.njit.edu/~nab54/IT202/ITProject/Landingpage.php#">  
                <img src="onigiri1.png"/>      
                </a>
        </body>
                  
								<p>Dating Simulator COMING SOON<a href="#work"></a>.</p>
								<p></p>
                                    
							</article>
    
    
<!-- Login -->
<article id="Login">
	<h2 class="major"> Login </h2>     
	<form method="post" action="./LoginAction.php">
		<div class="fields">                   
      <!-- Login Name -->
      <div class="field half">
				<label >Name</label>             
				<input type="text" name="loginUsername"/>
			</div>      
      <!-- Login Password -->      
      <div class="field half">
				<label >Password</label>                                                
				<input type="password" name="loginPassword"/>
			</div>    
			<div></div>
		</div>
                                                                       
		<ul class="actions">
			<li><input type="submit" value="Login" class="primary" /></li>
			<li><input type="reset" value="Clear" /></li>
		</ul>
	</form>
  
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- Login End -->





<!-- Forum -->
							<article id="Forum">
								<h2 class="major">Forum</h2>
								
                                                     
  <?php
require ("newconfig.php");
$mysqli = new mysqli($host, $username, $password, $database);

   
if (isset($_POST['message'])) {
   
    $user=$mysqli->real_escape_string($_POST['user']);
    $message=$mysqli->real_escape_string($_POST['message']);
    $date=date('Y-m-d H:i:s');
   //$_SESSION['message']= $message;//stores message as a cookie
    $tmessage=$_SESSION['message'];
    $tuser=$_SESSION['username'];
    
    if ($tmessage!=$message){
    $sql="INSERT INTO Steve(id, user, message, date) VALUES(0,'$tuser','$message','$date')";
    $mysqli->query($sql);
    }
   
     $_SESSION['message']= $message;//stores message as a cookie
}

?>                                                   
                                                     
                                                     
                                                     
                                                     
                             <body>
<h2></h2>

<?php
$sql = "SELECT * FROM Steve";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()) {
  echo '@'.$row['user'].':  '.$row['date'].' <br />';
  echo $row['message'].'<br />';
  echo '------------------------------------------------------------------------- <br />';
}
?>

<form method="post" action="#Forum">
<p>
  <label for="user"></label>
  <br />
</p>
<p>Message: <br />
  <label for="message"></label>
  <textarea name="message" id="message" cols="45" rows="5"></textarea>
</p>
<p>
  <input type="submit" name="submit" id="submit" value="Post message" />
</p>
</form>

</body>                        
                                                     
                                                  
							
							<!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
         <head>
                <title>Home Page</title>
        </head>
        <body>  
                <a href="https://web.njit.edu/~nab54/IT202/ITProject/Landingpage.php#">  
                <img src="onigiri1.png"/>      
                </a>
        </body>
                  
							</article>


 <!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/ibustanut.jpg" alt="" /></span>
								<p>Welcome to our Prototype website for Crunchy rice studios. The picture on top is the staff behind Crunchy Rice Studios. Yes we also exterminate ghosts. To the left we have Jaysen Javier who is one of the Game Developers within our company. He also likes to NUT a lot. You can also find him taking off is shirt randomly during work time. Second to the left we have the Head and Co-founder of Crunchy Rice Studios Nevin Bunag. He oversees all departments within the company as well as the big shot that dips his toes in all fields within our company. To the right of Nevin, we have Josef Guarin who is the second Game Dev within our company. His look gets all the ladies. All the way to the right we have Israel Silvas who the Second in command and Co-Founder of Crunchy Rice Studios. He is our main game designer, animator, and artist for everything that we do here.  </p>
                                  
                                   <head>
                <title>Home Page</title>
        </head>
        <body>  
                <a href="https://web.njit.edu/~nab54/IT202/ITProject/Landingpage.php#">  
                <img src="onigiri1.png"/>      
                </a>
        </body>
                  
                               
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- About End -->






<!-- Register -->
<article id="register">
	<h2 class="major"> Register </h2>     
	<form method="post" action="registerAction.php">
		<div class="fields">                   
      <!-- Register Name -->
      <div class="field half">
				<label >Name</label>             
				<input type="text" name="registerUsername"/>
			</div>     
      <!-- Spacing -->
      <div class="field half"></div> 
      <!-- Register Password -->      
      <div class="field half">
				<label >Password</label>                                                
				<input type="password" name="registerPassword"/>
			</div>    
      <!-- Spacing -->
      <div class="field half"></div> 
			<!-- Register Confirm Password -->
      <div class="field half">
				<label >Password</label>                                                
				<input type="password" name="registerPasswordConfirm"/>
			</div>
      
          
		</div>
                                                                       
		<ul class="actions">
			<li><input type="submit" value="Register" class="primary" /></li>
			<li><input type="reset" value="Clear" /></li>
		</ul>
   
	</form>
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- Register End -->





<!-- Register Fail -->
<article id="registerFail">
	<h2 class="major"> Registration Failed! </h2>     
	<form method="post" action="#Register">
	
  
    <p>Registration failed due to either mismatching passwords or a field was left blank.</p>
                                                                         
		<ul class="actions">
			<li><input type="submit" value="Back to Registration" class="primary" /></li>
		</ul>
   
	</form>
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- Register Fail End -->


<!-- Register Success -->
<article id="registerSuccess">
	<h2 class="major"> Registration Succeeded! </h2>     
	<form method="post" action="#login">
	
  
    <p>Your account has been created!</p>
                                                                         
		<ul class="actions">
			<li><input type="submit" value="To Login Page" class="primary" /></li>
		</ul>
   
	</form>
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- Register Success End -->




<!-- Login Fail -->
<article id="loginFail">
	<h2 class="major"> Login Failed! </h2>     
	<form method="post" action="#login">
	
  
    <p>Incorrect username or password!</p>
                                                                         
		<ul class="actions">
			<li><input type="submit" value="Back to Login" class="primary" /></li>
		</ul>
   
	</form>
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- Login Fail End -->




<!-- Login Prompt -->
<article id="loginPrompt">
	<h2 class="major"> Unauthorized Access </h2>     
	<form method="post" action="#login">
	
  
    <p>You do not have access to this page, please log in.</p>
                                                                         
		<ul class="actions">
			<li><input type="submit" value="Back to Login" class="primary" /></li>
		</ul>
   
	</form>
  <!-- EXTERNAL LINKS -->                 
	<ul class="icons">
		<li><a href="https://www.instagram.com/nevinbunag/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/NeviB/ITProject" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</article>
<!-- Login Prompt End -->


	<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>




					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Nevin Bunag Crunchy Rice Studios.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>