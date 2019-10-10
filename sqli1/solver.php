<?php
require "required_file.php";


$solver = $con->prepare("select * from solver");
$solver->execute();
?>


<html>
	<head>
		<title>Solver</title>
	</head>
	<link rel="stylesheet" href="style.css">
	<body>
		<center>
			<h1>Solver</h1>
			<table>
				<thead>
					<th>No</th>
					<th>Name</th>
					<th>Whatsapp</th>
				</thead>
				<tbody>
				<?php
				$no =1;
				if($solver->fetchColumn()>0)
				{
					while($row = $solver->fetch())
					{?>
						<tr><td><?= $no ?></td><td><?= $row['name'] ?></td><td><a href='http://wa.me/<?= $row['telp'] ?>'>Whatsapp</a></td></tr>
						<?php $no+=1;
					}
				}
				else
				{
					?>
					<tr><td colspan="3" style="text-align: center">Belum ada solver</td></tr>
					<?php
				}

				?>
				</tbody>
			</table>
			<div class="thank">
				Tq gaes , yang dah nyobain :*
			</div>
		</center>
	</body>
</html>