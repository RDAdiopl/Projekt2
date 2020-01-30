<?php include 'header.php'; ?>
<body>
    <?php include 'panel.php'; ?>
<div class="main">
    <?php
    if(isset($_SESSION["username"])) 
    {
        echo "<h1>Zalogowano jako ".$_SESSION["username"]."</h1>";
    }
    else 
    {
        echo "<h1>Żeby korzystać z naszych usług prosimy się zalogować</h1>";
    }
    ?>
</div>
</body>
</html>