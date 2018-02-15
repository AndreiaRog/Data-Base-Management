<html>

	<body>
	<?php
		$ean=$_REQUEST['ean'];
		$design=$_REQUEST['design'];
		$categoria=$_REQUEST['categoria'];
		$forn_primario=$_REQUEST['forn_primario'];
        $data=$_REQUEST['data'];
        $fornece_sec=$_REQUEST['fornece_sec'];
        $nome=$_REQUEST['nome'];

		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    		$db->query("start transaction;");

        	$sql = "INSERT INTO fornecedor(nif, nome) VALUES (?,?);";
	        $stmt = $db->prepare($sql);
	        $stmt->execute(array($fornece_sec, $nome));

	        $db->query("commit;");

            echo("<p>Fornecedor secundario adicionado com sucesso!</p>");

            echo("<td><a href=\"novoproduto.php?ean=$ean&design=$design&categoria=$categoria&forn_primario=$forn_primario&data=$data&fornece_sec=$fornece_sec\">Prosseguir</a></td>\n");

        	$db = null;

		}
    	catch (PDOException $e)
    	{
    		$db->query("rollback;");
    		echo("<p>ERROR: {$e->getMessage()}</p>");
            echo("<p>Pode existir ja um fornecedor com esses dados, incluindo o fornecedor primario deste produto</p>");
            echo("<td><a href=\"inserirfornecedorsec.php?ean=$ean&design=$design&categoria=$categoria&forn_primario=$forn_primario&data=$data\">Tente de novo inserir os dados do fornecedor secundario</a></td>\n");
    	}
	?>


	</body>
</html>
