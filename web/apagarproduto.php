<html>

	<body>
	<?php
		$ean=$_REQUEST['ean'];

		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $db->query("start transaction;");
        	$sql = "DELETE FROM produto WHERE ean=?;";
       		$stmt = $db->prepare($sql);
        	$stmt->execute(array($ean));
        	$db->query("commit;");

        	$db = null;

        	echo("<p>Produto removido com sucesso!</p>");
		}
    	catch (PDOException $e)
    	{
    		$db->query("rollback;");
    		echo("<p>ERROR: {$e->getMessage()}</p>");
    	}
	?>
	
	  <td><sb1 type="button"><a href="produtos.php"><b>Apagar outro produto</b></a></sb1></td>
      <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
	</body>
</html>