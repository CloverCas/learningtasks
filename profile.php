<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title> CloverCas</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@500&family=Libre+Baskerville&family=Libre+Franklin:wght@800&family=Norican&family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
.font-one{font-family: 'Alegreya Sans SC', sans-serif;}
.font-two{font-family: 'Libre Baskerville', serif;}
.font-three{font-family: 'Libre Franklin', sans-serif;}
.font-four{font-family: 'Norican', cursive;}
.font-five{font-family: 'Roboto', sans-serif;}
</style>
</head>
<body>
  <div class="container">
  <div class="navbar">
      <img src="media\logo.png" class="Logo" alt="CloverCas">
      <nav>
        <ul>
          <li> <a href="index.php" target="_blank" rel= "noopener noreferrer">
              <img alt="Home" src="media\home_white.png" class="Logo">
                </a></li>
                <li>
                      <img alt="Projects" src="media\works_white.png" class="Logo">
                     <ul>
                       <center>
                        <li><a href="https://clover2721.herokuapp.com/FOLDER_LT2/Learning%20Task2.1" target="_blank" rel= "noopener noreferrer">LT2</a></li>
                        <li><a href="https://clover2721.herokuapp.com/LT3/index.html" target="_blank" rel= "noopener noreferrer">LT3</a></li>
                        <li><a href="https://clover2721.herokuapp.com/MIDTERM/home.html" target="_blank" rel= "noopener noreferrer">CLE1</a></li>
                        <li><a href="LT4\index.html" target="_blank" rel= "noopener noreferrer">LT4</a></li>
                        <li><a href="LT5\index.html" target="_blank" rel= "noopener noreferrer">LT5</a></li>
                      </center>
                     </ul>
                  </li>
          <li> <a href="profile.php" target="_blank" rel= "noopener noreferrer">
            <img alt="Profile" src="media\profile_white.png" class="Logo">
                </a></li>
        </ul>

        <//?php
            switch ($page) {
            case 'projects':
            include_once '/exercises/Learning Task2.1.html';
            break;
            case 'profile':
            include_once 'profile.php';
            break;
            default:
            include_once "default.php";
            }
            ?>
      </nav>
  </div>
	<img alt="Formal" src="media\formal.png" class="formal">
	  <div class = "contacts">
	    <center> <h1 class = "font-three"> CASANDRA HEAVEN ESTELLOSO </h1>
	    <p class = "font-two"> BSIT1B STUDENT </p> </br>
	  <h3 class = " font-two"> PROFILE </h3>
	<p class = " font-five" > A first-year Bachelor of Science in Information Technology student at the University of
	St. La Salle Bacolod. </p></br>
	<h3 class = " font-two"> CONTACT </h3>
	  </center>
	<div class = "info" >
	<ul><strong><p class = " font-five"> <img alt="Number" src="media\number.png" > +639234181405 </p>
	  <p class = " font-five"> <img alt="Email" src="media\email.png" > s2120697@usls.edu.ph <p>
	    <p class = " font-five"> <img alt="Location" src="media\location.png" > Bacolod City </p>
	</strong></ul>
	</div>
	  </div>
	</div>
<div class = "foot" ></div>
 <a href="https://www.youtube.com/channel/UCfW4gPvg5ZWedWXy9DrQu2A" target="_blank" rel= "noopener noreferrer">
      <img alt="Youtube" src="media\yt.png" class="Logo">
        </a>
 <a href="https://discord.gg/747JMWHh" target="_blank" rel= "noopener noreferrer">
    <img alt="Discord" src="media\dc.png" class="Logo">
        </a>
 <a href="https://github.com/CloverCas/learningtasks" target="_blank" rel= "noopener noreferrer">
    <img alt="Github" src="media\git.png" class="Logo">
        </a>
  <p class="copy">Copyright &copy; 2022</p>
</div>
<script src="script.js"> </script>
</body>
</html>
