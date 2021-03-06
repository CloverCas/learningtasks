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
  <div class= "first">
  <img alt="Front" src="media\front_pic.png" class="front">
  <div class = "first_info">
     <h1 class = "font-three"> CASANDRA HEAVEN ESTELLOSO </h1>
      <h3 class = " font-two"> A first-year Bachelor of Science in Information Technology student at the University of
St. La Salle Bacolod. </h3>
  </div>
</div>
<center>
<div class= "second">
  <div class= "second_info">
  <a href="https://www.facebook.com/casandra.estelloso/" target="_blank" rel= "noopener noreferrer">
       <img alt="Facebook" src="media\fb.png" class="Logo">
     </a> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://www.instagram.com/saandraaa.park/" target="_blank" rel= "noopener noreferrer">
     <img alt="Instagram" src="media\ig.png" class="Logo">
         </a> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://mail.google.com/mail/u/0/?hl=en&tf=cm&fs=1&to=s2120697@usls.edu.ph" target="_blank" rel= "noopener noreferrer">
     <img alt="Gmail" src="media\gmail.png" class="Logo">
         </a> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="https://zoom.us/j/4033446319?pwd=aDNqWFBRUDFydEZKUDlHemVyQUZZQT09" target="_blank" rel= "noopener noreferrer">
            <img alt="Zoom" src="media\zoom.png" class="Logo">
          </a></center>
</div></div>
<div class= "body">
  <h1 class = "font-four"> " To become truly proficient at something, you must practice until the technique becomes habitual. " </h1>
<center>

     <div class="slider">
       <div class="slides">

         <input type="radio" name="radio-btn" id="radio1">
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
         <input type="radio" name="radio-btn" id="radio4">
         <input type="radio" name="radio-btn" id="radio5">

         <div class="slide first">
           <img src="media\1.png" alt="">
         </div>
         <div class="slide">
           <img src="media\2.png" alt="">
         </div>
         <div class="slide">
           <img src="media\3.png" alt="">
         </div>
         <div class="slide">
           <img src="media\4.png" alt="">
         </div>
         <div class="slide">
           <img src="media\5.png" alt="">
         </div>

</div>

<div class="navigation-manual">
<label for="radio1" class="manual-btn"></label>
<label for="radio2" class="manual-btn"></label>
<label for="radio3" class="manual-btn"></label>
<label for="radio4" class="manual-btn"></label>
<label for="radio5" class="manual-btn"></label>
</div>
</div>

</center>
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
