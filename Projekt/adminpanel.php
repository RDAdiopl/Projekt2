<div class="menu">
<a href='adminpage.php' class='button'>Produkty</a>
<a href='adminzamowienia.php' class='button'>Zamówienia</a>
<?php 
 if(isset($_SESSION["username"])) 
 {
     echo "<div class='login'>";
     echo "<a href='wyloguj.php' class='button2'>Wyloguj</a>";
     echo "</div>";
 }
 ?>
 </div>
