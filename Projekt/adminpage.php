<?php include 'header.php'; ?>
<body>
    <?php include 'adminpanel.php'; ?>
<div class="main">
<br><br><br>
<div class="dodaj">
   <form method="POST">
        Dodaj produkty
        <p>Nazwa produktu: <input type="text" name="nazwa"></p>
        <p>Cena produktu: <input type="number" name="cena"></p>
        <p><input type="submit" value="Dodaj" name="click"></p>
    </form>
</div>
<div class="usun">
        Usuń produkty<br><br>
        <?php
            $res = getProducts();
            while($row = $res->fetch_assoc())
            {
                echo "<form class='fusun' method='POST'>";
                echo "<div class='pusun'>";
                echo ucfirst($row["produkt"]);
                echo "<input type='hidden' name='produkt' value=".$row["produkt"].">";
                echo " <input type='submit' name='click2' value='X'>";
                echo "</div>";
                echo "</form>";
            }
        ?>
</div>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['click']))
{
    addProducts($_POST["nazwa"],$_POST["cena"]);
    header("Location: adminpage.php");
}
if(isset($_REQUEST['click2']))
{
    deleteProducts($_POST['produkt']);
    header("Location: adminpage.php");
}
?>