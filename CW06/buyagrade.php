<!DOCTYPE html>
<html>

<head>
	<title>Buy Your Way to a Better Education up in Here!</title>
	<link rel="stylesheet" href="buyagrade.css">
</head>

<body>
	<form action="sucker.php" method="post">
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			Recent Changes in Georgia State University policy now allow us to offer grades fot money. That's right! All you need to get an A in this class is cold, hard, cash. <br />
		</p>

		<hr />

		<h2>Give Us Your Money</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
			</dd>
			<br>
			<dt>Section</dt>
			<dd>
				<select name="select">
					<option value="">
						(Select a section)
					</option>
					<option value="MA">MA</option>
					<option value="MF">MF</option>
					<option value="MC">MC</option>
				</select>
			</dd>
			<br>
			<dt>Credit Card</dt>
			<dd>
				<input type="text" name="cardnumber">
				<br>
				<label>
					<input type="radio" name="cardtype" value="visa">Visa
				</label>
				<label>
					<input type="radio" name="cardtype" value="mastercard">Master Card
				</label>
			</dd>
		</dl>
		<br>
		<div>
			<input type="submit" value="I am a giant sucker.">
		</div>
	</form>
</body>

</html>