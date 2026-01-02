<!DOCTYPE html>
<html>
<head>
    <title>Login Validation</title>
</head>
<body>

<h1>Farmer Login</h1>

<?php
include "db.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password))
    {
        $error = "Invalid do again";
    }
    else
    {
        $hassPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Farmer(User_Name, Password)
                VALUES ('$username', '$hassPassword')";

        if ($conn->query($sql))
        {
            $success = "Login successful";
        }
        else
        {
            $error = "ERROR " . $conn->error;
        }
    }
}
?>

<form method="post" action="">
    Username:
    <input type="text" name="username" value=""><br><br>

    Password:
    <input type="password" name="password" value=""><br><br>

    <input type="submit" value="Login">
</form>

<p style="color:green;"><?php echo $success; ?></p>
<p style="color:red;"><?php echo $error; ?></p>

<br>
<a href="register.html">Not Registered? Register</a>

</body>
</html>
