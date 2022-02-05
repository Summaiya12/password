<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<?php
if(isset($_POST["password"])&& isset($_POST["hash"]))
{
$password=$_POST["password"];
$hash=$_POST["hash"];
if(password_verify($password,$hash))
{
    echo "The passsword is"."$password"." was verified  against the hash"."$hash"."</br>";
}
else {
    echo "password not verified";
}
}


?>
<body>
<form action="" method="post">
    Enter the password to verify:
        <input type="text"name="password" id="hash">
    </br>
    Enter the hash to verify:
        <input type="text"name="hash" id="hash">
    <input type="submit" value="submit">
</form>
</body>
</html>