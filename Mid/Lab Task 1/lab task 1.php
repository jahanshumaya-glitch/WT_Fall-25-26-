<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clinic Patient Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clinic Patient Registration Form</h1>

    <form>
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Insurance Provider:</td>
                <td>
                    <select name="insurance_provider">
                        <option value="">Select Provider</option>
                        <option value="GreenLife">Green Life Insurance</option>
                        <option value="MediCare">MediCare Health</option>
                        <option value="CityHealth">City Health Insurance</option>
                        <option value="LifePlus">LifePlus Assurance</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Insurance Policy Number:</td>
                <td><input type="text" name="policy_number"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <h5>Additional Information</h5>
                </td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirm_password"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
