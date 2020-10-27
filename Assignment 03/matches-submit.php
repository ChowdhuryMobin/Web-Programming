<!DOCTYPE html>
<html>

<head>
   <title>NerdLuv</title>
   <link href="nerdluv.css" type="text/css" rel="stylesheet" />
</head>

<body>
   <div id="bannerarea">
      <img src="nerdluv.png" alt="banner logo" /> <br />
      where meek geeks meet
   </div>

   <div>
      <?php
      global $name;
      $name = $_GET['name'];
      $file = file("singles.txt");
      $pattern = '/' . $name . '/';
      foreach ($file as $person) {
         $isMatch = preg_match($pattern, $person);
         if ($isMatch) {
            $personInfor = explode(",", $person);
            $i = -1;
            foreach ($personInfor as $attribute) {
               $i++;
               switch ($i) {
                  case 1:
                     $gender = $attribute;
                     break;
                  case 2:
                     $age = $attribute;
                     break;
                  case 3:
                     $type = $attribute;
                     break;
                  case 4:
                     $os = $attribute;
                     break;
                  case 5:
                     $min = $attribute;
                     break;
                  case 6:
                     $max = $attribute;
                     break;
               }
            }
            break;
         }
      }

      echo '<h1>Matches for ' . $name . '</h1>';
      foreach ($file as $person) {
         $personInfor = explode(",", $person);
         $i = -1;
         foreach ($personInfor as $value) {
            $i++;
            switch ($i) {
               case 0:
                  $matchName = $value;
                  break;
               case 1:
                  if ($gender == $value)
                     continue 3;
                  $matchGender = $value;
                  break;
               case 2:
                  if (($value > $max) || ($value < $min))
                     continue 3;
                  $matchAge = $value;
                  break;
               case 3:
                  $pattern = '[' . $type . ']';
                  $isMatch = preg_match($pattern, $value);


                  if ($isMatch)
                     continue 3;
                  $matchType = $value;
                  break;
               case 4:
                  if ($os != $value)
                     continue 3;
                  $matchOs = $value;
                  break;
               case 5:
                  if ($age < $value)
                     continue 3;
                  break;
               case 6:
                  if ($age > $value)
                     continue 3;
                  break;
            }
         }


         echo '<div class="match">';
         echo '<p>';
         echo '<img src="user.jpg" alt="photo" />';
         echo $matchName;
         echo '</p>';

         echo '<ul>';
         echo '<li><strong>gender:</strong>  ' . $matchGender . '</li>';
         echo '<li><strong>age:</strong>     ' . $matchAge . '</li>';
         echo '<li><strong>type:</strong>    ' . $matchType . '</li>';
         echo '<li><strong>OS:</strong>      ' . $matchOs . '</li>';
         echo '</ul>';
         echo '</div>';

      }


      ?>
   </div>



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
               <img src="back.gif" alt="icon" />
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