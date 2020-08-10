<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

			$connection = mysqli_connect("127.0.0.1", "root", "", "mid"); 
			$result = mysqli_query($connection, "select * from user");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<table width="100%" border="1">
		<tr height = "100px">
			<td align="left">
				<img src="Mt.jpg" width="50px" height="50px">
			</td>

				<td colspan="2" align="right">
				
				<a href="profile.php">&ensp;Profile</a>&ensp;
				<a href="settings.php">Settings</a>&ensp;
				<a href="login.php">Login</a>&ensp;
				<a href="reg.php">SignUp</a>&ensp;
				<a href="wallet.php">Wallet</a>&ensp;

				<a href="https://www.w3schools.com">
				<img border="0" src="question.png" width="30px" height="30px">

				</td>

		</tr>
		<tr height = "60px">
			<td colspan="3">
				<center><h2>Featured Masters</h2></center>
			</td>
			
		</tr>

		<tr height = "300px">
			<td>
				<center>
					<img src="man-avatar1.jpg" width="90px" height="90px">
					<hr>
					<p>Mr. Dis</p>
					<p>*****</p>

					<p>Active Steamer</p>
					<p>Fortnite Master</p>
					<p>Coach of all ages</p>
				</center>
			</td>




						<td>
				<center>
					<img src="woman-avatar.jpg" width="90px" height="90px">
					<hr>
					<p>PindiPanda</p>
					<p>*****</p>

					<p>Active Steamer</p>
					<p>Dota2 Master</p>
					<p>Leauge of Legend winner</p>
				</center>
			</td>




						<td>
				<center>
					<img src="man-avatar2.jpg" width="90px" height="90px">
					<hr>
					<p>Ninja</p>
					<p>****</p>

					<p>Active Steamer</p>
					<p>COD, PUBG Master</p>
					<p>Coach of all ages</p>
				</center>
			</td>

		</tr>


		<tr height = "200px">
			<td colspan="3">
				<h2>Take your skill to the next level!</h2>
				<center>
					<h2>Games That you want to master</h2>
					<form>
						<select width = "150px">

							<option>Players Unknown Battel Ground</option>
							<option>Fortnite</option>
							<option>DOTA2</option>
							<option>League of Legendes</option>
							<option>COD</option>
							<option>CS:GO</option>
						</select>
						<br>
						<br>

					<input type="submit" name="submit" value="Find Masters"></form>
					

				</center>

			</td>

		</tr>

		<tr height = "50px">
			<td colspan="3">
				<center><h2>What Players are saying?</h2></center>
			</td>
			
		</tr>


		<tr height = "300px">
			<td>
				<center>

					<p>"You guys are amazing. <br>Can't wait to do more.<br> You will be always my <br>PUBG Coach"<br>

					Mr.Y<br>
					PUBG</p>
				</center>
			</td>

				<td>
					<center>
						
						<p>"You guys are amazing. <br>Can't wait to do more.<br> You will be always my <br>PUBG Coach"<br>

					Mr.Y<br>
					PUBG</p>
					</center>
				</td>

				<td>
					<center>
						<p>"You guys are amazing. <br>Can't wait to do more.<br> You will be always my <br>PUBG Coach"<br>

					Mr.Y<br>
					PUBG</p>
					</center>
			</td>

		</tr>

		<tr height = "200px">
			<td colspan="3">
				<center>
					<img src="Mt.jpg" width="50px" height="50px">
					<br>
					<br>
					<a href="https://www.facebook.com/">
			         <img src="facebook_50px.png" width="50px" height="50px">&ensp;

			         <a href="https://www.discord.com/">
			         <img src="discord_50px.png" width="50px" height="50px">&ensp;

			         <a href="https://www.instagram.com/">
			         <img src="instagram_50px.png" width="50px" height="50px">&ensp;

			         <a href="https://www.teitch.com/">
			         <img src="twitch_50px.png" width="50px" height="50px">&ensp;

				</center>
				<br>
				<br>
			</td>
			
		</tr>

		<tr height = "250px">
			<td>
				<center><h4>Contact Information</h4></center>
				<br>

				<img src="gmail_50px.png" width="50px" height="50px"><p>abc@gmail.com</p>
				<br>
				<img src="phone_50px.png" width="50px" height="50px"><p>017**********</p>

			</td>
			<td colspan="2">
				<center><h3>Privacy Policy</h3></center>
				<p>Privacy policy of this website will be here</p>
			</td>
			
		</tr>
		

	</table>




</body>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
?>