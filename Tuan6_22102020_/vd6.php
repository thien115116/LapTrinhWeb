<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="vd6.php" method="post" enctype="multipart/form-data">
			n:<input name="n" type="text">
			<br>
			color:<input name="color" type="color">
			<br>
			<input type="submit" name="sm" value="Gui">
			<br>
		</form>	
			<?php
			if(isset($_POST['n']))
			{
			$n = $_POST['n'];
			$c = $_POST['color'];
			}
			?>
			<table bgcolor="<?php echo $c?>">
				<tr>
					<td>Bang Cuu Chuong <?php
							echo $n;
					?> </td>
				</tr>
				<?php
				for($i=1;$i<10;$i++)
				{?>
				<tr>
					<td><?php echo $n ?></td>
					<td><?php echo $c ?></td>
					<td><?php echo $n * $i ?></td>
					</tr>
					<?php
					}
					?>
				
			</table>
	</body>
</html>