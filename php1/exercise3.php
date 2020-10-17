<!DOCTYPE html>
<html lang="en">

<head>
   <title>Exercise #3</title>
</head>

<body>

   <form action="exercise3.php" method="post">
      Number of Stars:<input type="text" name="userinput">
      <input type="submit">
   </form>
   <?php
   function triangle()
   
   {
      $numberOfStar = $_POST["userinput"];
      for ($i = 1; $i <= $numberOfStar; $i++) {
         for ($j = 1; $j <= $i; $j++) {
            echo "*";
         }
         echo "<br>";
      }
   }

   echo triangle();

   ?>
</body>

</html>