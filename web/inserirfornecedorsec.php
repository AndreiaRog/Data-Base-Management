<html>
	<body>
	    <h3>Introduzir nif e nome do novo fornecedor secundario</h3>
        <form action="novofornecedorsec.php" method="post">
            <p><input type="hidden" name="ean" value="<?=$_REQUEST['ean']?>"/></p>
            <p><input type="hidden" name="design" value="<?=$_REQUEST['design']?>"/></p>
            <p><input type="hidden" name="categoria" value="<?=$_REQUEST['categoria']?>"/></p>
            <p><input type="hidden" name="forn_primario" value="<?=$_REQUEST['forn_primario']?>"/></p>
            <p><input type="hidden" name="data" value="<?=$_REQUEST['data']?>"/></p>
            <p>NIF do novo fornecedor secundario:<input type="text" name="fornece_sec"/></p>
            <p>Nome do novo fornecedor secundario:<input type="text" name="nome"/></p>
            <p><input type="submit" value="Prosseguir"/></p>
        </form>
    </body>
</html>
