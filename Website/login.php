<?php

$host="locolhost";
$user="root";
$password="";
$db="users";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password']
}

?>



<html>
	<head>
		<title>Login Page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <h1>Login Page</h1>
        <form method="post" action="#">
            <div class="form_input">
                <input type="text" name="username" placeholder="UserName"
            </div>
            <div class="form_input"> 
                <input type="password" name="password" placeholder="Password"
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login"
        </form>
    </body>
</html>