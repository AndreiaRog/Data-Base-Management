<html>

	<body>
	<?php
		$produto=$_REQUEST['ean'];
		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       		$sql = "SELECT operador, instante, unidades  FROM reposicao WHERE ean = '$produto';";
       		$result = $db->query($sql);
			echo("<table border=\"1\">\n");
					echo("<tr><td>operador</td><td>instante</td><td>unidades</td></tr>\n");
					foreach($result as $row)
					{
						echo("<tr><td>");
			            echo($row['operador']);
			            echo("</td><td>");
			            echo($row['instante']);
			            echo("</td><td>");
			            echo($row['unidades']);
			            echo("</td></tr>\n");
					}
					echo("</table>\n");
			$db=null;
		}
    	catch (PDOException $e)
    	{
    		echo("<p>ERROR: {$e->getMessage()}</p>");
    	}
	?>

	  <td><sb1 type="button"><a href="listar.php"><b>Mostrar lista de eventos de reposicao para outro produto</b></a></sb1></td>
      <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
	</body>
</html>
