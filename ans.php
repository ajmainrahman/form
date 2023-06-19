<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>

<body>
    <h2>Registration</h2>
    <form action="" method="">
        <label for="name">Name:
            <input type="text" name="name" id="name">
        </label><br><br>

        <label for="email">Email:
            <input type="text" name="email" id="email">
        </label><br><br>

        <label for="dob">Date of Birth:
            <input type="text" name="dob" id="dob">
        </label><br><br>

        <span>Gender</span>
        <label for="gender">
            <input type="radio" name="gender" id="male" value="male">male:
            <input type="radio" name="gender" id="female" value="female">Female:
        </label><br><br>

        <label for="city">City
            <select name="city" id="city">
                <option value="select"> Select</option>
                <option value="dhaka">Dhaka</option>
                <option value="chittagong">Chittagong</option>
            </select>
        </label><br><br>
        
        <label for="address">Address <br><br>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </label><br><br>
        <input type="submit" value="save">
        <input type="submit" value="update">
    </form>
</body>
</html>

<!-- <?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'labfinal');
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$address = $_POST['address'];
$sql = "INSERT INTO regis (name, email, dob, gender, city, address) VALUES ('$name', '$email', '$dob', '$gender', '$city', '$address');";
// echo $sql;
mysqli_query($con, $sql);
echo "<script>location.href='search.php'</script>";
?> -->
