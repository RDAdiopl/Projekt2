<?php include 'header.php'; ?>
<body>
    <a href='index.php' class='back'>Wróć</a>
    <div class="rejestracja">
    <form name="rejestracja" method="post">
        Nazwa użytkownika:<br>
        <input type="text" name="login" min=4 maxlength="16"><br>
        Hasło:<br>
        <input type="password" name="password" min=4 maxlength="16"><br>
        Powtórz hasło:<br>
        <input type="password" name="rpassword" min=4 maxlength="16">
        <div id="blank" style="color: red;"></div>
        <input type="submit" name="click" class="button" value="Zarejestruj się">
    </form>
    </div>
</body>
</html>
<?php
if(isset($_REQUEST['click']))
{
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $rhaslo = $_POST['rpassword'];
    if (empty($login) || empty($haslo) || strlen($login) <= 3 || strlen($haslo) <= 3) 
    {
        echo "Niepoprawne dane";
    }
    else
    {
        if($haslo == $rhaslo)
        {
        register($login,$haslo);
        $_SESSION["username"] = $login;
        header("Location: index.php");
        }
        else
        {
            echo "Niepoprawne hasło'";
        }
    }    
}
?>
