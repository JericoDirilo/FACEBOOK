<!DOCTYPE html>
<html>
<head>
	<title>Database Results</title>
</head>
<body>
	<table>
			<?php
		     $Server="localhost";
		     $UserName="root";
		     $Password="";
		     $DatabaseName="dbFacebook";

		     $Connect = mysqli_connect($Server,$UserName,$Password,$DatabaseName);
		     
		     $sqlSelect="SELECT * FROM tblFacebook";
		     $query=mysqli_query($Connect,$sqlSelect);
		     while ($row=mysqli_fetch_array($query)) {
		     	
		     	?>
			<tr>
				<td><?=$row['Firstname']?></td>
				<td><?=$row['Lastname']?></td>
				<td><?=$row['MobileorEmail']?></td>
				<td><?=$row['Month']?></td>
				<td><?=$row['Day']?></td>
				<td><?=$row['Year']?></td>
				<td><?=$row['Gender']?></td>
			</tr>	
				<?php
			}
		?>

	</table>
</body>
</html>