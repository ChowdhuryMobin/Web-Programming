<!DOCTYPE html>
<html>

<head>
   <title>NerdLuv</title>
   <link href="nerdluv.css" type="text/css" rel="stylesheet" />
</head>

<body>
   <div id="bannerarea">
      <img src="nerdluv.png" /> <br />
      Where meek geeks meet
   </div>


   <h1>Thank you!</h1>
   <?php
   echo '<p>Welcome to NerdLuv, ' . $_POST['name'] . '!</p>';

   $file = fopen("singles.txt", "a+");

   $personalInfo = $_POST['name'] . ',' . $_POST['gender'] . ',' . $_POST['age'] . ',' . $_POST['type'] . ',' . $_POST['os'] . ',' . $_POST['min'] . ','  . $_POST['max'];
   
   echo $personalInfo;
   fwrite($file, $personalInfo);
   fclose($file);
   
   ?>

   <p>Now <a href="matches.php">log in to see your matches!</a></p>
   <div>
      <p>
         This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.
      </p>

      <p>
         Results and page (C) Copyright NerdLuv Inc.
      </p>

      <ul>
         <li>
            <a href="nerdluv.php">
               <img src="back.gif"/>
               Back to front page
            </a>
         </li>
      </ul>
   </div>

   <div id="w3c">
      <a><img src="w3c-html5.png" alt="Validate HTML" /></a>
      <a><img src="w3c-css.png" alt="Validate CSS" /></a>
   </div>
</body>

</html>