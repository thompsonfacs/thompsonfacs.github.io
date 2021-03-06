<!-- 
*****************************************************************************
Title: Contact Page
Use: ISLT 7355
Author: Jamie Thompson
Developed: Jun 21, 2021
Last Edited: Jul 21, 2021
Comments: This is a work in progress!
****************************************************************************** 
-->
<?php
if($_POST["message"]) {
mail("jmt6nn@umsystem.edu", "Portfolio%20Website%20Contact",
$_POST["insert your message here"]. "From: an@email.address");
}


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
       <title>Contact Me</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Loop&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon1.ico">
        
        <link rel="stylesheet" href="aboutstyle.css">
        <link rel="stylesheet" href="nav.css">
</head>
<body>
<header class="header"><h1>Jamie Thompson</h1></header>
    
  <nav class="navigation">
  <nav id="hamburger">&#9776;</nav>
      <ul class="nav" id="hamitems">
         <li><a href="index.html">HOME</a></li>
         <li><a href="about.html">ABOUT</a></li>
         <li><a href="experience.html">EXPERIENCE</a>
             <ul class="nav">
              <li><a href="Holcomb.html">Holcomb, KS</a></li>
              <li><a href="Fulton.html">Fulton, MO</a></li>
              <li><a href="Columbia.html">Columbia, MO</a></li>
             </ul>
          </li>
         <li><a href="philosophy.html">PHILOSOPHY</a></li>
         <li><a href="contact.html">CONTACT</a></li>
      </ul>
   </nav>
    <main>
      <div class="image">
        <img src="headshot.jpg" alt="Jamie Thompson" style="float:left; padding-left:10%; width:20%; height:25%;">
      </div>
      <div class="content">
        <h3>Let's get in touch!</h3>
        <form action="mailto:jmt6nn@umsystem.edu?Subject=Portfolio%20Website%20Contact" method="post" enctype="multipart/form-data" action="contact.php">
            <div>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" required autofocus><br>
            </div>
            <div>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" required><br>
            </div>
            <div>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" placeholder= "optional"><br>
            </div>
            <div>
            <label for="email">Email:</label>
            <input type="text" id="email" required><br>
            </div>
            <div>
            <label for="message">Message:</label>
            <textarea id="message" required>
               
            </textarea><br>
            </div>
            <input type="submit">
        </form>

        </div>
        <div class="links">
        <ul>
          <li> <a href="resume.pdf"><img src="img/resume.png"  alt="Click for Resume"/></a>
          </li>
          <li> <iframe width="230" height="120" src="https://www.youtube.com/embed/Jpo-AlC155I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </li>
          <li> <a href= "mailto:jmt6nn@missouri.edu"><img src="img/email2.png"  alt="click to email"/></a>
          </li>

        </ul>
      </div> 

    </main>   
    <footer class="footer">
      Jamie Thompson <a href= "mailto:jmt6nn@missouri.edu"><img class="icon" src="img/email.png"  alt="click to email"/><img class="iconbig" src="img/email.png"  alt="Click to email"/></a> jmt6nn@missouri.edu   
      <img class="icon" src="img/phone.png"  alt="Phone"/><img class="iconbig" src="img/phone.png"  alt="Phone"/> (888)888-8888
       Copyright 2021 Jamie Thompson All rights reserved 
      <a href="https://icons8.com/icon/13754/secured-letter">Secured Letter icon by Icons8</a>
      <a href="https://icons8.com/icon/11835/cell-phone">Cell Phone icon by Icons8</a>
      <a href="https://www.pexels.com/photo/teal-white-and-pink-paint-1561020/">Photo by Zaksheuskaya from Pexels</a>
      <a href="https://icons8.com/icon/OExBsk632jtj/download-resume">Download Resume icon by Icons8</a>
      </footer>
</body>
</html>