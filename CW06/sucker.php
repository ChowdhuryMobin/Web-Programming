
<!DOCTYPE html>
<html>
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php 

			if( isset($_POST["name"]) || isset($_POST["select"]) || isset($_POST["cardnumber"]) || isset($_POST["cardtype"]))

			{
				$name = (string)$_POST['name'];
				$select = (string)$_POST['select'];
				$cardnumber = (string)$_POST['cardnumber'];
				$card = (string)$_POST['cardtype'];

			}

			if(empty( $name && $select && $cardnumber && $card))

			{

				echo "<h1> Sorry</h1> <br> <br>";

				echo " You didn't fill out your form!";

			}

			else{

				echo "<h1> Thanks, Sucker! </h1>";
				echo "<p> Your information has been recorded.</p>";
				echo "<dt>Name <br></dt> <dd>$name<dd> <br>";
				echo "<dt>Section <br></dt> <dd>$select<dd> <br>";
				echo "<dt>Credit Card <br></dt> <dd>$cardnumber($card)<dd> <br>";
			
		
				echo " <dt> Here are all the suckers who have submitted here:<dt> 

				<pre>
				
				<dt>Tiger Woods;MA;1234123412341234;visa<dt>

				<dt>Hulk Hogan;MF;5963109385987345;mastercard<dt>

				<dt>Matt Ryan;MC;7328904328904902;mastercard<dt>

				<dt>Louis Henry;MC;4444100020003000;visa<dt>

				</pre>";
		}

		?>
	</body>
</html> 