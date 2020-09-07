<?php 

  require_once('db.php');
  $search = $_POST['search'];
  $con = dbConnection();
  $query = "SELECT * FROM rows WHERE type = 'employer' AND rowname LIKE '%$search%';";
  $result = mysqli_query($con, $query);

  echo "<table border=1>
  
    <tr>
		<td>Employer Name</td>
	    <td>Company Name</td>
	    <td>Contact No</td>
	    <td>rowname</td>
		</tr>

		<?php for($i=0; $i != count($row); $i++ ){ ?>
			<tr>
				<td><?= $row[$i]['employer_name'] ?></td>
				<td><?= $row[$i]['company_name'] ?></td>
				<td><?= $row[$i]['contact_no'] ?></td>
				<td><?= $row[$i]['rowname'] ?> </td>
				<td>
					<a href="edit.php?id=<?=$row[$i]['id']?>"> Edit</a> |
					<a href="delete.php?id=<?=$row[$i]['id']?>"> Delete</a> 

				</td>
			</tr>
	</tr>
		</table>
		<?php } ?>
  
?>