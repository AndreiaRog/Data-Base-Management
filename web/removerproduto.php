<html>
	<body>
        <form action="apagarproduto.php" method="post">
            <p><input type="hidden" name="ean" value="<?=$_REQUEST['ean']?>"/></p>
            <p>Ean do produto a apagar: <input type="text" name="ean"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
    </body>
</html>