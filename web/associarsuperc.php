<html>
	<body>
    <h3>Categorias do Supermercado possiveis</h3>
    <?php
        $categoria_simples=$_REQUEST['categoria_simples'];
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

            /* queremos apresentar a lista das categorias com o botão remover */

            echo("<table border=\"0\" cellspacing=\"5\">\n");
            echo("<tr><td><a>Categoria</a></td></tr>\n");

            foreach ($result as $row)
            {
                echo("<tr>\n");
                echo("<td>{$row['nome']}</td>\n");
                /* permite que qualquer tipo de categoria possa ser supercategoria */
                echo("<td><a href=\"associarsupercategoria.php?super_categoria={$row['nome']}&categoria_simples=");
                echo($categoria_simples);
                echo("\">Associar a esta categoria</a></td>\n");
                echo("</tr>\n");
            }

            echo("</tables>\n");

            echo($categoria_simples);

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
