<?php include 'header.php'; ?>
<body>
    <a href='index.php' class='back'>Wróć</a>
    <div class="logowanie">
    <form name="logowanie" method="post">
        Nazwa użytkownika:<br>
        <input type="text" name="login" maxlength="16"><br>
        Hasło:<br>
        <input type="password" name="password" maxlength="16">
        <div class="blank" style="color: red;"></div>
        <input type="submit" name="click"class="button" value="Zaloguj się">
    </form>
    </div>
</body>
</html>
<?php
if(isset($_REQUEST['click']))
{
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $result = login($login);
    $row = $result->fetch_assoc();
    if($result->num_rows > 0)
    {
        if(hash('sha512', $haslo) == $row["password"])
        {
        $_SESSION["username"] = $login;
            if($login == "admin")
            {
                header("Location: adminpage.php");
            }
            else
            {
                header("Location: index.php");
            }
        }
        else
        {
            echo "Błąd";
        }
    }
    else
    {
        echo "Błąd";
    }
}
?>
