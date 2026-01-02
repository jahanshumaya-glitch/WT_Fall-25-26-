<?php
include "db.php";

$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];

    if (
        empty($name) || empty($username) || empty($password) ||
        empty($cpassword) || empty($email) || empty($number) ||
        empty($address) || empty($dob)
    )
    {
        $error = "Invalid do again";
    }
    else
    {
        if ($password != $cpassword)
        {
            $error = "Invalid do again";
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
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer Registration</title>
    <link rel="stylesheet" href="style.css">
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
