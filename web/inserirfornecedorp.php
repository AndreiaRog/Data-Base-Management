<html>
	<body>
	    <h3>Introduzir nif e nome do novo fornecedor primario</h3>
        <form action="novofornecedorp.php" method="post">
            <p><input type="hidden" name="ean" value="<?=$_REQUEST['ean']?>"/></p>
            <p><input type="hidden" name="design" value="<?=$_REQUEST['design']?>"/></p>
            <p><input type="hidden" name="categoria" value="<?=$_REQUEST['categoria']?>"/></p>
            <p>NIF do novo fornecedor primario:<input type="text" name="forn_primario"/></p>
            <p>Nome do novo fornecedor primario:<input type="text" name="nome"/></p>           
            <p><input type="submit" value="Prosseguir"/></p>
        </form>
    </body>
</html>
