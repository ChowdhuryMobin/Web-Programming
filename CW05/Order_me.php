<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Order List</title>
</head>

<body>

   <h1>Chowdhury's Fav Restraunt</h1>

   <h2>Order Results</h2>

   <?php

   echo "Order processed at " . date("h:i, m F Y", time());

   echo "<br><br>Your order is as follows:<br>";

   $plate1 = (int)$_POST["Plate1"];
   $plate2 = (int)$_POST["Plate2"];
   $plate3 = (int)$_POST["Plate3"];
   $find = (string)$_POST["find"];

   $subtotal = 0;
   $platesOrdered = 0;

   if ($plate1 > 0) {
      $subtotal += $plate1 * 2100;
      $platesOrdered += 1;
   }

   if ($plate2 > 0) {
      $subtotal += $plate2 * 199;
      $platesOrdered += 1;
   }

   if ($plate3 > 0) {
      $subtotal += $plate3 * 899;
      $platesOrdered += 1;
   }

   $total = $subtotal * 1.1;
   echo "Plates ordered : " . $platesOrdered . "<br>";

   if ($platesOrdered == 0) {
      echo "You did not order anything on the previous page! <br>";
   }
   echo "Subtotal : $" . $subtotal . "<br>";

   echo "Total including tax : $" . $total .  "<br><br>";

   echo "Customer referred by " . $find . ".<br>";

   ?>

</body>

</html>