<html>
	<body>
    <?php
		$categoria=$_REQUEST['categoria'];
		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $db->query("start transaction;");

            $sql = "INSERT INTO categoria (nome) VALUES (?);";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($categoria));

            $db->query("commit;");
            $db->query("start transaction;");

            $sql = "INSERT INTO categoria_simples (nome) VALUES (?);";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($categoria));

            $db->query("commit;");

            $db = null;

            echo("<p>Foi inserida a nova categoria como categoria simples</p>");

            echo("<td><a href=\"associarsuperc.php?categoria_simples=");
            echo($categoria);
            echo("\">Associar a categoria inserida a uma categoria</a></td>\n");

        }
        catch (PDOException $e)
        {
            $db->query("rollback;");
            echo("<p>ERROR: {$e->getMessage()}</p>");
        }

    ?>

      <td><sb2 type="button"><a href="categorias.php"><b>Para inserir ou remover uma nova categoria</b></a></sb2></td>
      <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
    </body>
</html>
