<html>

	<body>
	<?php
		$ean=$_REQUEST['ean'];
		$design=$_REQUEST['design'];
		$categoria=$_REQUEST['categoria'];
		$forn_primario=$_REQUEST['forn_primario'];
		$fornece_sec=$_REQUEST['fornece_sec'];
		$data=$_REQUEST['data'];

		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if($forn_primario == $fornece_sec){
                echo("<p>Fornecedor secundario escolhido identico ao fornecedor primario adicionado. Escolher outro.</p>");
                echo("<td><a href=\"inserirproduto_fornece_sec.php?ean=$ean&design=$design&categoria=$categoria&forn_primario=$forn_primario&data=$data\">Escolher de novo o Fornecedor Secundario</a></td>\n");
            }else{
                $db->query("start transaction;");

            	$sql = "INSERT INTO produto(ean, design, categoria, forn_primario, data) VALUES (?,?,?,?,?);";
                $stmt = $db->prepare($sql);
                $stmt->execute(array($ean, $design, $categoria, $forn_primario, $data));

            	$sql = "INSERT INTO fornece_sec(ean, nif) VALUES (?,?);";
                $stmt = $db->prepare($sql);
                $stmt->execute(array($ean, $fornece_sec));

                $db->query("commit;");

                echo("<p>Produto adicionado com sucesso!</p>");
            }
            $db = null;
		}
    	catch (PDOException $e)
    	{
    		$db->query("rollback;");
    		echo("<p>ERROR: {$e->getMessage()}</p>");
    	}
	?>

	  <td><sb1 type="button"><a href="inserirproduto.php"><b>Adicionar outro produto</b></a></sb1></td>
      <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
	</body>
</html>
