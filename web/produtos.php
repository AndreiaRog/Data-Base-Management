<html>
	<body>
    <h3>Produtos do Supermercado</h3>
    <?php
		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM produto;";

            $result = $db->query($sql);

            echo("<table border=\"0\" cellspacing=\"5\">\n");
            echo("<tr><td><a href=\"inserirproduto.php\">Novo Produto</a></td></tr>\n");

            echo("<tr><td><b>Ean do Produto</b></td>\n");
            echo("<td><b>Nome do Produto</b></td>\n");
            echo("<td><b>Categoria</b></td></tr>\n");

            foreach ($result as $row)
            {
                echo("<tr>\n");
                echo("<td>{$row['ean']}</td>\n");
                echo("<td>{$row['design']}</td>\n");
                echo("<td>{$row['categoria']}</td>\n");
                echo("<td><a href=\"apagarproduto.php?ean={$row['ean']}\">Remover Produto</a></td>\n");
                echo("</tr>\n");
            }

            echo("</tables>\n");

            $db = null;

        }
        catch (PDOException $e)
        {
            echo("<p>ERROR: {$e->getMessage()}</p>");
        }

    ?>
        <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
    </body>
</html>
