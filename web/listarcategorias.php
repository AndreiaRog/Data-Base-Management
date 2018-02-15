
<html>
	<body>
	<?php
		$supercategoria=$_REQUEST['supercategoria'];
		try
		{
			$host = "db.ist.utl.pt";
			$user ="ist181343";
			$password = "ffpk2017";
			$dbname = $user;
			$db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        	function openSQL($host,$user,$password,$dbname) {
				$conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
				return $conn;
			}

			function display_children($parent,$level,$host,$user,$password,$dbname) {
				$db=openSQL($host,$user,$password,$dbname);
       			$sql="SELECT categoria FROM constituida WHERE super_categoria='$parent';";
       			$result=$db->query($sql);
			   	foreach($result as $row) {
			   		echo ("---");
			        echo str_repeat("---", $level);
			        echo ($row['categoria']);
			        echo ("<br \>");
			        display_children($row['categoria'], $level+1,$host,$user,$password,$dbname);
				}
        	}
        	echo ("$supercategoria<br \>");
        	display_children($supercategoria,0,$host,$user,$password,$dbname);
        	$db=null;
		}
		catch (PDOException $e)
    	{
    		echo("<p>ERROR: {$e->getMessage()}</p>");
    	}
	?>

	  <td><sb1 type="button"><a href="listarcat.php"><b>Mostrar subcategorias de outra super-categoria</b></a></sb1></td>
      <td><sb type="button"><a href="home.php"><b>Pagina Inicial</b></a></sb></td>
	</body>
</html>
