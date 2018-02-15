<html>
    <body>
        <form action="alterardesignacao.php" method="post">
            <p>Alterar a designacao do produto: <input type="hidden" name="ean" value="<?=$_REQUEST['ean']?>"/></p>
            <p>Nova designacao: <input type="text" name="designacao"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
    </body>
</html>
