<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabuada de Calculos</title>
</head>
<body>
	
	<form action="index.php" method="get">
		<fieldset>
			<legend>Tabuada Eletrônica</legend>
			<label for="valor">
				<input name="valor" type="text">
			</label>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
		
			<?php
				$a = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
				$v2 = $_GET['valor'];
				echo '<h1> Essa é a tabuda do ' .$v2. '</h1>';
				echo '<table>';
				foreach ($a as $valor) {
				 	echo "
				 		<tr>
				 	 		<td width='30'>$valor</td>
				 	 		<td width='30'>X</td>
				 	 		<td width='30'>$v2</td>
				 	 		<td width='30'>=</td>
				 	 		<td width='30'>".($valor*$v2)."</td>
				 	 	</tr>"
				 	 ;
				}
			?>
	</table>
</body>
</html>
