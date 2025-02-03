<!DOCTYPE html>
<html>
<head>
    <title>Test Button</title>
</head>
<body>
    <?php
    function testFunction() {
        echo "Button clicked!";
    }

    if(isset($_POST['test_button'])) {
        testFunction();
    }
    ?>

    <form action="exportdompdf.php" method="POST">
        <input type="submit" name="export_button" value="Export to PDF">
    </form>

    <form action="carta_propietarios.php" method="POST">
        <input type="submit" name="carta_propietarios" value="CARTA PROPIETARIOS">
    </form>

    <form action="carta_arrendatarios.php" method="POST">
        <input type="submit" name="carta_arrendatarios" value="CARTA ARRENDATARIOS">
    </form>

    <form action="contrato_arriendo.php" method="POST">
        <input type="submit" name="contrato_arrientdo" value="CONTRATO ARRENDATARIOS">
    </form>
</body>
</html>