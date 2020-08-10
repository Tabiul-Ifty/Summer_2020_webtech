<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

	<table border="1" width="100%">

		<tr height = "100px">
			<td align="left">
				<img src="Mt.jpg" width="50px" height="50px">
			</td>

				<td colspan="3" align="right">
				
				<a href="homepage.php">&ensp;Home</a>&ensp;
				<a href="settings.php">Settings</a>&ensp;
				<a href="wallet.php">Wallet</a>&ensp;

				<a href="https://www.w3schools.com">
				<img border="0" src="question.png" width="30px" height="30px">

				</td>

		</tr>

		<tr height = "300px">
			<td >
				<center><img src="profilepic.png" width="250px" height="250px" >
				</center>
			</td>

			<td colspan="3">
				<div>
					<h4>About Me!</h4>
					<p>I like to play compitative games. I play ranked games like R6, PUBG and CSGO.</p>
					<p></p>
				</div>	
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<form>
					<fieldset>
						<legend><h3>User Information</h3></legend>
						<center>
							<table>
								<tr>
									<td>Name</td>
									<td><input type="text" name="uname"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name="emaiil"></td>
								</tr>
								<tr>
									<td>Phone</td>
									<td><input type="text" name="phone"></td>
								</tr>
								<tr>
									<td>Discord</td>
									<td><input type="text" name="discord"></td>
								</tr>
								<tr>
									<td></td>
									<td align="right"><input type="submit" name="submit" value="Save"></td>
								</tr>
			                </table>

						</center>

					</fieldset>

				</form>
			</td>
		</tr>

				<tr height = "200px">
			<td colspan="4">
				<h2>Take your skill to the next level!</h2>
				<center>
					<h2>Games that you want to Master!</h2>
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
					

					<input type="submit" name="submit" value="Find Masters">
					</form>
					

				</center>

			</td>

		</tr>

		<tr height = "300px">
			<td width= "25%">
				<center>
					<h3>Lessons</h3>
					<br>
					<hr>
					<p>Calender View</p>
					<hr>
					<p>Purchase List</p>
					<hr>
					<p>My Reviews</p>
				</center>
			</td>

			<td width= "25%">
				<center>
					<h3>Transaction</h3><br>
					<hr>
					<p>Wallet</p>
					<hr>
					<p>Purchase History</p>
					<br>
					<br>
					<br>	
				</center>
			</td>

			<td width= "25%">
				
				<center>
					<h3>Achievements</h3>
					<hr>
					<p>View Achievments</p>
					<br>
					<br>
					<br>
					<br>
				</center>
			</td>
			<td width= "25%">
				<center>
				    <h3>Games To Master</h3>
					<hr>
					<p>Wish List</p>
					<br>
					<br>
					<br>
					<br>
				</center>
			</td>
		</tr>

		<tr height = "300px">
			
			<td width= "25%">
				<center>
					<h3>Methods Of learning</h3>
					<br>
					<hr>
					<p>Discord</p>
					<hr>
					<p>Skype</p>
					<br>
					
					
				</center>
				
			</td>

			<td width= "25%">
				<center>
					<h3>Upload Files</h3>
					<br>
					<hr>
					<br>

					<form method="post" enctype="multipart/form-data">
			
						File <input type="file" name="myfile">
						<br>
						<br>
						<input type="submit" name="submit" value="Upload">
			
					</form>
					<br>
					<br>
				
					
				</center>
			</td>
			<td width= "25%">
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
			<td colspan="3">
				<center><h3>Privacy Policy</h3></center>
				<p>Privacy policy of this website will be here</p>
							
			</td>
			
		</tr>


	</table>

</body>
</html>