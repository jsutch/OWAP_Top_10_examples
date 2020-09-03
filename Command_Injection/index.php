<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // username and password are sent in form
        $ip = $_POST['ip'];
        echo $ip;
        $out = shell_exec('ping -c 2 ' . $ip);
        echo $out;
    }
?>

 <html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
IP: <input type="text" name="ip"><br>
E-mail: <input type="text" name="email"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>
