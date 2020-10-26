<!DOCTYPE html>
<html >

<head>
  <title>Form Data</title>
</head>
<body>

<h1>Raw Form Data</h1>

  <?php
    if(isset($_POST["visitor_name"]) || isset($_POST["password"]) || (isset($_POST["licenseOK"]) || isset($_POST["account_type"]) || isset ($_POST["options"]) || isset ($_POST["system"]) || isset ($_POST["remarks"])))
    {
      $visitorsname = $_POST["visitor_name"];
      $password = $_POST["password"];
      $license = $_POST["licenseOK"];
      $account = $_POST["account_type"];
      $option = $_POST["options"];
      $system = $_POST["system"];
      $remark = $_POST["remarks"];


        echo "<h1>Form input values</h1>";
        echo  "<p>Your Name: $visitorsname </p>";
        echo  "<p>Password: $password </p>";
        echo  "<p>License accepted: $license </p>";
        echo  "<p>Account type: $account</p>";
       

        echo "<p> Your options are: ";  

              foreach($option as $values)
              {
                echo "$values". " ";
              }
        echo "<p> Operating System: $system</p>";
        echo "<p> Remarks: $remark </p>";
    
    }
            
            
  ?>
</body>
</html>
