<div class="menu">
<input type="button" class="button" value="Produkty" onclick="location.href='adminpage.php'">
<input type="button" class="button" value="Zamówienia" onclick="location.href='adminzamowienia.php'">
<?php 
 if(isset($_SESSION["username"])) 
 {
     echo "<div class='login'>";
     echo "<input type='button' class='button2' name='wyloguj' value='Wyloguj' onclick=location.href='wyloguj.php'>";
     echo "</div>";
 }
 ?>
 </div>
