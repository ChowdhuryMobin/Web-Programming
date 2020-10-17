<!DOCTYPE html>
<html lang="en">

<head>
   <title>Exercise #4</title>
</head>

<body>
   <form action="exercise4.php" method="post">
      Phrase Typed:<input type="text" name="phrase">
      <input type="submit">

   </form>

   <?php

   $noOfWords = $_POST["phrase"];

   echo str_word_count($noOfWords);


   echo "<br>";

   ?>
</body>

</html>