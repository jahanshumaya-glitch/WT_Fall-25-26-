<?php
include "db.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password))
    {
        $error = "Username and Password required";
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $username))
    {
        $error = "Username must contain only letters";
    }
    elseif (!preg_match("/^.{8,}$/", $password))
    {
        $error = "Password must be at least 8 characters";
    }
    else
    {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Farmer(User_Name, Password) VALUES ('$username', '$hashPassword')";

        if ($conn->query($sql))
        {
            $success = "Login successful";
        }
        else
        {
            $error = "ERROR: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer Login</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<div class="box">
<h1>Farmer Login</h1>

<form method="post" action="">
    Username:<br>
    <input type="text" name="username" value=""><br><br>

    Password:<br>
    <input type="password" name="password" value=""><br><br>

    <input type="submit" value="Login">
</form>

<p style="color:green;"><?php echo $success; ?></p>
<p style="color:red;"><?php echo $error; ?></p>

<br>
<a href="register.html">Not Registered? Register</a>

</div>

</body>
</html>
