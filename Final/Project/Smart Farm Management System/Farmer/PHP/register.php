<?php
include "db.php";

$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $cpassword = trim($_POST["cpassword"]);
    $email = trim($_POST["email"]);
    $number = trim($_POST["number"]);
    $address = trim($_POST["address"]);
    $dob = trim($_POST["dob"]);

    if (
        empty($name) || empty($username) || empty($password) ||
        empty($cpassword) || empty($email) || empty($number) ||
        empty($address) || empty($dob)
    )
    {
        $error = "Please fill in all fields";
    }
    elseif(!preg_match("/^[a-zA-Z ]+$/", $name))
    {
        $error = "Name can only contain letters and spaces";
    }
    elseif($password != $cpassword)
    {
        $error = "Password and Confirm Password do not match";
    }
    elseif(!preg_match("/^[^@]+@[^@]+\.[^@]+$/", $email))
    {
        $error = "Email must be valid and contain @";
    }
    elseif(!preg_match("/^[0-9]{11}$/", $number))
    {
        $error = "Phone number must contain exactly 11 digits";
    }
    else
    {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Farmer
        (Name, User_Name, Password, Email, Number, Address, Date_of_Birth)
        VALUES
        ('$name','$username','$hashPassword','$email','$number','$address','$dob')";

        if ($conn->query($sql))
        {
            $success = "Registration complete";
        }
        else
        {
            $error = "ERROR " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer Registration</title>
   <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<div class="box">
<h2>Registration Status</h2>

<p style="color:green;"><?php echo $success; ?></p>
<p style="color:red;"><?php echo $error; ?></p>

<a href="login.html">Login</a>

</div>

</body>
</html>
