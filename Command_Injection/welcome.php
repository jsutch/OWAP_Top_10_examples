<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your password is: <?php echo $_POST["email"]; ?><br>
Your IP is: 
<?php
        //$ip = $_SERVER['REMOTE_ADDR'];
        $ip = $_POST['ip'];
        if($ip) {
            echo $ip;
            $out = shell_exec('ping -c 2 ' . $ip);
            echo $out;
        }
        else {
            echo "no IP set";
        }
?> <br>
</body>
</html> 
