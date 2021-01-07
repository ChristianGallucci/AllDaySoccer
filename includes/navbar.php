<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="nav-item active"';
}

?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:#532960"> <a class="navbar-brand" href="index.php"><b>AllDay</b>Soccer</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent1">
    	<ul class="navbar-nav mr-auto">
      		<li <?=echoActiveClassIfRequestMatches("index")?>> <a class="nav-link" href="index.php">Home</a> </li>
	  		<li <?=echoActiveClassIfRequestMatches("schedule")?>> <a class="nav-link" href="schedule.php">Schedule</a></li>
	  		<li <?=echoActiveClassIfRequestMatches("standings")?>> <a class="nav-link" href="standings.php">Standings</a></li>
	  		<!--<li <?=echoActiveClassIfRequestMatches("gallery")?>> <a class="nav-link" href="gallery.php">Gallery</a></li>-->
			<li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	More
        	</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="signUp.php">Sign Up</a>
			<a class="dropdown-item" href="rules.php">Rules</a>
			<a class="dropdown-item" href="download.php">Forms</a>
             </div>
            </li>
    	</ul>
		    <ul class="navbar-nav ml-auto">
           	<li <?=echoActiveClassIfRequestMatches("login")?>> <a class="nav-link" href="login.php">Admin Login</a> </li>
        </ul>
  	</div>
	</nav>
