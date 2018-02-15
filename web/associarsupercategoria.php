<html>
	<body>
	<?php
		$super_categoria=$_REQUEST['super_categoria'];
        $categoria_simples=$_REQUEST['categoria_simples'];
		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM categoria_simples WHERE nome='$super_categoria';";

            $result = $db->query($sql);

            $count = $result->rowCount();

            /*echo($result); */

            if ($count !=0){
                $db->query("start transaction;");

                $sql = "INSERT INTO super_categoria (nome) VALUES (?);";
                $stmt = $db->prepare($sql);
                $stmt->execute(array($super_categoria));

                $db->query("commit;");
                $db->query("start transaction;");

                $sql = "DELETE FROM categoria_simples WHERE nome=?;";
                $stmt = $db->prepare($sql);
                $stmt->execute(array($super_categoria));
                $db->query("commit;");

            }

            $db->query("start transaction;");

            $sql = "INSERT INTO constituida (super_categoria, categoria) VALUES (?, ?);";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($super_categoria, $categoria_simples));

            $db->query("commit;");

            $db = null;

            echo("<p>Foi associada a nova categoria a uma super categoria</p>");

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
