<html>
	<body>
    <h3>Escolher Categoria do Produto</h3>
    <?php
        $ean=$_REQUEST['ean'];
        $design=$_REQUEST['design'];

		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM categoria;";

            $result = $db->query($sql);

            echo("<table border=\"0\" cellspacing=\"5\">\n");

            echo("<tr><td><b>Categorias disponiveis no Supermercado</b></td></tr>\n");

            foreach ($result as $row)
            {
                echo("<tr>\n");
                echo("<td>{$row['nome']}</td>\n");
                echo("<td><a href=\"inserirproduto_forn_primario.php?categoria={$row['nome']}&ean=$ean&design=$design\">Escolher esta categoria</a></td>\n");
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
