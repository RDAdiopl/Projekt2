<div class="menu">
    <a href='index.php' class='button'>Strona główna</a>
    <a href='sklep.php' class='button'>Produkty</a>
    <?php 
        if(isset($_SESSION["username"])) 
        {
            echo "<div class='login'>";
            echo "<a href='wyloguj.php' class='button2'>Wyloguj</a>";
            echo "</div>";
            echo "<a href='zamowienia.php' class='button'>Moje zamówienia</a>";
        }
        else 
        {
            echo "<div class='login'>";
            echo "<a href='logowanie.php' class='button2'>Login</a>";
            echo "<a href='rejestracja.php' class='button2'>Rejestracja</a>";
            echo "</div>";
        }
    ?>
</div>