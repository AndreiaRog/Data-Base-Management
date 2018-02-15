<html>
	<body>
	    <h3>Introduzir detalhes do Fornecimento do novo Produto</h3>
        <form action="inserirproduto_fornece_sec.php" method="post">
            <p><input type="hidden" name="ean" value="<?=$_REQUEST['ean']?>"/></p>
            <p><input type="hidden" name="design" value="<?=$_REQUEST['design']?>"/></p>
            <p><input type="hidden" name="categoria" value="<?=$_REQUEST['categoria']?>"/></p>            
            <p><input type="hidden" name="forn_primario" value="<?=$_REQUEST['forn_primario']?>"/></p>
			<p>Data de inicio do fornecimento (formato ideal: AAAA-MM-DD HH:MM:SS): <input type="text" name="data"/></p> 
            <p><input type="submit" value="Prosseguir"/></p>
        </form>
    </body>
</html>

