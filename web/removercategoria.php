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

            $sql = "DELETE FROM categoria WHERE nome=?;";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($categoria));

            $db->query("commit;");

            echo("<p>Categoria removida com sucesso</p>");

            /* se forem removidas todas as categorias de uma supercategoria, esta deve passar para categoria simples */
            $sql = "SELECT * FROM  super_categoria;";

            $result = $db->query($sql);

            foreach ($result as $row)
            {
                $categoria = $row['nome'];
                $sql = "SELECT * FROM constituida where super_categoria='$categoria';";

                $result = $db->query($sql);

                $count = $result->rowCount();

                if ($count == 0){

                    $db->query("start transaction;");

                    $sql = "INSERT INTO categoria_simples (nome) VALUES (?);";
                    $stmt = $db->prepare($sql);
                    $stmt->execute(array($categoria));

                    $db->query("commit;");
                    $db->query("start transaction;");

                    $sql = "DELETE FROM super_categoria WHERE nome=?;";
                    $stmt = $db->prepare($sql);
                    $stmt->execute(array($categoria));
                    $db->query("commit;");
                }
            }


            $db = null;
        }
        catch (PDOException $e)
        {
            $db->query("rollback;");
            /* echo("<p>ERROR: {$e->getMessage()}</p>"); */
            echo("<p>A categoria nao se encontra vazia. Remover primeiro os seus produtos e depois tentar de novo remover a categoria</p>");
            echo("<td><a href=\"produtos.php\">Remover produtos da Categoria</a></td>\n");

        }

    ?>
        <td><sb1 type="button"><a href="categorias.php"><b>Para inserir ou remover uma nova categoria</b></a></sb2></td>
        <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>



    </body>
</html>
