<html>

	<body>
	<?php
		$produto=$_REQUEST['ean'];
		$designacao=$_REQUEST['designacao'];
		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    		$db->query("start transaction;");

        	$sql = "UPDATE produto SET design='$designacao' WHERE ean = '$produto';";

       		$db->query($sql);

        	$db->query("commit;");

            echo("<p>Foi alterada a designacao com sucesso</p>");

        	$db = null;
		}
    	catch (PDOException $e)
    	{
    		$db->query("rollback;");
    		echo("<p>ERROR: {$e->getMessage()}</p>");

    	}
	?>

	  <td><sb1 type="button"><a href="alterarproduto.php"><b>Alterar a designacao de outro produto</b></a></sb1></td>
      <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
	</body>
</html>
