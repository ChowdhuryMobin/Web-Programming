<!DOCTYPE>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>CW 05 PHP Forms - Chowdhury's Fav Restaurant</title>
</head>

<body>

         <form action="Order_me.php" method="post">
            <h2>Chowdhury 101 Company</h2>
            <p>Please place your order for the restaurant listed</p>
            <table border="0">
               <tr bgcolor="#cccccc">
                  <td width="150">Item</td>
                  <td width="15">Quantity</td>
                  <td width="50">Price</td>
               </tr>
               <tr>
                  <td>Bones</td>
                  <td align="center"><input type="text" name="Plate1" size="3" maxlength="3"></td>
                  <td>$2,100</td>
               </tr>
               <tr>
                  <td>STK</td>
                  <td align="center"><input type="text" name="Plate2" size="3" maxlength="3"></td>
                  <td>$199</td>
               </tr>
               <tr>
                  <td>
                     Chops Lobster Bar</td>
                  <td align="center"><input type="text" name="Plate1" size="3" maxlength="3"></td>
                  <td>$899</td>
               </tr>
               <tr>
                  <td>How did you find Chowdhury's Fav menu?</td>
                  <td>
                     <select name="find">
                        <option value="Google">Google</option>
                        <option value="Web ad">Web ad</option>
                        <option value="TV ad">TV ad</option>
                        <option value="Word of mouth">Word of mouth</option>
                     </select>
                  </td>
               </tr>
               <tr>
                  <td colspan="2" align="center"><input type="submit" value="Submit Order"></td>
               </tr>
            </table>
            <p>Sorry, but we need to add the sales tax of 10% </p>

            <br /> Click Reset to clear the form <input type="reset" />
         </form>
</body>

</html>